@include('frontend.layouts.style')

<body class="user-register blog">

    @include('frontend.layouts.header')
<style>
    .password-icon {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    display: none;
}

.password-icon.valid {
    color: green;
    display: inline-block;
}

.password-icon.invalid {
    color: red;
    display: inline-block;
}

</style>
    <!-- main -->
    <div id="wrapper-site">
        <div class="container">
            <div class="row">
                <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                    <div id="main">
                        <div id="content" class="page-content">
                            <div class="register-form text-center">
                                <h1 class="text-center title-page">Create Account</h1>
                                <form action="{{ route('registerSave') }}" method="post">
                                    @csrf

                                    <!-- Name Field -->
                                    <div class="form-group">
                                        <input class="form-control" name="name" type="text" placeholder="Name"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Email Field -->
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="email" placeholder="Email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Password Field -->
                                    <div class="form-group position-relative">
                                        <input class="form-control" id="password" name="password" type="password"
                                            placeholder="Password">
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Confirm Password Field -->
                                    <div class="form-group position-relative">
                                        <input class="form-control" id="confirm-password" name="password_confirmation"
                                            type="password" placeholder="Confirm Password">
                                        <span id="password-match-icon" class="password-icon"></span>
                                    </div>

                                    <!-- Country Field -->
                                    <div class="form-group">
                                        <input class="form-control" name="country" type="text" placeholder="Country"
                                            value="{{ old('country') }}">
                                        @error('country')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Submit Button -->
                                    <div>
                                        <button class="btn btn-primary" type="submit">Create Account</button>
                                        <a href="{{ route('login') }}">Do you have an Account?</a>
                                    </div>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm-password');
    const matchIcon = document.getElementById('password-match-icon');

    confirmPassword.addEventListener('input', function () {
        if (confirmPassword.value.length > 0) {
            if (password.value === confirmPassword.value) {
                matchIcon.textContent = '✔️'; // Passwords match
                matchIcon.classList.remove('invalid');
                matchIcon.classList.add('valid');
            } else {
                matchIcon.textContent = '❌'; // Passwords do not match
                matchIcon.classList.remove('valid');
                matchIcon.classList.add('invalid');
            }
        } else {
            matchIcon.textContent = ''; // No icon if confirm password field is empty
            matchIcon.classList.remove('valid', 'invalid');
        }
    });
});

</script>
        <!-- footer -->
        @include('frontend.layouts.footer')
        