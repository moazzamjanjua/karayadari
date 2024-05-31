<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Details Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .avatar-upload {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }
        .avatar-upload img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ddd;
            margin-bottom: 10px;
        }
        .avatar-upload .edit-button {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
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
    </style>
    <script>
        function updateFrontImagePreview() {
            const frontImageInput = document.getElementById('hostel-front-image');
            const frontImagePreviewContainer = document.getElementById('front-image-preview');
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
            frontImageInput.value = '';
            frontImagePreviewContainer.innerHTML = '';
        }

        function updateOwnerImagePreview() {
            const ownerImageInput = document.getElementById('owner-image');
            const ownerImagePreview = document.getElementById('owner-image-preview');
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
    </script>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Hostel Details Form</h1>
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="avatar-upload">
            <img id="owner-image-preview" src="https://via.placeholder.com/100" alt="Owner Image">
            <input type="file" class="form-control-file d-none" id="owner-image" name="owner-image" accept="image/*" required onchange="updateOwnerImagePreview()">
            <button type="button" class="edit-button" onclick="document.getElementById('owner-image').click()">Edit</button>
        </div>
        <div class="form-group">
            <label for="owner-name">Owner Name:</label>
            <input type="text" class="form-control" id="owner-name" name="owner-name" required>
        </div>
        <div class="form-group">
            <label for="owner-name">Owner Number:</label>
            <input type="text" class="form-control" id="owner-name" name="owner-name" required>
        </div>
        <div class="form-group">
            <label for="hostel-name">Hostel Name:</label>
            <input type="text" class="form-control" id="hostel-name" name="hostel-name" required>
        </div>
        <div class="form-group">
            <label for="hostel-address">Hostel Address:</label>
            <textarea class="form-control" id="hostel-address" name="hostel-address" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="hostel-location">Hostel Location:</label>
            <input type="text" class="form-control" id="hostel-location" name="hostel-location" required>
        </div>
        <div class="form-group">
            <label for="hostel-front-image">Hostel Front Image:</label>
            <input type="file" class="form-control-file" id="hostel-front-image" name="hostel-front-image" accept="image/*" required onchange="updateFrontImagePreview()">
            <div id="front-image-preview" class="preview mt-2"></div>
        </div>
        <div class="form-group">
            <label for="room-details">hostel Detail:</label>
            <textarea class="form-control" id="hostel-detail" name="hostel-detail" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-block">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
