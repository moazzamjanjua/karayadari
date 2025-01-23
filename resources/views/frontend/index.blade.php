@include('frontend.layouts.style')

<body id="home">

    <style>
        header {
            position: relative;
            /* or fixed, if needed */
            z-index: 1001;
            /* Ensure it stays on top */
            width: 100%;
            height: 75px;
            /* Set a height for the header */
            background-color: white;
            /* Background color for visibility */
        }
    </style>

    @include('frontend.layouts.header')

    <!-- Preloader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="wrap-banner">
            <!-- Slide Show -->
            <div class="section banner" style="position: relative; width: 100%; height: 80vh;">
                <div class="tiva-slideshow-wrapper" style="width: 100%; height: 100%;">
                    <div style="width: 100%; height: 100%;">
                        <img class="img-responsive" src="/frontend/img/home/home1-banner2.jpg" title="#caption2"
                            alt="Slideshow image" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>

                <!-- Welcome Text -->
                <div class="welcome-text" id="welcome-text"
                    style="position: absolute; top: 27%; left: 31%; transform: translate(-50%, -50%) scale(1.5); color: white; font-size: 22px; z-index: 1000; opacity: 0; transition: transform 1s ease-in-out, opacity 1s ease-in-out;">
                    Search Hostels In A Certain Area.<br>
                    <h3>Find Hostels</h3>
                    Search The Location And Select The Category To Find Hostels in Bahawalpur.
                </div>

                <!-- Animated Navbar -->
                <div class="navbar" id="navbar-section"
                    style="position: absolute; bottom: -100px; width: 90%; max-width: 1200px; left: 5%; padding: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 10px; display: flex; justify-content: space-around; align-items: center; z-index: 1000; opacity: 0; transition: opacity 1s ease-in-out, bottom 1s ease-in-out;">

                    <form method="GET" action="{{ route('search.result') }}"
                        style="display: flex; gap: 10px; align-items: center; width: 100%;">
                        <!-- City Dropdown -->
                        <select name="city"
                            style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none; flex: 1;">
                            <option value="" disabled selected>Select City</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->city_name }}" {{ request('city') == $city->city_name ? 'selected' : '' }}>
                                    {{ $city->city_name }}
                                </option>
                            @endforeach
                        </select>

                        <!-- Category Dropdown -->
                        <select name="category"
                            style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none; flex: 1;">
                            <option value="" disabled selected>Select Categories</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->category_name }}" {{ request('category') == $category->category_name ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>

                        <!-- Area Dropdown -->
                        <select name="area"
                            style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none; flex: 1;">
                            <option value="" disabled selected>Select Area</option>
                            @foreach($areas as $area)
                                <option value="{{ $area->area_name }}" {{ request('area') == $area->area_name ? 'selected' : '' }}>
                                    {{ $area->area_name }}
                                </option>
                            @endforeach
                        </select>

                        <!-- Submit Button -->
                        <button type="submit"
                            style="padding: 10px 20px; border-radius: 5px; border: none; background-color: #007BFF; color: white; font-size: 16px; cursor: pointer;">
                            Find Hostels
                        </button>
                    </form>
                </div>
            </div>
        </div>

        @include('frontend.layouts.bottom-home')

        <script>
            window.addEventListener('load', function () {
                const navbar = document.getElementById('navbar-section');
                const welcomeText = document.getElementById('welcome-text');

                // Animate the navbar visibility and position after a delay
                setTimeout(() => {
                    // Show the navbar by changing its opacity and moving it up from the bottom
                    navbar.style.opacity = '1';
                    navbar.style.bottom = '10%'; // Adjust this value to position the navbar just below the welcome text

                    // Animate the welcome text appearance
                    welcomeText.style.transform = 'translate(-40%, -40%) scale(1)';
                    welcomeText.style.opacity = '1';
                }, 2000); // Delay for animation to start
            });
            
            
             // Check if modal has already been shown
    if (!localStorage.getItem('feedbackModalShown')) {
        setTimeout(function () {
            // Show the modal
            $('#feedbackModal').modal('show');
            
            // Set a flag in localStorage to remember that modal was shown
            localStorage.setItem('feedbackModalShown', 'true');
        }, 15000); // 5 seconds delay
    }

    // Handle modal close or submit events
    $('#feedbackModal').on('hidden.bs.modal', function () {
        // Optionally, ensure the flag is set when user closes or submits
        localStorage.setItem('feedbackModalShown', 'true');
    });

        </script>

</body>