@extends('front.layouts.app')
@section('title', 'Forget password')

@section('content')

    {{-- Forget content --}}
    <section class="w-100 py-5" id="forget">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="px-2 col-11 col-sm-10">
                    <div class="row align-items-center px-2">

                        {{-- Forget form --}}
                        <form @submit.prevent="forgetForm()" class="col-lg-5 p-4 border fw-medium">

                            {{-- Forget title --}}
                            <div class="fs-4">
                                Forget Password
                            </div>

                            {{-- Forget description --}}
                            <div class="text-secondary mb-3">
                                Enter your email and we'll send you instructions to reset your password
                            </div>

                            {{-- Form-group - email --}}
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email"
                                       class="form-control py-2 px-3 rounded-0 shadow-none border" autocomplete="off"
                                       v-model="forgetParam.email">
                                <div class="error-report" v-if="error != null && error.email !== undefined"
                                     v-text="error.email[0]"></div>
                            </div>

                            {{-- Action button --}}
                            <div class="mb-3">
                                <button type="submit" class="btn btn-theme py-2 px-3 rounded-0" v-if="!loading">
                                    Forget
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
                    forgetParam: {
                        email: '',
                    }
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

                /* --- --- --- function of forget api --- --- --- */
                forgetForm() {
                    this.ClearErrorHandler();
                    this.loading = true;
                    let headerContent = {
                        'Content-Type': 'application/json; charset=utf-8',
                    }
                    this.error = null;
                    axios.post(`{{route('User.Auth.Forget')}}`, this.forgetParam, {headers: headerContent}).then((response) => {
                        if (response.data) {
                            this.loading = false;
                            window.location.href = `{{ route('front.reset_password') }}?email=${(this.forgetParam.email)}`;
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
        }).mount('#forget')
    </script>

@endsection
