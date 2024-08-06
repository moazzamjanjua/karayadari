<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Details</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            z-index: -1;
            opacity: 0.5;
        }

        .add-room-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 18px;
        }

        .add-room-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="hostel-grid">
      
            <div class="hostel-card"
                onclick="window.location.href=''"
                style="background-image: url('');">
                <div class="hostel-overlay">
                    <p></p>
                    <p><strong>Room Size:</strong> </p>
                    <p><strong>Floor Number:</strong> </p>
                    <p><strong>Contact:</strong> </p>
                </div>
            </div>


       
    </div>

   

    <a href="{{route('room-form')}}" class="add_room_button">Add Rooms</a>


</body>

</html>