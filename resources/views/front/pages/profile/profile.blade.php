@extends('front.layouts.app')
@section('title', 'Profile_details')

@section('content')

    {{-- Profile content --}}
    <section class="w-100 py-5" id="front-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="border p-4 w-100">
                        <a href="javascript:void(0)" class="nav-link">
                            Profile
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="border p-4 w-100">

                        <div class="w-100 d-flex justify-content-start align-items-center mb-3 gap-2">
                            <button type="button" class="btn btn-outline-theme rounded-0 px-3" @click="changeTab('edit-profile')">
                                Edit Profile
                            </button>
                            <button type="button" class="btn btn-outline-theme rounded-0 px-3" @click="changeTab('change-password')">
                                Change Password
                            </button>
                        </div>

                        <div class="w-100" v-if="this.tab === 'edit-profile'">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" type="text" name="name" class="form-control shadow-none px-3 py-2 rounded-0"
                                       autocomplete="off">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email" class="form-control shadow-none px-3 py-2 rounded-0"
                                       autocomplete="off">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" name="password"
                                       class="form-control shadow-none px-3 py-2 rounded-0" autocomplete="off">
                            </div>
                            <button type="submit" class="btn btn-theme width-120">
                                Update
                            </button>
                        </div>

                        <div class="w-100" v-if="this.tab === 'change-password'">
                            <div class="form-group mb-3">
                                <label for="current-password" class="form-label">Current Password</label>
                                <input id="current-password" type="password" name="current-password"
                                       class="form-control shadow-none px-3 py-2 rounded-0" autocomplete="off">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" name="password"
                                       class="form-control shadow-none px-3 py-2 rounded-0" autocomplete="off">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password-confirmation" class="form-label"> Password Confirmation </label>
                                <input id="password-confirmation" type="password" name="password-confirmation"
                                       class="form-control shadow-none px-3 py-2 rounded-0" autocomplete="off">
                            </div>
                            <button type="submit" class="btn btn-theme width-120">
                                Update
                            </button>
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
                    tab: 'edit-profile',
                }
            },
            mounted() {
            },
            methods: {

                /* Function to change tab */
                changeTab(tab) {
                    this.tab = tab
                },

            }
        }).mount('#front-profile')
    </script>

@endsection
