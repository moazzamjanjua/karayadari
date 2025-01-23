@include('frontend.layouts.style')

<body id="result">

    @include('frontend.layouts.header')

    <style>
        .search-text {
            margin-left: 70px;
            color: #007BFF;

        }
    </style>

    <!-- main content -->

    <div class="main-content">
        <div class="wrap-banner">

            <!-- slide show -->
            <div class="section banner" style="position: relative; width: 100%; height: 350px; overflow: hidden;">


                <div>


                    <img class="img-responsive" src="/frontend/img/home/home1-banner2.jpg" title="#caption2">


                </div>

                <div class="welcome-text" id="welcome-text"
                    style="position: absolute; top: 50%; left: 35%; transform: translate(-50%, -50%) scale(1.5); color: white; font-size: 20px; z-index: 1000;">
                    <br> Search Result<br>
                    <h1>Find Hostels</h1>
                    Search The Location And Select The Category To Find Hostels Accordingly.
                </div>
            </div>
        </div>


        <div class="search-text" style="display:felx;">




            <br>Search Hostels In A Certain Area.<br>
            <h1><b>Searched Hostels</b></h1>
            Find Nearby hostels in any area of Bahawalpur.
        </div>


        <!-- Animated Navbar -->
        @include('frontend.layouts.nav-bar')





        <div class="container">
            <!-- Dynamically Set the Heading Based on the Query Parameter -->
            @php
                $view = request('view', 'all');
                $selectedCategory = request('category');
            @endphp
            <h1 class="text-center mb-4">
                @if($view === 'featured-hostel')
                    All Featured Hostels ({{ $hostels->total() }})
                @elseif($view === 'verified-hostels')
                    Verified Hostels ({{ $hostels->total() }})
                @elseif($view === 'best-hostels')
                    All Best Hostels ({{ $hostels->total() }})
                @elseif($selectedCategory)
                    All {{ $selectedCategory }} ({{ $hostels->total() }})
                @else

                @endif
            </h1>

            @if($hostels->isNotEmpty())
                @foreach($hostels as $hostel)
                    <a href="{{ route('hostel-detail.show', $hostel->slug) }}" class="hostel-link">
                        <div class="row row-fixed hostel-card">
                            <div class="price-ribbon">
                                {{ $hostel->hostel_price }} Rs / month
                                <!--@if($hostel->required_capacity==0)-->
                                <!--    <img src="{{ asset('storage/booked_hostel/booked.png') }}" class="booked_tag"-->
                                <!--        alt="Booked Hostel">-->
                                <!--        @endif-->
                            </div>
                            <!-- Hostel Image -->
                            <div class="hostel-image-container">
                                @if($hostel->hostel_front_image)
                                    <img src="{{$hostel->hostel_front_image}}" alt="Hostel Image">
                                @else
                                    <p>No image available</p>
                                @endif
                            </div>

                            <!-- Hostel Details -->
                            <div class="hostel-details">
                                <h5>{{ $hostel->hostel_name }}</h5>
                                <p><strong>Detail:</strong> {{ explode('.', $hostel->hostel_detail)[0] }}....<strong
                                        style="color:red">See More</strong></p>

                                <p>Average Rating: {{ round($hostel->reviews_avg_rating ?? 0, 1) ?: 'No ratings yet' }}</p>
                                <p>{{ Str::limit($hostel->hostel_description, 150) }}</p>
                            </div>

                            <div class="category_verified_container">
                                <p class="categoty_hostel">{{ $hostel->category_name }}</p>
                                @if($hostel->is_verified)
                                    <img src="{{ asset('storage/verified_hostel/verified_tag.png') }}" class="verified_tag"
                                        alt="Verified Hostel">
                                @endif
                            </div>
                        </div>
                    </a>
                @endforeach

                <!-- Pagination Links -->
                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item{{ $hostels->onFirstPage() ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $hostels->appends(request()->query())->previousPageUrl() }}"
                                    aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            @foreach ($hostels->appends(request()->query())->links()->elements[0] as $page => $url)
                                <li class="page-item{{ $page == $hostels->currentPage() ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach
                            <li class="page-item{{ !$hostels->hasMorePages() ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $hostels->appends(request()->query())->nextPageUrl() }}"
                                    aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            @else
                <p class="text-center">No hostels found.</p>
            @endif
        </div>

        @include('frontend.layouts.footer')

        <script>
            window.addEventListener('load', function () {


                // Set a smooth transition for transform and opacity over 3 seconds
                const welcomeText = document.getElementById('welcome-text');
                welcomeText.style.transition = 'transform 1s ease-in-out, opacity 1s ease-in-out';

                // Animate the welcome text (smooth and 3 seconds duration)
                welcomeText.style.transform = 'translate(-50%, -50%) scale(1)';
                welcomeText.style.opacity = '1';


            });

        </script>





</body>