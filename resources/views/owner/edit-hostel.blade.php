<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hostel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
            padding-top: 20px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .preview img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4"><b>Edit Hostel Details</b></h1>
        <form action="{{ route('owner.hostel.update', $hostel->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            
            <!-- Hostel Name -->
            <div class="form-group">
                <label for="hostel_name">Hostel Name:</label>
                <input type="text" class="form-control" id="hostel_name" name="hostel_name" value="{{ $hostel->hostel_name }}" required>
            </div>

            <!-- Hostel Address -->
            <div class="form-group">
                <label for="hostel_address">Hostel Address:</label>
                <textarea class="form-control" id="hostel_address" name="hostel_address" rows="4" required>{{ $hostel->hostel_address }}</textarea>
            </div>

            <!-- City Selection -->
            <div class="form-group">
                <label>City:</label><br>
                @foreach($cities as $city)
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="{{ $city->city_name }}_option" name="city" value="{{ $city->city_name }}" @if($hostel->city == $city->city_name) checked @endif>
                        <label class="form-check-label" for="{{ $city->city_name }}_option">{{ $city->city_name }}</label>
                    </div>
                @endforeach
            </div>

            <!-- Hostel Location -->
            <div class="form-group">
                <label for="hostel_location">Hostel Location:</label>
                <input type="text" class="form-control" id="hostel_location" name="hostel_location" value="{{ $hostel->hostel_location }}" placeholder="Enter hostel location (optional)">
            </div>

            <!-- Hostel Front Image -->
            <div class="form-group">
                <label for="hostel_front_image">Hostel Front Image:</label>
                <input type="file" class="form-control-file" id="hostel_front_image" name="hostel_front_image" accept="image/*" onchange="updateFrontImagePreview()">
                <div id="front_image_preview" class="preview mt-2">
                    @if($hostel->hostel_front_image)
                        <div class="image-container">
                            <img src="{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}" alt="Hostel Front Image">
                        </div>
                    @endif
                </div>
            </div>

            <!-- Hostel Details -->
            <div class="form-group">
                <label for="hostel_detail">Hostel Detail:</label>
                <textarea class="form-control" id="hostel_detail" name="hostel_detail" rows="4" required>{{ $hostel->hostel_detail }}</textarea>
            </div>

            <!-- Capacity -->
            <div class="form-group">
                <label for="capacity">Capacity:</label>
                <input type="number" class="form-control" id="capacity" name="capacity" value="{{ $hostel->capacity }}" placeholder="Enter capacity (optional)">
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $hostel->email }}" placeholder="Enter email (optional)">
            </div>

            <!-- Number of Rooms -->
            <div class="form-group">
                <label for="num_rooms">Number of Rooms:</label>
                <input type="number" class="form-control" id="num_rooms" name="num_rooms" value="{{ $hostel->num_rooms }}" placeholder="Enter number of rooms (optional)">
            </div>

            <!-- Facilities (Wi-Fi, Security, Water Supply) -->
            <div class="form-group">
                <label>Wi-Fi:</label>
                <div>
                    <input type="radio" id="wifi_yes" name="wifi" value="1" {{ $hostel->wifi ? 'checked' : '' }}>
                    <label for="wifi_yes">Yes</label>
                </div>
                <div>
                    <input type="radio" id="wifi_no" name="wifi" value="0" {{ !$hostel->wifi ? 'checked' : '' }}>
                    <label for="wifi_no">No</label>
                </div>
            </div>

            <div class="form-group">
                <label>Security:</label>
                <div>
                    <input type="radio" id="security_yes" name="security" value="1" {{ $hostel->security ? 'checked' : '' }}>
                    <label for="security_yes">Yes</label>
                </div>
                <div>
                    <input type="radio" id="security_no" name="security" value="0" {{ !$hostel->security ? 'checked' : '' }}>
                    <label for="security_no">No</label>
                </div>
            </div>

            <div class="form-group">
                <label>Water Supply:</label>
                <div>
                    <input type="radio" id="water_supply_yes" name="water_supply" value="1" {{ $hostel->water_supply ? 'checked' : '' }}>
                    <label for="water_supply_yes">Yes</label>
                </div>
                <div>
                    <input type="radio" id="water_supply_no" name="water_supply" value="0" {{ !$hostel->water_supply ? 'checked' : '' }}>
                    <label for="water_supply_no">No</label>
                </div>
            </div>

            <!-- Update Button -->
            <button type="submit" class="btn btn-success btn-block">Update</button>
        </form>
    </div>

    <script>
        function updateFrontImagePreview() {
            const frontImageInput = document.getElementById('hostel_front_image');
            const frontImagePreviewContainer = document.getElementById('front_image_preview');
            frontImagePreviewContainer.innerHTML = '';

            if (frontImageInput.files.length > 0) {
                const file = frontImageInput.files[0];
                const reader = new FileReader();
                reader.onload = (e) => {
                    const imgContainer = document.createElement('div');
                    imgContainer.classList.add('image-container');

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    imgContainer.appendChild(img);

                    frontImagePreviewContainer.appendChild(imgContainer);
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>

</html>
