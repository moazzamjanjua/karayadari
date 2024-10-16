@include('frontend.layouts.style')  
<body id="contact" class="all-hostels">
    @include('frontend.layouts.header')

    <style>
        .blog-image-container {
            width: 100%;
            max-width: 300px;
            height: 200px;
            overflow: hidden;
            margin-right: 20px;
            position: relative;
            flex-shrink: 0;
        }

        .blog-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .blog-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            
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

        .category_blog {
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

        .blog-card {
            display: flex;
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .blog-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .blog-card:hover .blog-details h5 {
            color: #007bff;
        }

        .blog-card:hover .blog-details p {
            color: #333;
        }

        @media (max-width: 767px) {
            .blog-details {
                width: 100%;
            }
        }
    </style>

    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <div class="container">
                    {{-- @include('frontend.layouts.nav-bar') --}}

                    @php
                        $view = request('view', 'all');
                        $selectedCategory = request('category');
                    @endphp

                    <h1 class="text-center mb-4">
                        @if($view === 'featured-blogs')
                            All Featured Blogs ({{ $blogs->total() }})
                        @elseif($view === 'verified-blogs')
                            Verified Blogs ({{ $blogs->total() }})
                        @elseif($view === 'best-blogs')
                            Best Blogs ({{ $blogs->total() }})
                        @elseif($selectedCategory)
                            All {{ $selectedCategory }} Blogs ({{ $blogs->total() }})
                        @else
                            All Blogs
                        @endif
                    </h1>

                    @if($blogs->isNotEmpty())
                        @foreach($blogs as $blog)
                        <a href="{{ route('blog-detail.show', $blog->blog_slug) }}" class="blog-link">
                        <div class="row blog-card">
                                    <!-- Blog Image -->
                                    <div class="blog-image-container">
                                        @if($blog->blog_image)
                                            <img src="{{ asset('storage/blog_images/' . $blog->blog_image) }}" alt="Blog Image">
                                        @else
                                            <p>No image available</p>
                                        @endif
                                    </div>

                                    <!-- Blog Details -->
                                    <div class="blog-details">
                                        <h5>{{ $blog->blog_title }}</h5>
                                        <p><strong>Detail:</strong> {{ explode('.', $blog->blog_content)[0] }}....<strong style="color:red">See More</strong></p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <p class="text-center">No blogs found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        function filterBlogs(viewType) {
            const params = new URLSearchParams(window.location.search);
            let sortType = params.get('sort') || 'date'; // Default sort by date
            const url = `?view=${viewType}&sort=${sortType}`;
            window.location.href = url;
        }
    </script>

    @include('frontend.layouts.footer')
</body>
