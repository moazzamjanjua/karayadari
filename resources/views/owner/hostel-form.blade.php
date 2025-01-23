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

        .loader-container {
            display: none;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        .loader {
            width: 100px;
            height: 100px;
            border: 10px solid #f3f3f3;
            border-top: 10px solid #007bff;
            border-radius: 50%;
            animation: spin 2s linear infinite;
        }

        .progress-bar-container {
            width: 300px;
            background-color: #f2f2f2;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 10px;
        }

        .progress-bar {
            width: 0;
            height: 30px;
            background-color: #007bff;
            text-align: center;
            line-height: 30px;
            color: white;
            border-radius: 5px;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .success-message {
            display: none;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            color: #28a745;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <!-- Success Message -->
        <div id="successMessage" class="alert alert-success success-message" role="alert">
            Hostel uploaded successfully!
        </div>

        <form id="hostelForm" enctype="multipart/form-data">
            @csrf
            @method('POST')


            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Hostel Name -->
            <div class="form-group">
                <label for="hostel_name">Hostel Name:</label>
                <input type="text" class="form-control" id="hostel_name" name="hostel_name" required>
            </div>

            <!-- City -->
        <!-- City Dropdown -->
<div class="form-group">
    <label for="city">City:</label>
    <select id="city" name="city" class="form-control">
        <option value="" disabled selected>Select City</option>
        @foreach($cities as $city)
            <option value="{{ $city->city_name }}">{{ $city->city_name }}</option>
        @endforeach
        <option value="other">Other</option>
    </select>
</div>

<!-- Add New City Field (Initially Hidden) -->
<div class="form-group" id="newCityField" style="display: none;">
    <label for="new_city">Add New City:</label>
    <input type="text" id="new_city" class="form-control" placeholder="Enter new city name">
    <button type="button" id="addCityBtn" class="btn btn-primary mt-2">Add City</button>
</div>

<!-- Area Dropdown -->
<div class="form-group">
    <label for="area">Area:</label>
    <select id="area" name="area" class="form-control">
        <option value="" disabled selected>Select Area</option>
        <option value="other">Other</option>
    </select>
</div>

<!-- Add New Area Field (Initially Hidden) -->
<div class="form-group" id="newAreaField" style="display: none;">
    <label for="new_area">Add New Area:</label>
    <input type="text" id="new_area" class="form-control" placeholder="Enter new area name">
    <button type="button" id="addAreaBtn" class="btn btn-primary mt-2">Add Area</button>
</div>




            <!-- jQuery for AJAX -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>$(document).ready(function () {
    // Show input field for new city
    $('#city').change(function () {
        if ($(this).val() === 'other') {
            $('#newCityField').show();
        } else {
            $('#newCityField').hide();
            $('#new_city').val('');
        }
    });

    // Add new city to dropdown
    $('#addCityBtn').click(function () {
        const newCity = $('#new_city').val().trim();
        if (newCity) {
            $('#city').append(`<option value="${newCity}" selected>${newCity}</option>`);
            $('#newCityField').hide();
            $('#new_city').val('');
        }
    });

    // Show input field for new area
    $('#area').change(function () {
        if ($(this).val() === 'other') {
            $('#newAreaField').show();
        } else {
            $('#newAreaField').hide();
            $('#new_area').val('');
        }
    });

    // Add new area to dropdown
    $('#addAreaBtn').click(function () {
        const newArea = $('#new_area').val().trim();
        if (newArea) {
            $('#area').append(`<option value="${newArea}" selected>${newArea}</option>`);
            $('#newAreaField').hide();
            $('#new_area').val('');
        }
    });

    // Load areas dynamically based on selected city
    $('#city').change(function () {
        const selectedCity = $(this).val();

        // If the user selects an existing city
        if (selectedCity && selectedCity !== 'other') {
            $.ajax({
                url: `/get-areas/${selectedCity}`,
                type: 'GET',
                success: function (response) {
                    // Clear the dropdown
                    $('#area').empty().append('<option value="" disabled selected>Select Area</option>');

                    // Populate the dropdown with areas
                    response.forEach(area => {
                        $('#area').append(`<option value="${area.area_name}">${area.area_name}</option>`);
                    });

                    // Add the "Other" option
                    $('#area').append('<option value="other">Other</option>');
                },
                error: function () {
                    alert('Error loading areas. Please try again.');
                }
            });
        }
    });
});
</script>

            <!-- Categories -->
            <div class="form-group">
                <label for="categories">Categories:</label>
                <select class="form-control" id="category_name" name="category_name" required>
                    <option value="" disabled selected>Select Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Hostel Front Image -->
            <div class="form-group">
                <label for="hostel_front_image">Hostel Front Image:</label>
                <input type="file" class="form-control-file" id="hostel_front_image" name="hostel_front_image" required
                    accept="image/*" onchange="previewImage(event, 'imagePreview')">
                <img id="imagePreview" style="display:none; max-width: 100%; max-height: 200px; margin-top: 10px;" />
            </div>

            <!-- Hostel Video -->
            <div class="form-group">
                <label for="hostel_video">Hostel Video:</label>
                <input type="file" class="form-control-file" id="hostel_video" name="hostel_video" required
                    accept="video/*" onchange="previewVideo(event, 'videoPreview')">
                <video id="videoPreview" controls
                    style="display:none; max-width: 100%; max-height: 200px; margin-top: 10px;"></video>
            </div>

            <!-- Price -->
            <div class="form-group">
                <label for="room_price">Hostel Price:</label>
                <input type="number" class="form-control" id="hostel_price" name="hostel_price" required>
            </div>

            <!-- Capacity -->
            <div class="form-group">
                <label for="capacity">Capacity:</label>
                <input type="number" class="form-control" id="capacity" name="capacity"
                    placeholder="Enter capacity (optional)">
            </div>

            
            <!-- Capacity -->
            <div class="form-group">
                <label for="required_capacity">Required Capacity:</label>
                <input type="number" class="form-control" id="required_capacity" name="required_capacity"
                    placeholder="Enter capacity (optional)">
            </div>

            <!-- Number of Rooms -->
            <div class="form-group">
                <label for="num_rooms">Number of Rooms:</label>
                <input type="number" class="form-control" id="num_rooms" name="num_rooms"
                    placeholder="Enter number of rooms (optional)">
            </div>

            <!-- Facilities -->
            <div class="form-group">
                <label for="facilities">Wi-Fi:</label>
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
                <label for="security">Security:</label>
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
                <label for="water_supply">Water Supply:</label>
                <div>
                    <input type="radio" id="water_supply_yes" name="water_supply" value="1">
                    <label for="water_supply_yes">Yes</label>
                </div>
                <div>
                    <input type="radio" id="water_supply_no" name="water_supply" value="0">
                    <label for="water_supply_no">No</label>
                </div>
            </div>

            <!-- Address -->
            <div class="form-group">
                <label for="hostel_location">Hostel Location:</label>
                <textarea class="form-control" id="hostel_location" name="hostel_location" rows="4" required></textarea>
            </div>

            <!-- Hostel Details -->
            <div class="form-group">
                <label for="hostel_detail">Hostel Detail:</label>
                <textarea class="form-control" id="hostel_detail" name="hostel_detail" rows="4" required></textarea>
            </div>



            <!-- Submit Button -->
            <button type="submit" class="btn btn-success btn-block">Add Hostel</button>
        </form>
    </div>

    <!-- Loader Container -->
    <div id="loaderContainer" class="loader-container">
        <div>
            <div class="loader"></div>
            <div class="progress-bar-container">
                <div id="progressBar" class="progress-bar">0%</div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event, previewId) {
            const file = event.target.files[0];
            const preview = document.getElementById(previewId);
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }

        function previewVideo(event, previewId) {
            const file = event.target.files[0];
            const preview = document.getElementById(previewId);
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }

        document.getElementById('hostelForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Display the loader
            const loaderContainer = document.getElementById('loaderContainer');
            const progressBar = document.getElementById('progressBar');
            loaderContainer.style.display = 'flex';

            const formData = new FormData(this);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ route("owner.hostels.store") }}', true);

            // Track progress
            xhr.upload.onprogress = function (e) {
                if (e.lengthComputable) {
                    const percentComplete = Math.round((e.loaded / e.total) * 100);
                    progressBar.style.width = percentComplete + '%';
                    progressBar.innerHTML = percentComplete + '%';
                }
            };

            // On successful upload
            xhr.onload = function () {
                loaderContainer.style.display = 'none'; // Hide the loader

                // Parse the JSON response
                try {
                    const response = JSON.parse(xhr.responseText);
                    // Check if the response was successful
                    if (response.success) {
                        const successMessage = document.getElementById('successMessage');
                        successMessage.style.display = 'block'; // Show success message
                        successMessage.classList.add('fade'); // Add fade animation class
                        // Redirect to the provided URL from the response
                        window.location.href = response.redirect_url;
                    } else {
                        alert('Something went wrong: ' + response.message);
                    }
                } catch (error) {
                    alert('Error parsing response: ' + error.message);
                }
            };

            // On failure
            xhr.onerror = function () {
                alert('Upload failed, please try again.');
                loaderContainer.style.display = 'none';
            };

            // Send the form data
            xhr.send(formData);
        });

    </script>

    <style>
        .fade {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>

</body>









</html>