<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Hostel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
            padding-top: 5px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .avatar-upload {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            position: relative;
        }

        .avatar-upload img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ddd;
        }

        .avatar-upload .add-button {
            position: absolute;
            bottom: 5px;
            left: 100px;
            padding: 5px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 50%;
            cursor: pointer;
        }

        .avatar-upload .edit-button:hover {
            background-color: #0056b3;
        }

        .preview {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .preview .image-container {
            position: relative;
        }

        .preview img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .preview .remove-image {
            position: absolute;
            top: 0;
            right: 0;
            background: rgba(255, 0, 0, 0.7);
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .location-options {
            display: none;
            margin-top: 10px;
        }

        .video-container {
            position: relative;
        }

        .video-container video {
            width: 200px;
            /* Make the video match the image size */
            height: 200px;
            /* Maintain the image size */
            object-fit: cover;
            /* Ensure the video covers the container without distortion */
        }

        .remove-video {
            position: absolute;
            top: 5px;
            right: 5px;
            background: rgba(255, 0, 0, 0.7);
            border: none;
            color: white;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
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

                    const removeButton = document.createElement('button');
                    removeButton.classList.add('remove-image');
                    removeButton.innerHTML = '&times;';
                    removeButton.onclick = () => removeFrontImage();

                    imgContainer.appendChild(img);
                    imgContainer.appendChild(removeButton);
                    frontImagePreviewContainer.appendChild(imgContainer);
                };
                reader.readAsDataURL(file);
            }
        }

        function removeFrontImage() {
            const frontImageInput = document.getElementById('hostel_front_image');
            const frontImagePreviewContainer = document.getElementById('front_image_preview');
            frontImageInput.value = '';
            frontImagePreviewContainer.innerHTML = '';
        }

        function updateOwnerImagePreview() {
            const ownerImageInput = document.getElementById('owner_image');
            const ownerImagePreview = document.getElementById('owner_image_preview');
            ownerImagePreview.src = '';

            if (ownerImageInput.files.length > 0) {
                const file = ownerImageInput.files[0];
                const reader = new FileReader();
                reader.onload = (e) => {
                    ownerImagePreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }

        function toggleLocationOptions() {
            const bahawalpurOption = document.getElementById('bahawalpur_option');
            const locationOptions = document.getElementById('location_options');
            if (bahawalpurOption.checked) {
                locationOptions.style.display = 'block';
            } else {
                locationOptions.style.display = 'none';
            }
        }

        function updateVideoPreview() {
            const videoInput = document.getElementById('hostel_video');
            const videoPreviewContainer = document.getElementById('hostel_video_preview');
            videoPreviewContainer.innerHTML = '';

            if (videoInput.files.length > 0) {
                const file = videoInput.files[0];
                const reader = new FileReader();
                reader.onload = (e) => {
                    const videoContainer = document.createElement('div');
                    videoContainer.classList.add('video-container');

                    const video = document.createElement('video');
                    video.src = e.target.result;
                    video.controls = true;

                    const removeButton = document.createElement('button');
                    removeButton.classList.add('remove-image');
                    removeButton.innerHTML = '&times;';
                    removeButton.onclick = () => removeVideo();

                    videoContainer.appendChild(video);
                    videoContainer.appendChild(removeButton);
                    videoPreviewContainer.appendChild(videoContainer);
                };
                reader.readAsDataURL(file);
            }
        }

        function removeVideo() {
            const videoInput = document.getElementById('hostel_video');
            const videoPreviewContainer = document.getElementById('hostel_video_preview');
            videoInput.value = '';
            videoPreviewContainer.innerHTML = '';
        }

    </script>


</head>

<body>

    <div class="container mt-5">

        <form action="{{ route('owner.hostels.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <input type="hidden" name="owner_id" value="{{ Auth::guard('owner')->id() }}">
            <!-- Your form fields -->

            <!-- Hostel Name -->
            <div class="form-group">
                <label for="hostel_name">Hostel Name:</label>
                <input type="text" class="form-control" id="hostel_name" name="hostel_name" value="" required>
            </div>

            <!-- City Selection -->
            <div class="form-group">
                <label>City:</label><br>
                @foreach($cities as $city)
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="{{ $city->city_name }}_option" name="city"
                            value="{{ $city->city_name }}" onclick="toggleLocationOptions('{{ $city->id }}')">
                        <label class="form-check-label" for="{{ $city->city_name }}_option">{{ $city->city_name }}</label>
                    </div>
                @endforeach
            </div>

            <div class="form-group">
                <label for="categories">Categories:</label><br>
                <select class="form-control" id="category_name" name="category_name" required
                    style=" border-radius: 5px; border: none; font-size: 16px; outline: 1px;">
                    <option value="" disabled selected>Select Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Hostel Front Image -->
            <div class="form-group">
                <label for="hostel_front_image">Hostel Front Image:</label>
                <input type="file" class="form-control-file" id="hostel_front_image" name="hostel_front_image"
                    accept="image/*" required onchange="updateFrontImagePreview()">
                <div id="front_image_preview" class="preview mt-2"></div>
            </div>

            <div class="form-group">
                <label for="hostel_video">Hostel Video:</label>
                <input type="file" class="form-control-file" id="hostel_video" name="hostel_video" accept="video/*"
                    required onchange="updateVideoPreview()">
                <div id="hostel_video_preview" class="preview mt-2"></div>
            </div>

            <div class="form-group">
                <label for="room_price">Hostel Price:</label>
                <input type="number" class="form-control" id="hostel_price" name="hostel_price"
                    placeholder="Enter Hostel Price" required>
            </div>

            <!-- Capacity -->
            <div class="form-group">
                <label for="capacity">Capacity:</label>
                <input type="number" class="form-control" id="capacity" name="capacity" value=""
                    placeholder="Enter capacity (optional)">
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value=""
                    placeholder="Enter email (optional)">
            </div>

            <!-- Number of Rooms -->
            <div class="form-group">
                <label for="num_rooms">Number of Rooms:</label>
                <input type="number" class="form-control" id="num_rooms" name="num_rooms" value=""
                    placeholder="Enter number of rooms (optional)">
            </div>

            <!-- Facilities (Wi-Fi, Security, Water Supply) -->
            <div class="form-group">
                <label for="facilities">Facilities:</label>

            </div>
            <div class="form-group">
                <label>Wi-Fi:</label>
                <div>
                    <input type="radio" id="wifi_yes" name="wifi" value="1">
                    <label for="wifi_yes">Yes</label>
                </div>
                <div>
                    <input type="radio" id="wifi_no" name="wifi" value="0">
                    <label for="wifi_no">No</label>
                </div>
            </div>

            <div class="form-group">
                <label>Security:</label>
                <div>
                    <input type="radio" id="security_yes" name="security" value="1">
                    <label for="security_yes">Yes</label>
                </div>
                <div>
                    <input type="radio" id="security_no" name="security" value="0">
                    <label for="security_no">No</label>
                </div>
            </div>

            <div class="form-group">
                <label>Water Supply:</label>
                <div>
                    <input type="radio" id="water_supply_yes" name="water_supply" value="1">
                    <label for="water_supply_yes">Yes</label>
                </div>
                <div>
                    <input type="radio" id="water_supply_no" name="water_supply" value="0">
                    <label for="water_supply_no">No</label>
                </div>
            </div>

            <!-- Hostel Address -->
            <div class="form-group">
                <label for="hostel_address">Hostel Address:</label>
                <textarea class="form-control" id="hostel_address" name="hostel_address" rows="4" required></textarea>
            </div>







            <!-- Hostel Location -->
            <div class="form-group">
                <label for="hostel_location">Hostel Location:</label>
                <input type="text" class="form-control" id="hostel_location" name="hostel_location"
                    placeholder="Enter hostel location (optional)">
            </div>


            <!-- Hostel Details -->
            <div class="form-group">
                <label for="hostel_detail">Hostel Detail:</label>
                <textarea class="form-control" id="hostel_detail" name="hostel_detail" rows="4" required></textarea>
            </div>





            <!-- Update Button -->
            <button type="submit" class="btn btn-success btn-block">Add Hostel</button>
        </form>
    </div>


</body>

</html>