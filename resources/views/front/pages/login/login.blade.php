@extends('front.layouts.app')
@section('title', 'Login')

@section('content')

    <section class="w-100 py-5" id="login">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center py-5">
                <div class="px-2 border col-11 col-sm-9 bg-white">
                    <div class="row align-items-center px-2">
                        <form @submit.prevent="loginForm()" class="col-lg-5 p-4 fw-medium">
                            <div class="fs-3 mb-3"> Welcome to your account </div>
                            <div class="alert alert-danger rounded-3 mb-3 text-center" v-if="error !== null && error.error !== undefined" v-text="error.error"></div>
                            <div class="text-secondary mb-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, libero.
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email" class="form-control py-2 px-3 rounded-0 shadow-none border" autocomplete="off" v-model="loginParam.email">
                                <div class="error-report" v-if="error != null && error.email !== undefined" v-text="error.email[0]"></div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" name="password" class="form-control py-2 px-3 rounded-0 shadow-none border" autocomplete="off" v-model="loginParam.password">
                                <div class="error-report" v-if="error != null && error.password !== undefined" v-text="error.password[0]"></div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-theme py-2 px-3 rounded-0">
                                    Login
                                </button>
                                <a href="{{route('front.forget_password')}}" class="text-danger text-decoration-none">
                                    Forget Password?
                                </a>
                            </div>
                        </form>
                        <div class="col-lg-7 border-start d-flex justify-content-center align-items-center flex-column" style="min-height: 600px">
                            <div class="mb-3 text-center fw-medium fs-3">
                                Don't have any account
                            </div>
                            <a href="{{route('front.register')}}" class="text-decoration-none text-secondary fs-5">
                                Create New Account
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
            data(){
                return {
                    loading: false,
                    error: null,
                    loginParam: {
                        email: '',
                        password: '',
                    }
                }
            },
            mounted(){},
            methods: {

                ClearErrorHandler() {
                    const elements = document.querySelectorAll('.error-report');
                    elements.forEach((e) => {
                        e.textContent = '';
                    });
                },

                loginForm() {
                    this.ClearErrorHandler();
                    this.loading = true;
                    let headerContent = {
                        'Content-Type': 'application/json; charset=utf-8',
                    }
                    this.error = null;
                    axios.post(`{{route('User.Auth.Login')}}`, this.loginParam, {headers: headerContent}).then((response) => {
                        if (response.data) {
                            this.loading = false;
                            this.loginParam = {
                                email: '',
                                password: '',
                            };
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
        }).mount('#login')
    </script>

@endsection
