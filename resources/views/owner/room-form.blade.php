<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            padding-top: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }

        .btn-custom {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .form-check-label {
            margin-left: 10px;
        }

        .form-group label {
            font-weight: bold;
        }

        .preview {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .preview .image-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .preview img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
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

        .preview .remove-image:hover {
            background: rgba(255, 0, 0, 0.9);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">Room Details Form</h1>
        <form action="{{ route('rooms.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <!-- Hidden field for hostel ID -->
            <input type="hidden" name="hostel_id" value="">

            <div class="form-group">
                <label for="room_images">Room Images:</label>
                <input type="file" class="form-control-file" id="room_images" name="room_images[]" multiple accept="image/*" onchange="updateImagePreviews()">
                <small class="form-text text-muted">Upload up to 4 images (optional).</small>
            </div>

            <div id="image_previews" class="preview"></div>

            <!-- Other form fields -->
            <div class="form-group">
                <label for="room_type">Room Type:</label>
                <select class="form-control" id="room_type" name="room_type" required>
                    <option value="single_bed">Single Bed</option>
                    <option value="double_bed">Double Bed</option>
                    <option value="carpeted">Carpeted</option>
                </select>
            </div>

            <div class="form-group">
                <label for="floor_number">Floor Number:</label>
                <select class="form-control" id="floor_number" name="floor_number" required>
                    <option value="ground_floor">Ground Floor</option>
                    <option value="first_floor">First Floor</option>
                    <option value="second_floor">Second Floor</option>
                    <option value="third_floor">Third Floor</option>
                </select>
            </div>

            <div class="form-group">
                <label for="room_size">Room Size (in sq. ft):</label>
                <input type="number" class="form-control" id="room_size" name="room_size" placeholder="Enter room size" required>
            </div>

            <div class="form-group">
                <label for="current_occupancy">Current Occupancy:</label>
                <input type="number" class="form-control" id="current_occupancy" name="current_occupancy" placeholder="Enter current occupancy" required>
            </div>

            <div class="form-group">
                <label for="required_occupancy">Required Occupancy:</label>
                <input type="number" class="form-control" id="required_occupancy" name="required_occupancy" placeholder="Enter required occupancy" required>
            </div>

            <div class="form-group">
                <label>Facilities:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="wifi" name="wifi">
                    <label class="form-check-label" for="wifi">Wi-Fi</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="filter_water" name="filter_water">
                    <label class="form-check-label" for="filter_water">Filter Water</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="gas" name="gas">
                    <label class="form-check-label" for="gas">Gas</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="chair" name="chair">
                    <label class="form-check-label" for="chair">Chair</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="almaira" name="almaira">
                    <label class="form-check-label" for="almaira">Almaira</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="table" name="table">
                    <label class="form-check-label" for="table">Table</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="fan" name="fan">
                    <label class="form-check-label" for="fan">Fan</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="ac" name="ac">
                    <label class="form-check-label" for="ac">AC</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="geyser" name="geyser">
                    <label class="form-check-label" for="geyser">Geyser</label>
                </div>
                <div class="form-check">
                    <label for="washroom">Washroom:</label>
                    <select class="form-control" id="washroom" name="washroom" required>
                        <option value="private">Private</option>
                        <option value="share">Share</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="room_detail">Room Detail:</label>
                <textarea class="form-control" id="room_detail" name="room_detail" rows="4" placeholder="Enter any additional details (optional)"></textarea>
            </div>

            <button type="submit" class="btn btn-custom btn-block">Submit</button>
        </form>
    </div>

    <script>
        let selectedFiles = [];

        function updateImagePreviews() {
            const fileInput = document.getElementById('room_images');
            const previewContainer = document.getElementById('image_previews');

            const errorContainer = document.getElementById('error_message');
            if (errorContainer) {
                errorContainer.innerHTML = '';
            }

            Array.from(fileInput.files).forEach(file => {
                if (!selectedFiles.some(f => f.name === file.name && f.size === file.size)) {
                    selectedFiles.push(file);
                }
            });

            if (selectedFiles.length > 4) {
                const excessFiles = selectedFiles.length - 4;
                selectedFiles.length = 4;
                
                const errorMessage = `You can only select up to 4 images. ${excessFiles} file(s) were ignored.`;
                if (!errorContainer) {
                    const newErrorContainer = document.createElement('div');
                    newErrorContainer.id = 'error_message';
                    newErrorContainer.style.color = 'red';
                    newErrorContainer.textContent = errorMessage;
                    fileInput.parentNode.insertBefore(newErrorContainer, fileInput.nextSibling);
                } else {
                    errorContainer.textContent = errorMessage;
                }

                const dataTransfer = new DataTransfer();
                selectedFiles.forEach(file => dataTransfer.items.add(file));
                fileInput.files = dataTransfer.files;
            }

            previewContainer.innerHTML = '';

            selectedFiles.forEach((file, index) => {
                const imageContainer = document.createElement('div');
                imageContainer.classList.add('image-container');

                const img = document.createElement('img');
                img.src = URL.createObjectURL(file);

                const removeButton = document.createElement('button');
                removeButton.classList.add('remove-image');
                removeButton.textContent = 'x';
                removeButton.onclick = function() {
                    selectedFiles.splice(index, 1);
                    const dataTransfer = new DataTransfer();
                    selectedFiles.forEach(f => dataTransfer.items.add(f));
                    fileInput.files = dataTransfer.files;
                    updateImagePreviews();
                };

                imageContainer.appendChild(img);
                imageContainer.appendChild(removeButton);

                previewContainer.appendChild(imageContainer);
            });
        }
    </script>
</body>
</html>
