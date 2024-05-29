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
            width: 96%;
            height: 96%;
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

        .profile-info {
            list-style: none;
            padding: 0;
            width: 100%;
        }

        .profile-info li {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            border-bottom: 1px solid white;
            padding-bottom: 10px;
        }

        .profile-info li span:first-child {
            font-weight: bold;
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
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <h2>Owner Information</h2>
            <ul class="profile-info">
                <li><span>Name:</span> <span id="owner-name">John Doe</span></li>
                <li><span>Phone:</span> <span id="owner-phone">123-456-7890</span></li>
                <li><span>Country:</span> <span id="owner-country">USA</span></li>
            </ul>
            <a href="logout.html" class="logout-button">Logout</a>
        </div>
        <div class="main-content">
            <h1>Welcome to Your Dashboard</h1>
            <a href="add_hostel_room.html" class="action-button">Add Hostel Room</a>
        </div>
    </div>

    <script>
        // Assuming data is fetched from the backend
        document.addEventListener("DOMContentLoaded", function() {
            // Replace the values with actual data fetched from your backend
            const ownerData = {
                name: "John Doe",
                phone: "123-456-7890",
                country: "USA"
            };

            document.getElementById("owner-name").textContent = ownerData.name;
            document.getElementById("owner-phone").textContent = ownerData.phone;
            document.getElementById("owner-country").textContent = ownerData.country;
        });
    </script>
</body>
</html>
