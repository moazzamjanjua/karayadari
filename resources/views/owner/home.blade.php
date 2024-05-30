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
            width: 100%;
            height:auto%;
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
        }

        .action-button:hover {
            background-color: #0056b3;
        }

        .logout-button {
            margin-top: auto;
            padding: 10px;
            background-color: #d9534f;
            color: white;
            text-align: center;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            width: 100%;
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
            <form action="" method="POST" enctype="multipart/form-data" id="update-form">
                @csrf
                @method('PUT')
                <div class="avatar-container">
                    <img src="{{ $owner->avatar ?? '/frontend/img/home/avatar.jpg' }}" alt="Avatar" class="avatar" id="owner-avatar">
                    <button type="button" class="edit-icon" onclick="document.getElementById('avatar-input').click();">✎</button>
                    <input type="file" name="avatar" id="avatar-input" class="file-input" accept="image/*" onchange="updateAvatar(event)">
                </div>
                <ul class="profile-info">
                    <li>
                        <span>Name:</span>
                        <span id="owner-name"><input type="text" name="name" value="{{ $owner->name ?? 'N/A' }}"></span>
                    </li>
                    <li>
                        <span>Phone Number:</span>
                        <span id="owner-phone"><input type="text" name="phone" value="{{ $owner->phone ?? 'N/A' }}"></span>
                    </li>
                    <li>
                        <span>Email:</span>
                        <span id="owner-email"><input type="email" name="email" value="{{ $owner->email ?? 'N/A' }}"></span>
                    </li>
                    <li>
                        <span>Country:</span>
                        <span id="owner-country"><input type="text" name="country" value="{{ $owner->country ?? 'N/A' }}"></span>
                    </li>
                    <li>
                        <span>City:</span>
                        <span id="owner-city"><input type="text" name="city" value="{{ $owner->city ?? 'N/A' }}"></span>
                    </li>
                    <li>
                        <span>Permanent Address:</span>
                        <span id="owner-address"><input type="text" name="address" value="{{ $owner->address ?? 'N/A' }}"></span>
                    </li>
                </ul>
                <button type="submit" class="action-button">Update</button>
            </form>
            <a href="" class="logout-button">Logout</a>
        </div>
        <div class="main-content">
            <h1>Welcome to Your Dashboard</h1>
            <a href="" class="action-button">Add Hostel Room</a>
        </div>
    </div>

    <script>
        function updateAvatar(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('owner-avatar').src = e.target.result;
            };

            reader.readAsDataURL(file);
        }
    </script>
</body>
</html>
