@include('frontend.layouts.style')

<body class="user-login blog">

    @include('frontend.layouts.header')

    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">

            <!-- breadcrumb -->
            <nav class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">
                        <ol>
                            <li>
                                <a href="#">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Login</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <div class="container">
                        <h1 class="text-center title-page">Log In</h1>
                        <div class="login-form">
                            <form id="customer-form" action="{{ route('loginMatch') }}" method="post">
                                @csrf
                                <div>
                                    <input type="hidden" name="back" value="my-account">
                                    <div class="form-group no-gutters">
                                        <input class="form-control" name="phone" type="phone"
                                            placeholder="Enter Your Number">
                                    </div>
                                    @if(session('error') && session('error') == 'Your number is not correct')
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif
                                    <div class="form-group no-gutters">
                                        <div class="input-group js-parent-focus">
                                            <input id="password-field"
                                                class="form-control js-child-focus js-visible-password" name="password"
                                                type="password" value="" placeholder="Enter Your Password">
                                            <span toggle="#password-field"
                                                class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        </div>
                                        <span class="error-message text-danger" id="password-error"></span>
                                    </div>
                                    @if(session('error') && session('error') == 'Your password does not match')
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif
                                    <div class="no-gutters text-center">
                                        <div class="forgot-password">
                                            <a href="user-reset-password.html" rel="nofollow">
                                                Forgot your password?
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-center no-gutters">
                                        <input type="hidden" name="submitLogin" value="1">
                                        <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                            Sign in
                                        </button>
                                        <a href="{{ route('register') }}" rel="nofollow">
                                            Create Account?
                                        </a>
                                    </div>
                                </div>
                            </form>

                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.layouts.footer')

    <!-- Script for Password Visibility Toggle -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Toggle password visibility
            $(".toggle-password").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        });
    </script>

    <style>
        .field-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            /* Change cursor to pointer for better UX */
        }

        .error-message {
            font-size: 0.875rem;
            color: red;
            margin-top: 5px;
        }
    </style>
</body>