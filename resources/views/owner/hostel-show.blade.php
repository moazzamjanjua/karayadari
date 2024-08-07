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
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}') no-repeat center center;
            background-size: cover;
            position: relative;
            opacity: 0.7;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            padding: 20px;
            width: 80%;
            max-width: 600px;
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
            background-color: #0056b3;
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
