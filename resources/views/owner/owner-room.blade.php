<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Information Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-color: #f0f4f8;
        }

        .form-group label {
            /* font-weight: bold; */
        }

        .form-section {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #ffffff;
        }

        .form-section h3 {
            margin-bottom: 15px;
            color: #0056b3;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .container {
            width: 750px;
        }

        .image-container {
            display: inline-block;
            margin-right: 10px;
            position: relative;
        }

        .image-container img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .remove-image {
            position: absolute;
            top: 0;
            right: 0;
            background: rgba(255, 0, 0, 0.8);
            border: none;
            color: white;
            cursor: pointer;
            font-size: 16px;
            padding: 2px 6px;
        }

        #error-message {
            display: none;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        let selectedFiles = [];

        function updateRoomImagePreview() {
            const roomImagesInput = document.getElementById('room_images');
            const previewContainer = document.getElementById('image-preview');
            const fileCount = document.getElementById('file-count');

            Array.from(roomImagesInput.files).forEach(file => {
                if (selectedFiles.length < 5) {
                    selectedFiles.push(file);
                }
            });

            roomImagesInput.value = '';
            previewContainer.innerHTML = '';
            fileCount.textContent = `Selected Images: ${selectedFiles.length}`;

            selectedFiles.forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = (e) => {
                    const imgContainer = document.createElement('div');
                    imgContainer.classList.add('image-container');

                    const img = document.createElement('img');
                    img.src = e.target.result;

                    const removeButton = document.createElement('button');
                    removeButton.classList.add('remove-image');
                    removeButton.innerHTML = '&times;';
                    removeButton.onclick = () => removeRoomImage(index);

                    imgContainer.appendChild(img);
                    imgContainer.appendChild(removeButton);
                    previewContainer.appendChild(imgContainer);
                };
                reader.readAsDataURL(file);
            });
        }

        function removeRoomImage(index) {
            selectedFiles.splice(index, 1);
            updateRoomImagePreview();
        }

        function validateForm(event) {
            const errorElement = document.getElementById('error-message');
            if (selectedFiles.length !== 5) {
                errorElement.style.display = 'block';
                event.preventDefault();
            } else {
                errorElement.style.display = 'none';
            }
        }
    </script>
</head>

<body>

    <div class="container">
        <form onsubmit="validateForm(event)" action="{{ route('rooms.roomStore') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
         <!-- Add a hidden input field to pass owner_id -->
  
    <input type="hidden" name="owner_id" value="{{$owner_id}}">
    <input type="hidden" name="hostel_id" value="{{$hostel_id}}">
    <!-- Your form fields -->

            <!-- Basic Information -->
            <div class="form-section">
                <h3>Basic Information</h3>
                

                <div class="form-group">
                    <label for="room-images">Room Images (exactly 5):</label>
                    <input type="file" class="form-control-file" id="room_images" name="room_images" accept="image/*"
                        multiple onchange="updateRoomImagePreview()">
                    <div id="file-count" class="mt-2">Selected Images: 0</div>
                    <div id="image-preview" class="preview mt-2"></div>
                    <div id="error-message" class="text-danger mt-2">Please upload exactly 5 images.</div>
                </div>

                <div class="form-group">
                    <label for="room_type"><b>Room Type:</b></label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="room_type" id="single_bed"
                            value="single_bed">
                        <label class="form-check-label" for="single_bed">Single Bed</label>
                    </div><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="room_type" id="double_bed"
                            value="double_bed">
                        <label class="form-check-label" for="double_bed">Double Bed</label>
                    </div><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="room_type" id="carpeted" value="carpeted">
                        <label class="form-check-label" for="carpeted">Carpeted</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="floor_number">Floor Number:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="floor_number" id="ground_floor"
                            value="ground_floor">
                        <label class="form-check-label" for="ground_floor">Ground Floor</label>
                    </div><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="floor_number" id="first_floor"
                            value="first_floor">
                        <label class="form-check-label" for="first_floor">First Floor</label>
                    </div><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="floor_number" id="second_floor"
                            value="second_floor">
                        <label class="form-check-label" for="second_floor">Second Floor</label>
                    </div><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="floor_number" id="third_floor"
                            value="third_floor">
                        <label class="form-check-label" for="third_floor">Third Floor</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="room_size">Room Size (sq ft):</label>
                    <input type="number" class="form-control" id="room_size" name="room_size">
                </div>
            </div>

            <!-- Occupancy -->
            <div class="form-section">
                <h3>Room Capacity</h3>
                <div class="form-group">
                    <label for="current_occupancy">Maximum Room Capacity:</label>
                    <input type="number" class="form-control" id="current_occupancy" name="current_occupancy">
                </div>
                <div class="form-group">
                    <label for="required_occupancy">Required Capacity:</label>
                    <input type="number" class="form-control" id="required_occupancy" name="required_occupancy">
                </div>
            </div>

            <!-- Amenities -->
            <div class="form-section">
                <h3>Facilities</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="wifi" name="wifi">
                    <label class="form-check-label" for="wifi">Wi-Fi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="filter_water" name="filter_water">
                    <label class="form-check-label" for="filter_water">Filter Water</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gass" name="gass">
                    <label class="form-check-label" for="gass">Gas</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="chair" name="chair">
                    <label class="form-check-label" for="chair">Chair</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="almaira" name="almaira">
                    <label class="form-check-label" for="almaira">Almaira</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="table" name="table">
                    <label class="form-check-label" for="table">Table</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="fan" name="fan">
                    <label class="form-check-label" for="fan">Fan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="ac" name="ac">
                    <label class="form-check-label" for="ac">AC</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="geyser" name="geyser">
                    <label class="form-check-label" for="geyser">Geyser</label>
                </div>
            </div>

            <!-- Washroom -->
            <div class="form-section">
                <div class="form-group">
                    <h3>Washroom:</h3><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="washroom" id="private" value="private">
                        <label class="form-check-label" for="private">Attach</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="washroom" id="share" value="share">
                        <label class="form-check-label" for="share">Separate</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="room_detail">Room Detail:</label>
                <textarea class="form-control" id="room_detail" name="room_detail" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>