<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Details Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 60%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        input[type="text"],
        input[type="number"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        textarea {
            resize: vertical;
        }
        .radio-group {
            display: flex;
            flex-direction: column;
        }
        .radio-group label {
            display: flex;
            align-items: center;
        }
        .radio-group input {
            margin-right: 10px;
        }
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            background: #5cb85c;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background: #4cae4c;
        }
        .error {
            color: red;
            display: none;
            margin-top: 10px;
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
    </style>
    <script>
        let selectedFiles = [];

        function updateRoomImagePreview() {
            const roomImagesInput = document.getElementById('room-images');
            const previewContainer = document.getElementById('image-preview');
            const fileCount = document.getElementById('file-count');
            
            // Add selected files to the array
            Array.from(roomImagesInput.files).forEach(file => {
                if (selectedFiles.length < 5) {
                    selectedFiles.push(file);
                }
            });

            // Clear the input
            roomImagesInput.value = '';

            // Clear existing previews
            previewContainer.innerHTML = '';

            // Update file count
            fileCount.textContent = `Selected Images: ${selectedFiles.length}`;

            // Display previews
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

        function updateFrontImagePreview() {
            const frontImageInput = document.getElementById('hostel-front-image');
            const frontImagePreviewContainer = document.getElementById('front-image-preview');

            // Clear existing preview
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
            const frontImageInput = document.getElementById('hostel-front-image');
            const frontImagePreviewContainer = document.getElementById('front-image-preview');

            // Clear the input
            frontImageInput.value = '';
            // Clear the preview
            frontImagePreviewContainer.innerHTML = '';
        }
    </script>
</head>
<body>

<div class="container">
    <h1>Hostel Details Form</h1>
    <form action="#" method="post" enctype="multipart/form-data" onsubmit="validateForm(event)">
        <div class="form-group">
            <label for="owner-name">Owner Name:</label>
            <input type="text" id="owner-name" name="owner-name" required>
        </div>
        <div class="form-group">
            <label for="hostel-name">Hostel Name:</label>
            <input type="text" id="hostel-name" name="hostel-name" required>
        </div>
        <div class="form-group">
            <label for="hostel-address">Hostel Address:</label>
            <textarea id="hostel-address" name="hostel-address" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="hostel-location">Hostel Location:</label>
            <input type="text" id="hostel-location" name="hostel-location" required>
        </div>
        <div class="form-group">
            <label for="hostel-front-image">Hostel Front Image:</label>
            <input type="file" id="hostel-front-image" name="hostel-front-image" accept="image/*" required onchange="updateFrontImagePreview()">
            <div id="front-image-preview" class="preview"></div>
        </div>
        <div class="form-group">
            <label for="total-floor">Total Floors:</label>
            <input type="number" id="total-floor" name="total-floor" required>
        </div>
        <div class="form-group">
            <label for="total-room">Total Rooms:</label>
            <input type="number" id="total-room" name="total-room" required>
        </div>
        <div class="form-group">
            <label for="room-details">Room Details:</label>
            <textarea id="room-details" name="room-details" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="room-images">Room Images (exactly 5):</label>
            <input type="file" id="room-images" name="room-images" accept="image/*" multiple onchange="updateRoomImagePreview()">
            <div id="file-count">Selected Images: 0</div>
            <div id="image-preview" class="preview"></div>
            <div id="error-message" class="error">Please upload exactly 5 images.</div>
        </div>
        <div class="form-group">
            <label>Room Type:</label>
            <div class="radio-group">
                <label for="single-bed">
                    <input type="radio" id="single-bed" name="room-type" value="Single Bed" required> Single Bed
                </label>
                <label for="double-bed">
                    <input type="radio" id="double-bed" name="room-type" value="Double Bed" required> Double Bed
                </label>
                <label for="carpet-room">
                    <input type="radio" id="carpet-room" name="room-type" value="Carpet Room" required> Carpet Room
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="capacity">Capacity:</label>
            <input type="number" id="capacity" name="capacity" required>
        </div>
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
