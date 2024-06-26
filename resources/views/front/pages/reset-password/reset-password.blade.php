@extends('front.layouts.app')
@section('title', 'Reset password')

@section('content')

    {{-- Reset content --}}
    <section class="w-100 py-5" id="reset">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="px-2 col-11 col-sm-10">
                    <div class="row align-items-center px-2">

                        {{-- Reset form --}}
                        <form @submit.prevent="resetForm()" class="col-lg-5 p-4 border fw-medium">

                            {{-- Reset title --}}
                            <div class="fs-4">
                                Reset Password
                            </div>

                            {{-- Reset description --}}
                            <div class="text-secondary mb-3">
                                Take your reset code from your email
                            </div>

                            {{-- Form-group - email --}}
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email"
                                       class="form-control py-2 px-3 rounded-0 border shadow-none"
                                       autocomplete="off" v-model="resetParam.email" disabled>
                                <div class="error-report" v-if="error != null && error.email !== undefined"
                                     v-text="error.email[0]"></div>
                            </div>

                            {{-- Form-group - reset code --}}
                            <div class="form-group mb-3">
                                <label for="reset_code" class="form-label">Code</label>
                                <input id="reset_code" type="text" name="reset_code"
                                       class="form-control py-2 px-3 rounded-0 shadow-none" autocomplete="off"
                                       v-model="resetParam.reset_code">
                                <div class="error-report" v-if="error != null && error.reset_code !== undefined"
                                     v-text="error.reset_code[0]"></div>
                            </div>

                            {{-- Form-group - password --}}
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" name="password"
                                       class="form-control py-2 px-3 rounded-0 shadow-none" autocomplete="off"
                                       v-model="resetParam.password">
                                <div class="error-report" v-if="error != null && error.password !== undefined"
                                     v-text="error.password[0]"></div>
                            </div>

                            {{-- Form-group - password confirmation --}}
                            <div class="form-group mb-3">
                                <label for="confirm-password" class="form-label">Confirm Password</label>
                                <input id="confirm-password" type="password" name="password_confirmation"
                                       class="form-control py-2 px-3 rounded-0 shadow-none" autocomplete="off"
                                       v-model="resetParam.password_confirmation">
                                <div class="error-report"
                                     v-if="error != null && error.password_confirmation !== undefined"
                                     v-text="error.password_confirmation[0]"></div>
                            </div>

                            {{-- Action button --}}
                            <div class="mb-3">
                                <button type="submit" class="btn btn-theme py-2 px-3 rounded-0" v-if="!loading">
                                    Reset
                                </button>
                                <button type="button" class="btn btn-theme py-2 px-3 rounded-0" v-if="loading">
                                    Loading
                                </button>
                            </div>

                        </form>

                        {{-- Login route --}}
                        <div class="col-lg-7 d-flex justify-content-center align-items-center flex-column">
                            <div class="mb-3 text-center fw-medium fs-3">
                                Remember Password
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
                    resetParam: {
                        email: '',
                        reset_code: '',
                        password: '',
                        password_confirmation: '',
                    }
                }
            },
            mounted() {
                const params = new URLSearchParams(window.location.search);
                if (params.has('email')) {
                    this.resetParam.email = decodeURIComponent(params.get('email'));
                }
            },
            methods: {

                /* --- --- --- function of clear error handler --- --- --- */
                ClearErrorHandler() {
                    const elements = document.querySelectorAll('.error-report');
                    elements.forEach((e) => {
                        e.textContent = '';
                    });
                },

                /* --- --- --- function of forget api --- --- --- */
                resetForm() {
                    this.ClearErrorHandler();
                    this.loading = true;
                    let headerContent = {
                        'Content-Type': 'application/json; charset=utf-8',
                    }
                    this.error = null;
                    axios.post(`{{route('User.Auth.Reset')}}`, this.resetParam, {headers: headerContent}).then((response) => {
                        if (response.data) {
                            this.loading = false;
                            this.resetParam = {
                                email: '',
                                reset_code: '',
                                password: '',
                                password_confirmation: '',
                            }
                            window.location.href = `{{ route('front.login') }}`;
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
        }).mount('#reset')
    </script>

@endsection
