<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Details Form</title>
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
            /* align-items: center; */
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

        .avatar-upload .edit-button {
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
            const frontImagePreviewContainer = document.getElementById('front-image-preview');
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
    </script>
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4"><b>Hostel Details Form</b></h1>
        <form action="{{ route('owner.home', ['id' => $ownerId]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
            <label for="owner_image">Hostel Owner Image:</label>
            <div class="avatar-upload">
                <img id="owner_image_preview" src="/frontend/img/home/avatar.jpg" alt="Owner Image">
                <input type="file" class="form-control-file d-none" id="owner_image" name="owner_image" accept="image/*"
                    required onchange="updateOwnerImagePreview()">
                <button type="button" class="edit-button"
                    onclick="document.getElementById('owner_image').click()">✎</button>
            </div>
            <div class="form-group">
                <label for="owner_name">Owner Name:</label>
                <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Enter owner name"
                    required>
            </div>
            <div class="form-group">
                <label for="owner_number">Owner Phone Number:</label>
                <input type="text" class="form-control" id="owner_number" name="owner_number"
                    placeholder="Enter owner phone number" required>
            </div>
            <div class="form-group">
                <label for="hostel_name">Hostel Name:</label>
                <input type="text" class="form-control" id="hostel_name" name="hostel_name"
                    placeholder="Enter hostel name" required>
            </div>
            <div class="form-group">
                <label for="hostel_address">Hostel Address:</label>
                <textarea class="form-control" id="hostel_address" name="hostel_address" rows="4"
                    placeholder="Enter hostel address" required></textarea>
            </div>
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
                <label for="hostel_front_image">Hostel Front Image:</label>
                <input type="file" class="form-control-file" id="hostel_front_image" name="hostel_front_image"
                    accept="image/*" required onchange="updateFrontImagePreview()">
                <div id="front_image_preview" class="preview mt-2"></div>
            </div>
            <div class="form-group">
                <label for="hostel_detail">Hostel Detail:</label>
                <textarea class="form-control" id="hostel_detail" name="hostel_detail" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-block">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>