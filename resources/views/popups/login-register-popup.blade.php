<!-- Modal for Login Form -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-transition">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <form id="login-form" action="{{ route('poploginMatch') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" name="phone" type="number" placeholder="Enter Your Number">
                            <span class="error-message text-danger" id="phone-error"></span>
                        </div>
                        <div class="form-group">
                            <input id="login-password-field" class="form-control" name="password" type="password" placeholder="Enter Your Password">
                            <span toggle="#login-password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <span class="error-message text-danger" id="password-error"></span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Sign In</button>
                            <a href="#" id="showRegisterModal" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">Create Account?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Registration Form -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-transition">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="register-form">
                    <form id="register-form" action="{{ route('popregisterSave') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" placeholder="Name">
                            <span class="error-message text-danger" id="name-error"></span>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="phone" type="number" placeholder="Number">
                            <span class="error-message text-danger" id="reg-phone-error"></span>
                        </div>
                        <div class="form-group">
                            <input id="register-password-field" class="form-control" name="password" type="password" placeholder="Password">
                            <span toggle="#register-password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <span class="error-message text-danger" id="reg-password-error"></span>
                        </div>
                        <div class="form-group">
                            <input id="register-password-confirmation-field" class="form-control" name="password_confirmation" type="password" placeholder="Confirm Password">
                            <span toggle="#register-password-confirmation-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <span class="error-message text-danger" id="password-confirmation-error"></span>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="country" type="text" placeholder="Country">
                            <span class="error-message text-danger" id="country-error"></span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Create Account</button>
                            <a href="#" id="showLoginModal" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Do you have an Account?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script to handle AJAX for Login and Register -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Handle login form submission via AJAX
        $('#login-form').on('submit', function(event) {
            event.preventDefault();
            
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    if (response.success) {
                        // Close login modal on successful login and reload the page
                        $('#loginModal').modal('hide');
                        location.reload();
                    }
                },
                error: function(xhr) {
                    $('.error-message').text(''); // Clear previous errors
                    
                    let errors = xhr.responseJSON.errors;
                    
                    if (errors.phone) {
                        $('#phone-error').text(errors.phone[0]);
                    }
                    if (errors.password) {
                        $('#password-error').text(errors.password[0]);
                    }
                }
            });
        });

        // Handle register form submission via AJAX
        $('#register-form').on('submit', function(event) {
            event.preventDefault();
            
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    if (response.success) {
                        // Show login modal after successful registration
                        $('#registerModal').modal('hide');
                        $('#loginModal').modal('show');
                    }
                },
                error: function(xhr) {
                    $('.error-message').text(''); // Clear previous errors

                    let errors = xhr.responseJSON.errors;
                    
                    if (errors.name) {
                        $('#name-error').text(errors.name[0]);
                    }
                    if (errors.phone) {
                        $('#reg-phone-error').text(errors.phone[0]);
                    }
                    if (errors.password) {
                        $('#reg-password-error').text(errors.password[0]);
                    }
                    if (errors.password_confirmation) {
                        $('#password-confirmation-error').text(errors.password_confirmation[0]);
                    }
                    if (errors.country) {
                        $('#country-error').text(errors.country[0]);
                    }
                }
            });
        });

        // Toggle password visibility
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    });
</script>

<style>
    .error-message {
        font-size: 0.875rem;
        color: red;
        margin-top: 5px;
    }
    
    .field-icon {
        float: right;
        margin-left: -25px;
        margin-top: -25px;
        position: relative;
        z-index: 2;
        cursor: pointer; /* Change cursor to pointer for better UX */
    }
</style>
