<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Dashboard</title>
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

        .dashboard {
            width: 97%;
            height: 97%;
            display: flex;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        .sidebar {
            width: 30%;
            background-color: #4CAF50;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            overflow-y: auto;
        }

        .sidebar h2 {
            margin-bottom: 20px;
        }

        .avatar-container {
            position: relative;
            margin-bottom: 20px;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
        }

        .edit-icon {
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-info {
            list-style: none;
            padding: 0;
            width: 100%;
        }

        .profile-info li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            border-bottom: 1px solid white;
            padding-bottom: 10px;
        }

        .profile-info li span:first-child {
            font-weight: bold;
        }

        .profile-info li input {
            width: 60%;
            padding: 5px;
            border: none;
            border-radius: 3px;
        }

        .profile-info li input[readonly] {
            background-color: #e9e9e9;
            cursor: not-allowed;
        }

        .main-content {
            width: 70%;
            background-color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .main-content h1 {
            margin-bottom: 40px;
            color: #333;
        }

        .action-button {
            padding: 15px 30px;
            background-color: #007BFF;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 18px;
            margin-bottom: 10px;
            /* Added margin-bottom to separate the buttons */
        }

        .action-button:hover {
            background-color: #0056b3;
        }

        .logout-button {
            padding: 10px;
            background-color: #d9534f;
            color: white;
            text-align: center;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            width: 100%;
            margin-top: auto;
            /* Ensure it stays at the bottom */
        }

        .logout-button:hover {
            background-color: #c9302c;
        }

        .file-input {
            display: none;
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <div class="sidebar">
            <h2>Owner Information</h2>
           

            @include('owner.owner-form')

            <a href="../owner/login" class="logout-button">Logout</a>
        </div>
        <div class="main-content">
            <h1>Welcome to Your Dashboard</h1>
           
        </div>
    </div>
     
    <script>
        function updateAvatar(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                document.getElementById('owner_image').src = e.target.result;
            };

            reader.readAsDataURL(file);
        }
    </script>
</body>

</html>