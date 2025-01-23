<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Signup Form</title>
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

        .alert {
            color: red;
            font-size: 12px;
            margin-bottom: 10px;
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
        <h2>Signup</h2>
        <form action="{{ route('ownerSave') }}" method="post">
            @csrf

            <!-- Name Field -->
            <input class="form-control" name="owner_name" type="text" placeholder="Name" value="{{ old('owner_name') }}">
            @error('owner_name')
                <div class="alert">{{ $message }}</div>
            @enderror

            <!-- Email Field -->
            <input class="form-control" name="owner_email" type="email" placeholder="Email" value="{{ old('owner_email') }}">
            @error('owner_email')
                <div class="alert">{{ $message }}</div>
            @enderror

            <!-- Number Field -->
            <input class="form-control" name="owner_number" type="text" placeholder="Number" value="{{ old('owner_number') }}">
            @error('owner_number')
                <div class="alert">{{ $message }}</div>
            @enderror

            <!-- Password Field -->
            <input id="password-field" class="form-control" name="password" type="password" placeholder="Password">
            @error('password')
                <div class="alert">{{ $message }}</div>
            @enderror

            <!-- Confirm Password Field -->
            <input id="confirm-password-field" class="form-control" name="password_confirmation" type="password" placeholder="Confirm Password">
            @error('password_confirmation')
                <div class="alert">{{ $message }}</div>
            @enderror

            <!-- Show Password Checkbox -->
            <div class="checkbox-container">
                <input type="checkbox" id="show-password" onclick="togglePasswordVisibility()">
                <label for="show-password">Show Password</label>
            </div>

            <!-- Submit Button -->
            <button type="submit">Signup</button>
        </form>

        <p>Already have an account? <a href="{{ route('owner-login') }}">Login</a></p>
    </div>

    <!-- JavaScript for Password Toggle -->
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password-field");
            var confirmPasswordField = document.getElementById("confirm-password-field");
            var showPasswordCheckbox = document.getElementById("show-password");
            if (showPasswordCheckbox.checked) {
                passwordField.type = "text";
                confirmPasswordField.type = "text";
            } else {
                passwordField.type = "password";
                confirmPasswordField.type = "password";
            }
        }
    </script>
</body>
</html>
