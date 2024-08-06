<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
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

        .main-content {
            width: 70%;
            background-color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: auto;
        }

        .add_hosten_button {
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
        }

        .add_hosten_button:hover {
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
        }

        .logout-button:hover {
            background-color: #c9302c;
        }

        .hostel-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            width: 100%;
            overflow-y: auto;
        }

        .hostel-card {
            position: relative;
            width: 100%;
            height: 200px;
            /* Reduced height */
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .hostel-overlay {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            /* Reduced padding */
        }

        .hostel-overlay h2 {
            margin: 0;
            font-size: 18px;
            /* Reduced font size */
        }

        .hostel-overlay p {
            margin: 5px 0;
            font-size: 14px;
            /* Reduced font size */
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <div class="sidebar">
            <h2>Owner Information</h2>
            @include('owner.owner-form')
        </div>
        <div class="main-content">
            <div class="hostel-grid">
               
                    <div class="hostel-card"
                        onclick="window.location.href=''"
                        style="background-image: url('');">
                        <div class="hostel-overlay">
                            <h2></h2>
                            <p></p>
                            <p><strong>Address:</strong> </p>
                            <p><strong>Address:</strong> </p>
                            <p><strong>City:</strong> </p>
                            <p><strong>Contact:</strong> </p>
                        </div>
                    </div>


             
            </div>
            <a href="{{route('addHostel')}}" class="add_hosten_button">Add
                Hostels</a>
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