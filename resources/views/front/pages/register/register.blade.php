@extends('front.layouts.app')
@section('title', 'Registration')

@section('content')

    {{-- Registration content --}}
    <section class="w-100 py-5" id="registration">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center py-5">
                <div class="px-2 col-11 col-sm-10 bg-white">
                    <div class="row align-items-center px-2">

                        {{-- Registration form --}}
                        <form @submit.prevent="registrationForm()" class="col-lg-5 p-4 fw-medium border">

                            {{-- Registration title --}}
                            <div class="fs-4"> Create new account</div>

                            {{-- Registration description --}}
                            <div class="text-secondary mb-3">
                                Make your interest easy and fun!
                            </div>

                            {{-- Form group - name --}}
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" type="text" name="name"
                                       class="form-control py-2 px-3 rounded-0 shadow-none border"
                                       autocomplete="off" v-model="registerParam.name">
                                <div class="error-report" v-if="error != null && error.name !== undefined"
                                     v-text="error.name[0]"></div>
                            </div>

                            {{-- Form group - email --}}
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email"
                                       class="form-control py-2 px-3 rounded-0 shadow-none border"
                                       autocomplete="off" v-model="registerParam.email">
                                <div class="error-report" v-if="error != null && error.email !== undefined"
                                     v-text="error.email[0]"></div>
                            </div>

                            {{-- Form group - password --}}
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" name="password"
                                       class="form-control py-2 px-3 rounded-0 shadow-none border"
                                       autocomplete="off" v-model="registerParam.password">
                                <div class="error-report" v-if="error != null && error.password !== undefined"
                                     v-text="error.password[0]"></div>
                            </div>

                            {{-- Form group - password confirmation --}}
                            <div class="form-group mb-3">
                                <label for="password-confirmation" class="form-label">Confirm Password</label>
                                <input id="password-confirmation" type="password" name="password-confirmation"
                                       class="form-control py-2 px-3 rounded-0 shadow-none border"
                                       autocomplete="off" v-model="registerParam.password_confirmation">
                                <div class="error-report"
                                     v-if="error != null && error.password_confirmation !== undefined"
                                     v-text="error.password_confirmation[0]"></div>
                            </div>

                            {{-- Action button --}}
                            <div>
                                <button type="submit" class="btn btn-theme py-2 px-3 rounded-0" v-if="!loading">
                                    Registration
                                </button>
                                <button type="button" class="btn btn-theme py-2 px-3 rounded-0" v-if="loading">
                                    Loading
                                </button>
                            </div>

                        </form>

                        {{-- Login route --}}
                        <div class="col-lg-7 d-flex justify-content-center align-items-center flex-column">
                            <div class="mb-3 text-center fw-medium fs-3">
                                Already have an account
                            </div>
                            <a href="{{route('front.login')}}" class="text-decoration-none text-secondary fs-5">
                                Welcome to your account
                            </a>
                        </div>

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
                    // data properties
                    loading: false,
                    error: null,
                    registerParam: {
                        name: '',
                        email: '',
                        password: '',
                        password_confirmation: ''
                    },
                }
            },
            mounted() {
            },
            methods: {

                /* --- --- --- function of clear error handler --- --- --- */
                ClearErrorHandler() {
                    const elements = document.querySelectorAll('.error-report');
                    elements.forEach((e) => {
                        e.textContent = '';
                    });
                },

                /* --- --- --- function of registration api --- --- --- */
                registrationForm() {
                    this.ClearErrorHandler();
                    this.loading = true;
                    let headerContent = {
                        'Content-Type': 'application/json; charset=utf-8',
                    }
                    this.error = null;
                    axios.post(`{{route('User.Auth.Register')}}`, this.registerParam, {headers: headerContent}).then((response) => {
                        if (response.data) {
                            this.loading = false;
                            this.registerParam = {
                                name: '',
                                email: '',
                                password: '',
                                password_confirmation: ''
                            };
                            window.location.href = "{{route('front.login')}}"
                        }
                    }).catch(err => {
                        this.loading = false;
                        let res = err?.response;
                        if (res?.data?.errors !== undefined) {
                            this.error = res?.data?.errors;
                        }
                    });
                },

            }
        }).mount('#registration')
    </script>

@endsection
