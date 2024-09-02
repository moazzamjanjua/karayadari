@include('frontend.layouts.style')

<body id="contact" class="all-hostels">
    @include('frontend.layouts.header')

    <style>
       
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        padding: 2rem;
    }

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
        border-radius: 8px;
        margin-right: 20px;
        flex-shrink: 0;
    }

    .hostel-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
    }

    .hostel-details {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .hostel-details h5 {
        margin: 0;
        font-size: 1.25rem;
        color: #343a40;
    }

    .hostel-details p {
        margin: 0.5rem 0;
        color: #6c757d;
        line-height: 1.5;
    }

    .rating-stars {
        color: #ffc107;
        font-size: 1.2rem;
    }

    .btn-sort {
        margin-bottom: 1.5rem;
        font-size: 1rem;
        color: #007bff;
        cursor: pointer;
        background: none;
        border: none;
        outline: none;
    }

    .btn-sort:hover {
        text-decoration: underline;
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


    /* Styling remains the same as before */
    .btn-sort {
        margin-bottom: 1.5rem;
        font-size: 1rem;
        color: #007bff;
        cursor: pointer;
        background: none;
        border: none;
        outline: none;
    }

    .btn-sort:hover {
        text-decoration: underline;
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
</style>

<!-- Main content -->
<div id="wrapper-site">
    <div id="content-wrapper" class="full-width">
        <div id="main">
            <div class="container">
                <h1 class="text-center mb-4">All Hostels</h1>

                <!-- Sorting Buttons -->
                <div class="text-center">
                    <button class="btn-sort" onclick="sortHostels('rating')">Sort by Rating</button>
                    <button class="btn-sort" onclick="sortHostels('date')">Sort by Date</button>
                </div>

                @if($hostels->isNotEmpty())
                    @foreach($hostels as $hostel)
                        <div class="row row-fixed hostel-card">
                            <!-- Hostel Image -->
                            <div class="hostel-image-container">
                                @if($hostel->hostel_front_image)
                                <img src="{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}"
                                alt="img">                                       >
                                @else
                                    <p>No image available</p>
                                @endif
                            </div>

                            <!-- Hostel Details -->
                            <div class="hostel-details">
                                <h5>{{ $hostel->hostel_name }}</h5>
                                <p><strong>Detail:</strong> {{ $hostel->hostel_detail }}</p>
                                <p><strong>Category:</strong> {{ $hostel->category_name }}</p>
                                <p><strong>Address:</strong> {{ $hostel->hostel_address }}</p>
                                <p><strong>Number:</strong> {{ $hostel->owner_number }}</p>
                                <p>{{ Str::limit($hostel->hostel_description, 150) }}</p>
                                <p class="rating-stars">
                                    @for($i = 0; $i < $hostel->rating; $i++)
                                        &#9733; <!-- Star Icon -->
                                    @endfor
                                    @for($i = $hostel->rating; $i < 5; $i++)
                                        &#9734; <!-- Empty Star Icon -->
                                    @endfor
                                </p>
                            </div>
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
    function sortHostels(sortType) {
        // Redirect to the same page with the chosen sort parameter
        window.location.href = '?sort=' + sortType;
    }
</script>

    <!-- Footer -->
    @include('frontend.layouts.footer')
</body>
