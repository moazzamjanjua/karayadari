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
        @foreach ($rooms as $room)
            <div class="hostel-card"
                onclick="window.location.href='{{ route('owner.hostelDetails', ['room_id' => $room->hostel_id]) }}'"
                style="background-image: url('{{ asset('storage/' . $room->room_images ?? 'N/A') }}');">
                <div class="hostel-overlay">
                    <p>{{ $room->room_detail ?? 'N/A' }}</p>
                    <p><strong>Room Size:</strong> {{ $room->room_size ?? 'N/A' }}</p>
                    <p><strong>Floor Number:</strong> {{ $room->floor_number ?? 'N/A' }}</p>
                    <p><strong>Contact:</strong> {{ $room->required_occupancy ?? 'N/A' }}</p>
                </div>
            </div>


        @endforeach
    </div>

   

    <a href="{{ route('owner.roomForm', [ 'hostel_id' => $hostel_id]) }}" class="add_room_button">Add Rooms</a>


</body>

</html>