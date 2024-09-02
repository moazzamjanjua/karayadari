@include('frontend.layouts.style')

<body class="user-acount">
   @include('frontend.layouts.header')
    <!-- main content -->
    <div id="page-preloader">
    <div class="page-loading">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>
    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">

            <!-- breadcrumb -->
            <nav class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">
                        <ol>
                            <li>
                                <a href="#">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>My Account</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

            <div class="acount head-acount">
                <div class="container">
                <div id="main">
                <h1 class="title-page">My Account</h1>
<div class="content" id="block-history">
<img id="edit-avatar-preview" 
     src="{{ Auth::user()->user_image && !is_null(Auth::user()->user_image) ? asset('storage/user_image/' . Auth::user()->user_image) : asset('frontend/img/home/avatar.jpg') }}" 
     alt="User Avatar" 
     style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); margin-bottom: 20px;">

                        
    <table class="std table">
        <tbody>
            <tr>
                <th class="first_item">Name:</th>
                <td>{{ Auth::user()->name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="first_item">Address :</th>
                <td>{{ Auth::user()->address ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="first_item">City :</th>
                <td>{{ Auth::user()->city ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="first_item">Phone :</th>
                <td>{{ Auth::user()->phone ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th class="first_item">Country:</th>
                <td>{{ Auth::user()->country ?? 'N/A' }}</td>
            </tr>
        </tbody>
    </table>
</div>

<button class="btn btn-primary" id="edit-profile-btn" type="button">Edit Profile</button>              

<!-- Hidden Edit Form -->
<div class="content" id="edit-profile-form" style="display:none;">
    <form action="{{ route('user-profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Image Preview -->
        <img id="edit-avatar-preview" src="{{ Auth::user()->user_image ? asset('storage/user_image/' . Auth::user()->user_image) : asset('frontend/img/home/avatar.jpg') }}" 
             alt="User Avatar" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); margin-bottom: 20px;">
        
        <!-- File Input -->
        <input type="file" name="user_image" accept="image/*" style="margin-top: 10px;" onchange="previewImage(event)">
        
        <table class="std table">
            <tbody>
                <tr>
                    <th class="first_item">Name:</th>
                    <td><input type="text" name="name" value="{{ Auth::user()->name }}"></td>
                </tr>
                <tr>
                    <th class="first_item">Address :</th>
                    <td><input type="text" name="address" value="{{ Auth::user()->address }}"></td>
                </tr>
                <tr>
                    <th class="first_item">City :</th>
                    <td><input type="text" name="city" value="{{ Auth::user()->city }}"></td>
                </tr>
                <tr>
                    <th class="first_item">Phone :</th>
                    <td><input type="text" name="phone" value="{{ Auth::user()->phone }}"></td>
                </tr>
                <tr>
                    <th class="first_item">Country:</th>
                    <td><input type="text" name="country" value="{{ Auth::user()->country }}"></td>
                </tr>
            </tbody>
        </table>

        <button class="btn btn-success" type="submit">Update Profile</button>
    </form>
</div>

<script>
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('edit-avatar-preview');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}

// Show Edit Form
document.getElementById('edit-profile-btn').addEventListener('click', function() {
    document.getElementById('edit-profile-form').style.display = 'block';
});
</script>




</div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#edit-profile-btn').on('click', function() {
            // Hide the static profile display
            $('#block-history').hide();

            // Show the edit form
            $('#edit-profile-form').show();
        });
    });
</script>
    <!-- footer -->
   @include('frontend.layouts.footer')
 
