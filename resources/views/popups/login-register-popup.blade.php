

<!-- Modal for Login Form -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-transition">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Log In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <form id="login-form" action="{{ route('poploginMatch') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" name="email" type="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="password" type="password" placeholder="Enter Your Password">
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
                <h5 class="modal-title" id="registerModalLabel">Create Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="register-form">
                    <form action="{{ route('popregisterSave') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" type="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="password" type="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="password_confirmation" type="password" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="country" type="text" placeholder="Country">
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



<script>

    
    document.addEventListener('DOMContentLoaded', function () {
        // Show login modal if login_required session exists@
        @if(session('login_required'))
        $('#loginModal').modal('show');
        @endif

        // Handle showing the login modal again after successful registration
        $('#registerModal').on('hidden.bs.modal', function () {
            $('#loginModal').modal('show');
        });
    });
</script>


