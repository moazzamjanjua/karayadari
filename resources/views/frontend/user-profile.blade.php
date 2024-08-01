@include('frontend.layouts.style')

<body class="user-acount">
   @include('frontend.layouts.header')
    <!-- main content -->
   
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
        <form action="{{route('user-profile.update')}}" method="POST">
            @csrf
            @method('PUT')
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
</div>

                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
   @include('frontend.layouts.footer')
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
