<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMjczj54xk5pW3JKLJSC8D0iX9w1X5vFKnq5Yx" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 300px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px; /* Increased padding for better spacing */
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            position: relative; /* Important for positioning the icon */
        }

        .input-group {
            position: relative;
        }

        .field-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%); /* Center the icon vertically */
            cursor: pointer;
            color: #aaa; /* Light color for the icon */
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            text-align: center;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .checkbox-container input {
            width: auto; /* Adjust width for the checkbox */
            margin-right: 5px; /* Space between checkbox and label */
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center title-page"> Login</h1>
    <div class="login-form">
        <form id="owner-form" action="{{ route('ownerMatch') }}" method="post">
            @csrf
            <div>
                <input type="hidden" name="back" value="my-account">
                <div class="form-group no-gutters">
                    <input class="form-control" name="owner_number" type="text" placeholder="Enter Your Number">
                </div>

                @if(session('error') && session('error') == 'Your number is not correct')
                    <div class="alert alert-danger" style="color: red;">{{ session('error') }}</div>
                @endif

                <div class="form-group no-gutters input-group">
                    <input id="password-field" class="form-control js-child-focus js-visible-password" name="password" type="password" placeholder="Enter Your Password">
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>

                <div class="checkbox-container">
                    <input type="checkbox" id="show-password" onclick="togglePasswordVisibility()">
                    <label for="show-password">Show Password</label>
                </div>

                @if(session('error') && session('error') == 'Your password does not match')
                    <div class="alert alert-danger" style="color: red;">{{ session('error') }}</div>
                @endif
            </div>
            <div class="clearfix">
                <div class="text-center no-gutters">
                    <input type="hidden" name="submitLogin" value="1">
                    <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                        Sign in
                    </button>
                    <p>Don't have an Account? <a href="{{ route('become-owner') }}" rel="nofollow">Create Account?</a></p>
                </div>
            </div>
        </form>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </div>
</div>

<!-- jQuery for Password Toggle -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  

    function togglePasswordVisibility() {
        var passwordField = $("#password-field");
        var showPasswordCheckbox = $("#show-password");
        if (showPasswordCheckbox.is(':checked')) {
            passwordField.attr("type", "text");
        } else {
            passwordField.attr("type", "password");
        }
    }
</script>
</body>
</html>
