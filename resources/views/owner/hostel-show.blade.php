<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $hostel->hostel_name }} - Details</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            padding: 20px;
            width: 80%;
            max-width: 1200px;
            margin: 20px auto;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 36px;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .add-room-button {
            position: absolute;
            top: 20px;
            right: 2px;
            left: 400px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            z-index: 2;
        }

        .add-room-button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .add-room-button:active {
            transform: scale(0.95);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .room-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .room-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            flex-basis: 48%;
            max-width: 48%;
        }

        .room-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .room-card-body {
            padding: 10px;
        }

        .room-card-title {
            font-size: 20px;
            margin-bottom: 5px;
            color: #333;
        }

        .room-card-text {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="overlay"></div>
    <a href="{{ route('addRoom', $hostel->id) }}" class="add-room-button">Add Room</a>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
