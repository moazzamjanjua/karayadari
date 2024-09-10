@include('frontend.layouts.style')

<body id="home">

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
            <div class="section banner" style="position: relative; width: 100%; height: 100vh; overflow: hidden;">
                <div class="tiva-slideshow-wrapper" style="width: 100%; height: 100%;">
                    <div style="width: 100%; height: 100%;">
                        <img class="img-responsive" src="/frontend/img/home/home1-banner2.jpg" title="#caption2"
                             alt="Slideshow image" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>

                <!-- Welcome Text -->
                <div class="welcome-text" id="welcome-text"
                     style="position: absolute; top: 35%; left: 50%; transform: translate(-50%, -50%) scale(1.5); color: white; font-size: 20px; z-index: 1000; opacity: 0; transition: transform 1s ease-in-out, opacity 1s ease-in-out;">
                    Search Hostels In A Certain Area.<br>
                    <h3>Find Hostels</h3>
                    Search The Location And Select The Category To Find Hostels Accordingly.
                </div>

                <!-- Animated Navbar -->
                <div class="navbar" id="navbar-section"
                    style="position: absolute; bottom: 10%; width: 90%; max-width: 1200px; margin: 0 auto; padding: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 10px; display: flex; justify-content: space-around; align-items: center; z-index: 1000; opacity: 0; transition: opacity 1s ease-in-out, bottom 1s ease-in-out;">
                    
                    <form method="GET" action="{{ route('search.result') }}" style="display: flex; gap: 10px; align-items: center; width: 100%;">
                        <!-- City Dropdown, populated from database -->
                        <select name="city" style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none; flex: 1;">
                            <option value="" disabled selected>Select City</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->city_name }}" {{ request('city') == $city->city_name ? 'selected' : '' }}>
                                    {{ $city->city_name }}
                                </option>
                            @endforeach
                        </select>

                        <!-- Category Dropdown -->
                        <select name="category" style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none; flex: 1;">
                            <option value="" disabled selected>Select Categories</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->category_name }}" {{ request('category') == $category->category_name ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>

                        <!-- Area Dropdown -->
                        <select name="area" style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none; flex: 1;">
                            <option value="" disabled selected>Select Area</option>
                            @foreach($areas as $area)
                                <option value="{{ $area->area_name }}" {{ request('area') == $area->area_name ? 'selected' : '' }}>
                                    {{ $area->area_name }}
                                </option>
                            @endforeach
                        </select>

                        <!-- Submit Button -->
                        <button type="submit" style="padding: 10px 20px; border-radius: 5px; border: none; background-color: #007BFF; color: white; font-size: 16px; cursor: pointer;">
                            Find Hostels
                        </button>
                    </form>
                </div>
            </div>
        </div>

        @include('frontend.layouts.bottom-home')

        <script>
            window.addEventListener('load', function () {
                const navbar = document.getElementById('navbar-section'); // Correct ID
                const welcomeText = document.getElementById('welcome-text');

                // Animate the navbar visibility and welcome text
                setTimeout(() => {
                    // Show the navbar by changing its opacity and position
                    navbar.style.opacity = '1';
                    navbar.style.bottom = '20%'; // Adjusted to bring it higher

                    // Animate the welcome text appearance
                    welcomeText.style.transform = 'translate(-50%, -50%) scale(1)';
                    welcomeText.style.opacity = '1';
                }, 2000);
            });
        </script>

    </body>
