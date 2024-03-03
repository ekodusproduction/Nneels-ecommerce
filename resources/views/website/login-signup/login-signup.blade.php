@extends('website.welcome')
@section('title', 'Account Signin/Signup')

@section('custom-styles')
@endsection

@section('content')

    <div class="mt-5 pb-4"></div>
    
    <section class="login-register container mt-5">
        <h2 class="d-none">Login & Register</h2>
        <ul class="nav nav-tabs mb-5" id="login_register" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link nav-link_underscore active" id="login-tab" data-bs-toggle="tab" href="#tab-item-login"
                    role="tab" aria-controls="tab-item-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link nav-link_underscore" id="register-tab" data-bs-toggle="tab" href="#tab-item-register"
                    role="tab" aria-controls="tab-item-register" aria-selected="false">Register</a>
            </li>
        </ul>
        <div class="tab-content pt-2" id="login_register_tab_content">
            <div class="tab-pane fade show active" id="tab-item-login" role="tabpanel" aria-labelledby="login-tab">
                <div class="login-form">
                    <form name="login-form" class="needs-validation" novalidate>
                        <div class="form-floating mb-3">
                            <input name="login_email" type="email" class="form-control form-control_gray"
                                id="customerNameEmailInput1" placeholder="Email address *" required>
                            <label for="customerNameEmailInput1">Email address *</label>
                        </div>

                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input name="login_password" type="password" class="form-control form-control_gray"
                                id="customerPasswodInput" placeholder="Password *" required>
                            <label for="customerPasswodInput">Password *</label>
                        </div>

                        <div class="d-flex align-items-center mb-3 pb-2">
                            <div class="form-check mb-0">
                                <input name="remember" class="form-check-input form-check-input_fill" type="checkbox"
                                    value="" id="flexCheckDefault1">
                                <label class="form-check-label text-secondary" for="flexCheckDefault1">Remember me</label>
                            </div>
                            <a href="reset_password.html" class="btn-text ms-auto">Lost password?</a>
                        </div>

                        <button class="btn btn-primary w-100 text-uppercase" type="submit">Log In</button>

                        {{-- <div class="customer-option mt-4 text-center">
                            <span class="text-secondary">No account yet?</span>
                            <a href="#register-tab" class="btn-text js-show-register">Create Account</a>
                        </div> --}}
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-item-register" role="tabpanel" aria-labelledby="register-tab">
                <div class="register-form">
                    <form name="register-form" class="needs-validation" novalidate>
                        <div class="form-floating mb-3">
                            <input name="register_username" type="text" class="form-control form-control_gray"
                                id="customerNameRegisterInput" placeholder="Username" required>
                            <label for="customerNameRegisterInput">Username</label>
                        </div>

                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input name="register_email" type="email" class="form-control form-control_gray"
                                id="customerEmailRegisterInput" placeholder="Email address *" required>
                            <label for="customerEmailRegisterInput">Email address *</label>
                        </div>

                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input name="register_password" type="password" class="form-control form-control_gray"
                                id="customerPasswodRegisterInput" placeholder="Password *" required>
                            <label for="customerPasswodRegisterInput">Password *</label>
                        </div>

                        <div class="d-flex align-items-center mb-3 pb-2">
                            <p class="m-0">Your personal data will be used to support your experience throughout this
                                website, to manage access to your account, and for other purposes described in our privacy
                                policy.</p>
                        </div>

                        <button class="btn btn-primary w-100 text-uppercase" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="mb-5 pb-xl-5"></div>
@endsection

@section('custom-scripts')
@endsection
