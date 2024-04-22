<div class="aside aside_right overflow-hidden customer-forms" id="customerForms">
    <div class="customer-forms__wrapper d-flex position-relative">
        <div class="customer__login">
            <div class="aside-header d-flex align-items-center">
                <h3 class="text-uppercase fs-6 mb-0">Login</h3>
                <button class="btn-close-lg js-close-aside ms-auto"></button>
            </div><!-- /.aside-header -->

            <form id="userLoginForm" class="aside-content">
                @csrf
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control form-control_gray"
                        id="customerNameEmailInput" placeholder="name@example.com" autocomplete="off">
                    <label for="customerNameEmailInput">Email address *</label>
                </div>

                <div class="pb-3"></div>

                <div class="form-label-fixed mb-3">
                    <label for="customerPasswordInput" class="form-label">Password *</label>
                    <input name="password" id="customerPasswordInput" class="form-control form-control_gray"
                        type="password" placeholder="********" autocomplete="off">
                </div>

                <div class="d-flex align-items-center mb-3 pb-2">
                    <a href="reset_password.html" class="btn-text ms-auto">Lost password?</a>
                </div>

                <button class="btn btn-primary w-100 text-uppercase user-login-submit-btn" type="submit">Log In</button>

                <div class="customer-option mt-4 text-center">
                    <span class="text-secondary">No account yet?</span>
                    <a href="javascript:void(0)" class="btn-text js-show-register">Create Account</a>
                </div>
            </form>
        </div><!-- /.customer__login -->

        <div class="customer__register">
            <div class="aside-header d-flex align-items-center">
                <h3 class="text-uppercase fs-6 mb-0">Create an account</h3>
                <button class="btn-close-lg js-close-aside btn-close-aside ms-auto"></button>
            </div><!-- /.aside-header -->

            <form id="registerUserForm" class="aside-content">

                @csrf

                <div class="form-floating mb-4">
                    <input name="name" type="text" class="form-control form-control_gray" id="registerUserNameInput" placeholder="Jhon Doe">
                    <label for="registerUserNameInput">Full Name *</label>
                </div>

                <div class="pb-1"></div>

                <div class="form-floating mb-4">
                    <input name="email" type="email" class="form-control form-control_gray" id="registerUserEmailInput" placeholder="user@company.com">
                    <label for="registerUserEmailInput">Email address *</label>
                </div>

                <div class="pb-1"></div>

                <div class="form-floating mb-4">
                    <input name="phone" type="text" class="form-control form-control_gray" id="registerPhoneInput" placeholder="+1 XXX XXX-XXXX">
                    <label for="registerPhoneInput">Phone Number *</label>
                </div>

                <div class="pb-1"></div>

                <div class="form-floating mb-4">
                    <input name="password" type="password" class="form-control form-control_gray" id="registerPasswordInput" placeholder="****************">
                    <label for="registerPasswordInput">Password *</label>
                </div>

                <p class="text-secondary mb-4">Your personal data will be used to support your experience throughout
                    this website, to manage access to your account, and for other purposes described in our privacy
                    policy.</p>

                <button class="btn btn-primary w-100 text-uppercase user-submit-btn" type="submit">Register</button>

                <div class="customer-option mt-4 text-center">
                    <span class="text-secondary">Already have account?</span>
                    <a href="#" class="btn-text js-show-login">Login</a>
                </div>
            </form>
        </div>
        
        <!-- /.customer__register -->
    </div><!-- /.customer-forms__wrapper -->
</div>


