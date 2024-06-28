@extends('front.layouts.app')
@section('title', 'Profile_details')

@section('content')

    {{-- Breadcrumb --}}
    <section class="w-100 bg-warning-subtle" data-aos="fade-up">
        <div class="container">
            <div class="d-flex justify-content-start align-items-center height-350">
                <div>

                    <h1 class="fs-1 fw-bold text-theme-secondary mb-3 d-block" data-aos="fade-up" data-aos-delay="100">
                        Profile Details
                    </h1>

                    <nav data-aos="fade-up" data-aos-delay="200"
                         style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                         aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('front.home')}}" class="text-decoration-none text-dark">
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="{{route('front.profile_details')}}" class="text-decoration-none text-theme">
                                    Profile Details
                                </a>
                            </li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </section>

    {{-- Profile content --}}
    <section class="w-100 py-5" id="front-profile">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="border p-4 w-100">

                        {{-- group btn --}}
                        <div class="w-100 d-flex justify-content-start align-items-center mb-3 gap-2">
                            <button type="button" class="btn btn-outline-theme rounded-0 px-3" @click="changeTab('edit-profile')">
                                Edit Profile
                            </button>
                            <button type="button" class="btn btn-outline-theme rounded-0 px-3" @click="changeTab('change-password')">
                                Change Password
                            </button>
                        </div>

                        {{-- edit profile --}}
                        <form @submit.prevent="updateProfile()" class="w-100" v-if="this.tab === 'edit-profile'">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" type="text" name="name" class="form-control shadow-none px-3 py-2 rounded-0"
                                       autocomplete="off" v-model="profileParam.name">
                                <div class="error-report" v-if="error != null && error.name !== undefined"
                                     v-text="error.name[0]"></div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email" class="form-control shadow-none px-3 py-2 rounded-0"
                                       autocomplete="off" v-model="profileParam.email">
                                <div class="error-report" v-if="error != null && error.email !== undefined"
                                     v-text="error.email[0]"></div>
                            </div>
                            <button type="submit" class="btn btn-theme width-120 rounded-0" v-if="!profileUpdateLoading">
                                Update
                            </button>
                            <button type="button" class="btn btn-theme width-120 rounded-0" v-if="profileUpdateLoading">
                                Loading
                            </button>
                        </form>

                        {{-- change password --}}
                        <form @submit.prevent="updatePassword()" class="w-100" v-if="this.tab === 'change-password'">
                            <div class="form-group mb-3">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input id="current_password" type="password" name="current_password" v-model="passwordParam.current_password"
                                       class="form-control shadow-none px-3 py-2 rounded-0" autocomplete="off">
                                <div class="error-report" v-if="error != null && error.current_password !== undefined"
                                     v-text="error.current_password[0]"></div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" name="password" v-model="passwordParam.password"
                                       class="form-control shadow-none px-3 py-2 rounded-0" autocomplete="off">
                                <div class="error-report" v-if="error != null && error.password !== undefined"
                                     v-text="error.password[0]"></div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password_confirmation" class="form-label"> Password Confirmation </label>
                                <input id="password_confirmation" type="password" name="password_confirmation" v-model="passwordParam.password_confirmation"
                                       class="form-control shadow-none px-3 py-2 rounded-0" autocomplete="off">
                                <div class="error-report" v-if="error != null && error.password_confirmation !== undefined"
                                     v-text="error.password[0]"></div>
                            </div>
                            <button type="submit" class="btn btn-theme width-120 rounded-0" v-if="!passwordUpdateLoading">
                                Update
                            </button>
                            <button type="button" class="btn btn-theme width-120 rounded-0" v-if="passwordUpdateLoading">
                                Loading
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="module">
        const {createApp, ref} = Vue;
        createApp({
            data() {
                return {
                    tab: 'edit-profile',
                    profile_details: '',
                    profileUpdateLoading: false,
                    passwordUpdateLoading: false,
                    profileParam: {
                        name: '',
                        email: '',
                    },
                    passwordParam: {
                        current_password: '',
                        password: '',
                        password_confirmation: '',
                    },
                    error: null,
                }
            },
            mounted() {

            },
            methods: {

                /* --- --- --- Function to change tab --- --- --- */
                changeTab(tab) {
                    this.tab = tab
                },

                /* --- --- --- function of clear error handler --- --- --- */
                ClearErrorHandler() {
                    const elements = document.querySelectorAll('.error-report');
                    elements.forEach((e) => {
                        e.textContent = '';
                    });
                },

                /* --- --- --- function of profile details --- --- --- */
                profileDetails() {
                    this.ClearErrorHandler();
                    let headerContent = {
                        'Content-Type': 'application/json; charset=utf-8',
                    }
                    this.error = null;
                    axios.get(`{{route('User.Profile.Details')}}`, this.profile_details, {headers: headerContent}).then((response) => {
                        if (response) {
                            this.profile_details = response?.data?.data
                            this.profileParam = this.profile_details;
                        }
                    }).catch(err => {
                        let res = err?.response;
                        if (res?.data?.errors !== undefined) {
                            this.error = res?.data?.errors;
                        }
                    });
                },

                /* --- --- --- function of update profile --- --- --- */
                updateProfile(){
                    this.ClearErrorHandler();
                    this.profileUpdateLoading = true;
                    let headerContent = {
                        'Content-Type': 'application/json; charset=utf-8',
                    }
                    axios.patch('{{route('User.Profile.Update')}}', this.profileParam, {headers: headerContent}).then((response) => {
                        this.profileUpdateLoading = false;
                        window.location.href = `{{route('front.profile_details')}}`;
                    }).catch(err => {
                        let res = err?.response;
                        if(res?.data?.errors !== undefined) {
                            this.error = res?.data?.errors;
                        }
                    })
                },

                /* --- --- --- function of update password --- --- --- */
                updatePassword(){
                    this.ClearErrorHandler();
                    this.passwordUpdateLoading = true;
                    let headerContent = {
                        'Content-Type': 'application/json; charset=utf-8',
                    }
                    axios.patch('{{route('User.Profile.Update.Password')}}', this.passwordParam, {headers: headerContent}).then((response) => {
                        this.passwordUpdateLoading = false;
                        {{--window.location.href = `{{route('front.profile_details')}}`;--}}
                    }).catch(err => {
                        let res = err?.response;
                        if(res?.data?.errors !== undefined) {
                            this.error = res?.data?.errors;
                        }
                    })
                },

            }
        }).mount('#front-profile')
    </script>

@endsection
