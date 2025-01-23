@include('frontend.layouts.style')
<style>
    /* Styles for blog content links */
    .late-item a {
        color: blue;
        /* Change the color to blue */
        text-decoration: none;
        /* Remove underline from links */
    }

    .late-item a:hover {
        text-decoration: underline;
        /* Underline links on hover */
    }



    @media (max-width: 767px) {
        .best_hostels {
            display: none;
        }

        .sidebar-block {
            display: none;
        }

        .prev-btn,
        .next-btn {
            display: none;

        }
    }
</style>

<body id="blog-detail" class="blog">
    @include('frontend.layouts.header')
    <!-- main content -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <div id="main">
                    <div class="page-home">

                        <!-- breadcrumb -->

                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">




                                        <!-- recent posts -->
                                        <div class="sidebar-block">
                                            <div class="title-block">Recent Posts</div>
                                            <div class="post-item-content">
                                                @foreach ($recentBlogs as $recentBlogs)
                                                    <div>
                                                        <div class="late-item {{ $loop->first ? 'first-child' : '' }}">
                                                            <a
                                                                href="{{ route('blog-detail.show', $recentBlogs->blog_slug) }}">
                                                                <p class="content-title">{{ $recentBlogs->blog_title }}</p>
                                                            </a>
                                                            <span>
                                                                <i
                                                                    class="zmdi zmdi-comments"></i>{{ $recentBlogs->comments_count }}
                                                                comment
                                                            </span>
                                                            <span>
                                                                <i class="zmdi zmdi-calendar-note"></i>
                                                                {{ $recentBlogs->created_at->format('F d, Y') }}
                                                            </span>
                                                            <p class="description">
                                                                {!! Str::limit($recentBlogs->blog_content, 100) !!}</p>
                                                            <p class="remove">
                                                                <a
                                                                    href="{{ route('blog-detail.show', $recentBlogs->blog_slug) }}">READ
                                                                    MORE</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>


                                        <!-- product tag -->
                                        <div class="sidebar-block product-tags">
                                            <div class="title-block">
                                                Blog Tags
                                            </div>
                                            <div class="block-content">
                                                <ul class="listSidebarBlog list-unstyled">
                                                    @if($allTags->isNotEmpty())
                                                        @foreach($allTags as $tag)
                                                            <li>
                                                                <a href="{{ route('all-blog', ['tag' => $tag]) }}"
                                                                    title="Show posts matching tag {{ $tag }}">{{ ucfirst($tag) }}</a>
                                                            </li>
                                                        @endforeach
                                                    @else
                                                        <li>No tags available.</li>
                                                    @endif
                                            </div>
                                        </div>


                                        <!-- advertising -->
                                        <div class="sidebar-block group-image-special">

                                        </div>
                                    </div>


                                    <div class="col-sm-8 col-lg-9 col-md-9 flex-xs-first main-blogs">

                                        <h3>{{ $blog->blog_title }}</h3> <!-- Dynamic blog title -->

                                        <div class="hover-after">
                                            @if($blog->blog_image)
                                                <!-- Dynamically display blog image -->
                                                <img src="{{ $blog->blog_image }}" alt="{{ $blog->blog_title }}"
                                                    class="img-fluid" style="width: 100%; height: 500px;">
                                            @else
                                                <!-- Default image if no blog image exists -->
                                                <img src="/frontend/img/blog/default.jpg" alt="Default image"
                                                    class="img-fluid">
                                            @endif
                                        </div>

                                        <div class="late-item">
                                            <p>{!! $blog->blog_content !!}</p> <!-- Dynamic blog content -->
                                        </div>

                                        @php
                                            $relatedTags = $blog->blog_tags; // Assign blog tags to the variable
                                        @endphp

                                        <div class="related-tags">
                                            <h3>Related Tags</h3>
                                            <div class="block-content">
                                                <ul class="listSidebarBlog list-unstyled">
                                                    @if(!empty($relatedTags))
                                                        @foreach($relatedTags as $tag)
                                                            <li>
                                                                <a href="{{ route('all-blog', ['tag' => $tag]) }}"
                                                                    title="Show posts matching tag {{ $tag }}">{{ ucfirst($tag) }}</a>
                                                            </li>
                                                        @endforeach
                                                    @else
                                                        <li>No tags available.</li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>

                                        <style>
                                            .related-tags {
                                                margin-top: 20px;
                                            }

                                            .listSidebarBlog {
                                                display: flex;
                                                flex-wrap: wrap;
                                                gap: 8px;
                                                /* Space between items */
                                                padding: 0;
                                                margin: 0;
                                            }

                                            .listSidebarBlog li {
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                padding: 8px 12px;
                                                border: 1px solid #ddd;
                                                width: auto;
                                                /* Adjust width based on content */
                                                transition: background-color 0.3s ease, color 0.3s ease;
                                            }

                                            .listSidebarBlog li:hover {
                                                background-color: #000;
                                                color: #fff;
                                            }

                                            .listSidebarBlog li a {
                                                color: inherit;
                                                text-decoration: none;
                                                text-align: center;
                                            }

                                            .listSidebarBlog li a:hover {
                                                color: #fff;
                                            }
                                        </style>




                                    </div>




                                    <!-- recent posts -->
                                    <div class="container">
                                        <div class="section recent-post">
                                            <div class="title-block">RECENT Blogs</div>
                                            <style>
                                                .recent-blog {

                                                    border: 2px solid #ddd;
                                                    border-radius: 8px;
                                                    padding: 16px;
                                                    margin: 20px 0;
                                                    background-color: #f9f9f9;
                                                    position: relative;
                                                }
                                            </style>
                                            <div class="recent-blog">
                                                <div class="row">
                                                    <div class="category-product-index owl-carousel owl-theme">
                                                        @foreach($relatedBlogs as $relatedBlogs)
                                                            <div class="item text-center">
                                                                <div
                                                                    class="product-miniature first-item js-product-miniature item-one">
                                                                    <div class="image-container">
                                                                        <a
                                                                            href="{{ route('blog-detail.show', $relatedBlogs->blog_slug) }}">
                                                                            <img src="{{ $relatedBlogs->blog_image }}"
                                                                                alt="img">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a
                                                                                    href="{{ route('blog-detail.show', $relatedBlogs->blog_slug) }}">{{ $relatedBlogs->blog_title }}</a>
                                                                            </div>
                                                                            <div class="post-info">

                                                                                <span class="datetime">
                                                                                    <i class="fa fa-calendar"
                                                                                        aria-hidden="true"></i>
                                                                                    <span>{{ \Carbon\Carbon::parse($relatedBlogs->created_at)->format('F j, Y') }}</span>
                                                                                </span>
                                                                            </div>
                                                                            <div class="post-desc">
                                                                                {{ $relatedBlogs->excerpt }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- footer -->
    @include('frontend.layouts.footer')