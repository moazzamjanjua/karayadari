@include('frontend.layouts.style')

<body id="home">

    @include('frontend.layouts.header')
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

            <!-- slide show -->
            <div class="section banner" style="position: relative; width: 100%; height: 100vh; overflow: hidden;">

                <div class="tiva-slideshow-wrapper" style="width: 100%; height: 100%;">
                    <div  style="width: 100%; height: 100%;">
                        <img class="img-responsive" src="/frontend/img/home/home1-banner2.jpg" title="#caption2"
                             alt="Slideshow image" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>
                <div class="welcome-text" id="welcome-text"
                     style="position: absolute; top: 35%; left: 35%; transform: translate(-50%, -50%) scale(1.5); color: white; font-size: 20px; z-index: 1000; opacity: 0; transition: transform 1s ease-in-out, opacity 1s ease-in-out;">
                    Search Hostels In A Certain Area.<br>
                    <h3>Find Hostels</h3>
                    Search The Location And Select The Category To Find Hostels Accordingly.
                </div>

                <!-- Animated Navbar -->
                <div class="navbar" id="animated-navbar"
    style="position: absolute; gap: 10px; bottom: 0; left: 50%; transform: translateX(-50%); width: 90%; max-width: 1200px; padding: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 10px; display: flex; justify-content: space-around; align-items: center; opacity: 0; transition: bottom 1s ease-in-out, opacity 1s ease-in-out; z-index: 1000;">
    
    <!-- City Dropdown, populated from database -->
    <select name="city" style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none; flex: 1;">
            <option value="" disabled selected>Select City</option>
            @foreach($cities as $city)
                <option value="{{ $city->id }}" >
                    {{ $city->city_name }}
                </option>
            @endforeach
        </select>
    

    <!-- Area Input Field -->
    <select name="area" style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none; flex: 1;">

<option value="" disabled selected>Select Area</option>
    @foreach($areas as $area)
        <option value="{{ $area->id }}" {{ request('area') == $area->id ? 'selected' : '' }}>
            {{ $area->area_name }}
        </option>
    @endforeach
    style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none; flex: 1;">
    </select>
           
    <!-- Category Dropdown, populated from database -->
    <select name="category" style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none; flex: 1;">
    <option value="" disabled selected>Select Category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>

    <!-- Find Hostels Button -->
    <a href="{{ route('search.result') }}">
        <button style="padding: 10px 20px; border-radius: 5px; border: none; background-color: #007BFF; color: white; font-size: 16px; cursor: pointer;">
            Find Hostels
        </button>
    </a>
</div>

            </div>
        </div>

        @include('frontend.layouts.bottom-home')
        
       
        <script>
            window.addEventListener('load', function () {
                const navbar = document.getElementById('animated-navbar');
                const welcomeText = document.getElementById('welcome-text');

                // Update the navbar visibility and position
                setTimeout(() => {
                    navbar.style.opacity = '1';
                    navbar.style.bottom = '35%';

                    // Animate the welcome text
                    welcomeText.style.transform = 'translate(-50%, -50%) scale(1)';
                    welcomeText.style.opacity = '1';
                }, 2000);
            });
        </script>

    </body>
