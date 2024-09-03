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

    .categoty_hostel {
        width: auto;
        height: 10%;
        font-size: 1.3rem;
        font-weight: bold;
        color: #fff;
        background-color: #007bff;
        padding: 8px 16px;
        border-radius: 5px;
        display: inline-block;
        text-transform: uppercase;
        margin-bottom: 15px;
    }
    .verified_tag{
        
        width: 10%;
        height: 10%;
        margin-bottom: 15px;
    }
    </style>

    <!-- Main content -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <div class="container">
                    <h1 class="text-center mb-4">All Hostels</h1>

                    <!-- Filter Buttons -->
                    <div class="text-center mb-4">
                        <button class="btn btn-primary {{ $view == 'all' ? 'active' : '' }}" onclick="filterHostels('all')">All Hostels</button>
                        <button class="btn btn-secondary {{ $view == 'featured' ? 'active' : '' }}" onclick="filterHostels('featured')">Featured Hostels</button>
                        <button class="btn btn-info {{ $view == 'top-rated' ? 'active' : '' }}" onclick="filterHostels('top-rated')">Top Rated Hostels</button>
                        <button class="btn btn-success {{ $view == 'best' ? 'active' : '' }}" onclick="filterHostels('best')">Best Hostels</button>
                    </div>

                    @if($hostels->isNotEmpty())
                        @foreach($hostels as $hostel)
                            <div class="row row-fixed hostel-card">
                                <!-- Hostel Image -->
                                <div class="hostel-image-container">
                                    @if($hostel->hostel_front_image)
                                        <img src="{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}" alt="img">
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
                                <p class="categoty_hostel">{{ $hostel->category_name }}</p>
                                  <!-- Show verification image if hostel is verified -->
                                  @if($hostel->is_verified)
                                        <img src="{{ asset('storage/verified_hostel/verified_tag.png') }}" class="verified_tag" alt="Verified Hostel">
                                    @endif
                            </div>
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
        const sortType = params.get('sort') || 'date'; // Default sort by date
        const url = `?view=${viewType}&sort=${sortType}`;
        window.location.href = url;
    }
    </script>

    <!-- Footer -->
    @include('frontend.layouts.footer')
</body>
