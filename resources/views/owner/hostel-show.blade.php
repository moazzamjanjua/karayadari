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
            right: 20px;
            padding: 10px 40px;
            background: linear-gradient(45deg, #ff6b6b, #f06595);
            border: none;
            border-radius: 6px;
            color: white;
            height: 45px;
            white-space: nowrap;
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 40px;
            background: linear-gradient(45deg, #ff6b6b, #f06595);
            border: none;
            border-radius: 6px;
            color: white;
            height: 45px;
            white-space: nowrap;
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
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
    background-color: transparent;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
    flex-basis: 48%;
    max-width: 48%;
    position: relative;
    height: 300px; /* Set a fixed height for the card */
}

.room-card img {
    width: 100%;
    height: 100%; /* Force the image to fill the height of the card */
    object-fit: contain; /* Ensure the entire image is shown within the card without distortion */
}

.room-card-body {
    padding: 10px;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background for the text */
    color: white;
    position: absolute;
    bottom: 0;
    width: 100%;
}

        .room-card-title {
            font-size: 20px;
            margin-bottom: 5px;
            color: white;
        }

        .room-card-text {
            font-size: 14px;
            color: white;
        }

        .carousel-item img {
            height: auto;
            object-fit: cover;
            background-color: pink;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }
        .carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: blue; /* Set the background color to blue */
    border-radius: 50%; /* Make the background a circle */
    padding: 10px; /* Add some padding to make the circle larger */
}

.carousel-control-prev,
.carousel-control-next {
    opacity: 1; /* Ensure the buttons are fully visible */
}


.room-card {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }

    .ribbon {
        position: absolute;
        top: 10px;
        left: -10px;
        z-index: 1000;
        overflow: hidden;
        width: 150px;
        height: 150px;
        text-align: center;
    }

    .ribbon span {
        font-size: 14px;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        line-height: 20px;
        transform: rotate(-45deg);
        width: 200%;
        display: block;
        background: #79A70A;
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 20px;
        left: -35px;
    }



    </style>
</head>

<body>
    <div class="overlay"></div>
    <div class="content">
        <h1>{{ $hostel->hostel_name }}</h1>
        @include('frontend.layouts.back')
        <a href="{{ route('addRoom', $hostel->id) }}" class="add-room-button">Add Room</a>

        <div class="room-cards mt-5">
    @if($hostel && $hostel->rooms)
        @foreach($hostel->rooms as $room)
            <div class="room-card">
                @php
                    $images = json_decode($room->room_images, true);
                @endphp
                @if($images && is_array($images))
                    @if(count($images) > 1)
                        <div id="carousel-{{ $room->id }}" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($images as $key => $image)
                                    <div class="carousel-item @if($key === 0) active @endif">
                                        <img src="{{ asset('storage/room_images/' . $image) }}" class="d-block w-100" alt="Room Image">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carousel-{{ $room->id }}" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-{{ $room->id }}" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    @endif
                @else
                    <p>No images available</p>
                @endif

                <!-- Ribbon with Pricing -->
                <div class="ribbon">
                    <span>Price: ${{ $room->price }}</span>
                </div>

                <div class="room-card-body">
                    <h2 class="room-card-title">{{ $room->room_type }}</h2>
                    <p class="room-card-text">Size: {{ $room->room_size }}</p>
                    <p class="room-card-text">{{ $room->room_detail }}</p>
                </div>
            </div>
        @endforeach
    @else
        <p>No rooms available for this hostel.</p>
    @endif
</div>

    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>

</html>
