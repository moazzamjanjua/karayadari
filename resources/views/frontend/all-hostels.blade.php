@include('frontend.layouts.style')

<body id="contact" class="all-hostels">
    @include('frontend.layouts.header')

    <style>
        .hostel-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 1.5rem;
            display: flex;
            flex-wrap: wrap;
        }

        .hostel-image-container {
            width: 100%;
            max-width: 300px;
            height: 200px;
            overflow: hidden;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .hostel-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hostel-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }

        .pagination .page-link {
            color: #007bff;
        }

        .pagination .page-link:hover {
            background-color: #0056b3;
            color: white;
        }

        .category_verified_container {
            display: inline-block;
            text-align: center;
            margin-bottom: 15px;
        }

        .categoty_hostel {
            display: block;
            font-size: 1.3rem;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            padding: 8px 16px;
            border-radius: 5px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .verified_tag {
            width: 140px;
            height: 150px;
            margin: 0 auto;
            display: block;
        }

        .hostel-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Add a deeper shadow on hover */
            transform: translateY(-5px); /* Slightly lift the card */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for hover effect */
        }

        .hostel-card:hover .hostel-details h5 {
            color: #007bff; /* Change the title color on hover */
        }

        .hostel-card:hover .hostel-details p {
            color: #333; /* Darken the paragraph text on hover */
        }

        .hostel-card:hover .price-ribbon {
            background-color: #0056b3; /* Darken the price ribbon on hover */
        }
    </style>

    <!-- Main content -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
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
                            All Hostels
                        @endif
                    </h1>

                    <!-- Filter Buttons -->
                    <!-- Add your filter buttons here if needed -->

                    @if($hostels->isNotEmpty())
                        @foreach($hostels as $hostel)
                            <a href="{{ route('hostel-detail.show', $hostel->slug) }}" class="hostel-link">
                                <div class="row row-fixed hostel-card">
                                    <div class="price-ribbon">
                                        {{ $hostel->hostel_price }} Rs / month
                                    </div>
                                    <!-- Hostel Image -->
                                    <div class="hostel-image-container">
                                        @if($hostel->hostel_front_image)
                                            <img src="{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}" alt="Hostel Image">
                                        @else
                                            <p>No image available</p>
                                        @endif
                                    </div>

                                    <!-- Hostel Details -->
                                    <div class="hostel-details">
                                        <h5>{{ $hostel->hostel_name }}</h5>
                                        <p><strong>Detail:</strong> {{ $hostel->hostel_detail }}</p>
                                        <p>Average Rating: {{ round($hostel->reviews_avg_rating ?? 0, 1) ?: 'No ratings yet' }}</p>
                                        <p><strong>Number:</strong> {{ $hostel->owner_number }}</p>
                                        <p>{{ Str::limit($hostel->hostel_description, 150) }}</p>
                                    </div>

                                    <div class="category_verified_container">
                                        <p class="categoty_hostel">{{ $hostel->category_name }}</p>
                                        @if($hostel->is_verified)
                                            <img src="{{ asset('storage/verified_hostel/verified_tag.png') }}" class="verified_tag" alt="Verified Hostel">
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
                                        <a class="page-link" href="{{ $hostels->previousPageUrl() }}" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    @foreach ($hostels->links()->elements[0] as $page => $url)
                                        <li class="page-item{{ $page == $hostels->currentPage() ? ' active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                    <li class="page-item{{ !$hostels->hasMorePages() ? ' disabled' : '' }}">
                                        <a class="page-link" href="{{ $hostels->nextPageUrl() }}" aria-label="Next">
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
            </div>
        </div>
    </div>

    <script>
        function filterHostels(viewType) {
            const params = new URLSearchParams(window.location.search);
            let sortType = params.get('sort') || 'date'; // Default sort by date

          
           

            const url = `?view=${viewType}&sort=${sortType}`;
            window.location.href = url;
        }
    </script>

    @include('frontend.layouts.footer')
</body>
