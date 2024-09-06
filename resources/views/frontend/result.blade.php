@include('frontend.layouts.style')

<body id="result">

    @include('frontend.layouts.header')
  
    <!-- main content -->

    <div class="main-content">
        <div class="wrap-banner">

            <!-- slide show -->
            <div class="section banner" style="position: relative; width: 100%; height: 100vh; overflow: hidden;">

                <div class="tiva-slideshow-wrapper" style="width: 100%; height: 100%;">
                    <div id="tiva-slideshow" class="nivoSlider" style="width: 100%; height: 100%;">
                      
                        <a href="#">
                            <img class="img-responsive" src="/frontend/img/home/home1-banner2.jpg" title="#caption2"
                                alt="Slideshow image" style="width: 100%; height: 100%; object-fit: cover;">
                        </a>
                      
                    </div>
                </div>
                <div class="welcome-text" id="welcome-text"
                    style="position: absolute; top: 35%; left: 35%; transform: translate(-50%, -50%) scale(1.5); color: white; font-size: 20px; z-index: 1000; opacity: 0; transition: transform 1s ease-in-out, opacity 1s ease-in-out;">
                    Search Results<br>
                    <h3>Find Hostels</h3>
                    Search The Location And Select The Category To Find Hostels Accordingly.
                </div>

                <!-- Animated Navbar -->
                
            </div>
        </div>

        <div class="navbar" id="animated-navbar"
                    style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 90%; max-width: 1200px; padding: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 10px; display: flex; justify-content: space-around; align-items: center; opacity: 0; transition: bottom 1s ease-in-out, opacity 1s ease-in-out; z-index: 1000;">
                    <input type="text" placeholder="Desired City"
                        style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none;">
                    <select style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none;">


                        <option value="" disabled selected>Select Categories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>

                    <div style="display: flex; align-items: center;">
                        <input type="range" id="price-range" min="1000" max="10000" step="500"
                            style="padding: 10px; border-radius: 5px; border: none; font-size: 16px; outline: none;">
                        <span id="range-value" style="margin-left: 10px; color: white; font-size: 16px;">1000</span>
                    </div>
                    <button
                        style="padding: 10px 20px; border-radius: 5px; border: none; background-color: #007BFF; color: white; font-size: 16px; cursor: pointer;">
                        Find Hostels
                    </button>
                </div>

    

                @include('frontend.layouts.footer')

        <script>
            window.addEventListener('load', function () {
                const navbar = document.getElementById('animated-navbar');
                const priceRange = document.getElementById('price-range');
                const rangeValue = document.getElementById('range-value');
                const welcomeText = document.getElementById('welcome-text');

                // Set initial value of the range to the minimum
                priceRange.value = priceRange.min;
                rangeValue.textContent = priceRange.value;

                // Update the navbar visibility and position
                setTimeout(() => {
                    navbar.style.opacity = '1';
                    navbar.style.bottom = '35%';

                    // Animate the welcome text
                    welcomeText.style.transform = 'translate(-50%, -50%) scale(1)';
                    welcomeText.style.opacity = '1';
                }, 2000);

                // Update the range value display on input
                priceRange.addEventListener('input', function () {
                    rangeValue.textContent = this.value;
                });
            });
        </script>

</body>