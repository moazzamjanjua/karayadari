<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
    </style>
</head>
<body>
<div class="container">
                        <h1 class="text-center title-page">Owner Log In</h1>
                        <div class="login-form">
                            <form id="owner-form" action="{{ route('ownerMatch') }}" method="post">
                                @csrf
                                <div>
                                    <input type="hidden" name="back" value="my-account">
                                    <div class="form-group no-gutters">
                                        <input class="form-control" name="owner_email" type="email"
                                            placeholder="Enter Your Email">
                                    </div>

                                    @if(session('error') && session('error') == 'Your email is not correct')
                                        <div class="alert alert-danger" style="color: red;">{{ session('error') }}</div>
                                    @endif

                                    <div class="form-group no-gutters">
                                        <div class="input-group js-parent-focus">
                                            <input class="form-control js-child-focus js-visible-password"
                                                name="password" type="password" value=""
                                                placeholder="Enter Your Password">
                                        </div>
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
                                        <p>Don't have an Account?<a href="{{ route('become-owner') }}" rel="nofollow">
                                            Create Account?
                                        </a></p>
                                    </div>
                                </div>
                            </form>

                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                        </div>
                    </div>
</body>
</html>
