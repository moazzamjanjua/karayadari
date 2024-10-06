@include('frontend.layouts.style')

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

                                        <!-- category -->
                                        <div class="sidebar-block">
                                            <div class="title-block">Categories</div>
                                            <div class="block-content">
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapse-icons collapsed" data-toggle="collapse" data-target="#livingroom" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Living Room</a>
                                                    <div class="subCategory collapse" id="livingroom" aria-expanded="true" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">Side Table</a>
                                                            <div class="subCategory collapse" id="subCategory-fruits" aria-expanded="true" role="status">
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">Side Table</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">FIREPLACE</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">floor lamp</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">ottoman</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">armchair</a>
                                                                </div>
                                                                <div class="cateTitle">
                                                                    <a href="#" class="cateItem">cushion</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">FIREPLACE</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">FIREPLACE</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">floor lamp</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">ottoman</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">armchair</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">cushion</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bathroom" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Bathroom</a>
                                                    <div class="subCategory collapse" id="bathroom" aria-expanded="false" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">TOMATO</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">BROCCOLI</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">CABBAGE</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">CUCUMBER</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">EGGPLANT</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#diningroom" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Dining Rooom</a>
                                                    <div class="subCategory collapse" id="diningroom" aria-expanded="true" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">DRY BREAD</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">BREAD SLICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">FRENCH BREAD</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">BLACK BREAD</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bedroom" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Bedroom</a>
                                                    <div class="subCategory collapse" id="bedroom" aria-expanded="true" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">ORANGE JUICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">TOMATO JUICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">APPLE JUICES</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#kitchen" aria-expanded="false" role="status">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Kitchen</a>
                                                    <div class="subCategory collapse" id="kitchen" aria-expanded="true" role="status">
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">ORANGE JUICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">TOMATO JUICES</a>
                                                        </div>
                                                        <div class="cateTitle">
                                                            <a href="#" class="cateItem">APPLE JUICES</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- recent posts -->
                                        <div class="sidebar-block">
                                            <div class="title-block">Recent Posts</div>
                                            <div class="post-item-content">
                                                <div>
                                                    <div class="late-item first-child">
                                                        <a href="../blog_detail">
                                                            <p class="content-title">Usman Hostel University Chowk Bahawalpur</p>
                                                        </a>
                                                        <span>
                                                            <i class="zmdi zmdi-comments"></i>13 comment</span>
                                                        <span>
                                                            <i class="zmdi zmdi-calendar-note"></i> APRIl,10 2024
                                                        </span>
                                                        <p class="description">Discover comfort and convenience at Usman Hostel, located near University Chowk...
                                                        </p>
                                                        <p class="remove">
                                                            <a href="blog-detail.html">READ MORE</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="late-item">
                                                        <a href="blog-detail.html">
                                                            <p class="content-title">Usman Hostel University Chowk Bahawalpur</p>
                                                        </a>
                                                        <span>
                                                            <i class="zmdi zmdi-comments"></i>13 comment</span>
                                                        <span>
                                                            <i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017
                                                        </span>
                                                        <p class="description">Discover comfort and convenience at Usman Hostel, located near University Chowk ...
                                                        </p>
                                                        <p class="remove">
                                                            <a href="blog-detail.html">READ MORE</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- product tag -->
                                        <div class="sidebar-block product-tags">
    <div class="title-block">
        Blog Tags
    </div>
    <div class="block-content">
        <ul class="listSidebarBlog list-unstyled">
            <li>
                <a href="#" title="Show posts matching tag Usman Hostel">Usman Hostel</a>
            </li>
            <li>
                <a href="#" title="Show posts matching tag University Life">Hostel Life</a>
            </li>
            <li>
                <a href="#" title="Show posts matching tag Student Accommodation">Student Accommodation</a>
            </li>
            <li>
                <a href="#" title="Show posts matching tag Community Events">Community Events</a>
            </li>
            <li>
                <a href="#" title="Show posts matching tag Academic Success">Academic Success</a>
            </li>
            <li>
                <a href="#" title="Show posts matching tag Safety and Security">Safety and Security</a>
            </li>
            <li>
                <a href="#" title="Show posts matching tag Modern Amenities">Modern Amenities</a>
            </li>
            <li>
                <a href="#" title="Show posts matching tag Student Life">Student Life</a>
            </li>
            <li>
                <a href="#" title="Show posts matching tag Comfortable Living">Comfortable Living</a>
            </li>
            <li>
                <a href="#" title="Show posts matching tag Convenient Location">Convenient Location</a>
            </li>
            <li>
                <a href="#" title="Show posts matching tag Friendly Community">Friendly Community</a>
            </li>
        </ul>
    </div>
</div>


                                        <!-- advertising -->
                                        <div class="sidebar-block group-image-special">
                                            <div class="effect">
                                                <a href="#">
                                                    <img class="img-fluid" src="/frontend/img/blog/advertising.jpg" alt="banner-2" title="banner-2">
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-8 col-lg-9 col-md-9 flex-xs-first main-blogs">
                                    <h3>{{ $blog->blog_title }}</h3> <!-- Title dynamic -->

<div class="hover-after">
    @if($blog->blog_image)
        <!-- Image dynamically display -->
        <img src="{{ asset('storage/blog_images/' . $blog->blog_image) }}" alt="{{ $blog->blog_title }}" class="img-fluid" style="width: 100%; height: 400px;">
    @else
        <!-- Default image agar blog image na ho -->
        <img src="/frontend/img/blog/default.jpg" alt="Default image" class="img-fluid">
    @endif
</div>

<div class="late-item">
    <p>{{ $blog->blog_content }}</p> <!-- Full content display -->

    <div class="border-detail">
        <p class="post-info float-left">
            <span>{{ $blog->created_at->diffForHumans() }}</span> <!-- Created time -->
            <span>{{ $blog->comments_count ?? 0 }} Comments</span> <!-- Comments count dynamic -->
            <span>{{ $blog->author ?? 'Anonymous' }}</span> <!-- Author dynamic -->
        </p>
        <div class="btn-group">
            <a href="#">
                <i class="zmdi zmdi-share"></i>
                <span>Share</span>
            </a>
            <a href="#" class="email">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>SEND TO A FRIEND</span>
            </a>
            <a href="#" class="print">
                <i class="zmdi zmdi-print"></i>
                <span>Print</span>
            </a>
        </div>
    </div>
</div>

    <div class="admin">
        <img src="/frontend/img/blog/user.jpg" alt="img" class="float-left right">
        <div class="info">
            <p>
                <a href="#">
                    <span class="content-title">
                        John Doe
                    </span>
                </a>
                <span>Administrator, Web Designer</span>
            </p>
            <p class="descript">
                John Doe has years of experience in web design and administration, ensuring the Usman Hostel website runs smoothly and efficiently.
            </p>
        </div>
    </div>
    <div class="related">
        <h2 class="title-block">Related News</h2>
        <div class="main-blogs">
            <div class="row">
                <div class="col-md-4">
                    <div class="hover-after">
                        <a href="blog-detail.html">
                            <img src="/frontend/img/blog/7.jpg" alt="img" class="img-fluid">
                        </a>
                    </div>
                    <div class="late-item">
                        <p class="content-title">
                            <a href="blog-detail.html">New Facilities at Usman Hostel</a>
                        </p>
                        <p class="description">Discover the latest additions to our hostel, designed to enhance your living experience.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hover-after">
                        <a href="blog-detail.html">
                            <img src="/frontend/img/blog/8.jpg" alt="img" class="img-fluid">
                        </a>
                    </div>
                    <div class="late-item">
                        <p class="content-title">
                            <a href="blog-detail.html">Student Success Stories</a>
                        </p>
                        <p class="description">Read about how living at Usman Hostel has helped students achieve their academic goals.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hover-after">
                        <a href="blog-detail.html">
                            <img src="/frontend/img/blog/9.jpg" alt="img" class="img-fluid">
                        </a>
                    </div>
                    <div class="late-item">
                        <p class="content-title">
                            <a href="blog-detail.html">Community Events at Usman Hostel</a>
                        </p>
                        <p class="description">Join our exciting community events and make lasting memories with fellow students.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reply late-item">
        <div class="blog-comment" id="blog-comment">
            <h2 class="title-block">Comments</h2>
            <img src="/frontend/img/blog/user1.jpg" alt="img" class="float-left right">
        </div>
        <div class="comment-content">
            <p class="user-title">
                <a href="#">John Doe</a>
                <span class="time">Posted on Mar 17, 2017 at 6:57am /
                    <a href="#">repost</a> /
                    <span class="green">
                        <a href="#">Reply</a>
                    </span>
                </span>
            </p>
            <p class="content-comment">Usman Hostel has been an incredible place to stay. The facilities are top-notch, and the community is very welcoming.
            </p>
        </div>
        <div class="blog-comment margin-right-comment">
            <div class="avatar">
                <img src="/frontend/img/blog/user2.jpg" alt="img" class="float-left">
            </div>
            <div class="comment-content">
                <p class="user-title">
                    <a href="#">Jane Smith</a>
                    <span class="time">Posted on Mar 17, 2017 at 6:57am /
                        <a href="#">repost</a> /
                        <span class="green">
                            <a href="#">Reply</a>
                        </span>
                    </span>
                </p>
                <p class="content-comment">Living at Usman Hostel has greatly improved my university experience. I highly recommend it to all students.
                </p>
            </div>
        </div>
        <div class="blog-comment">
            <div class="avatar">
                <img src="/frontend/img/blog/user1.jpg" alt="img" class="float-left right">
            </div>
            <div class="comment-content">
                <p class="user-title">
                    <a href="#">Mark Johnson</a>
                    <span class="time">Posted on Mar 17, 2017 at 6:57am /
                        <a href="#">repost</a> /
                        <span class="green">
                            <a href="#">Reply</a>
                        </span>
                    </span>
                </p>
                <p class="content-comment">Usman Hostel provides a perfect balance of comfort and convenience. The staff is friendly and always ready to help.
                </p>
            </div>
        </div>
    </div>
    <div class="submit-comment" id="respond">
        <h2 class="title-block">Submit comment</h2>
        <div id="commentInput">
            <form action="#" method="post" id="commentform">
                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                <div class="row">
                    <div class="form-group col col-sm-12 col-md-4 ">
                        <input type="text" class="inputName form-control" name="name" placeholder="Your Name *">
                    </div>
                    <div class="form-group col col-sm-12  col-md-4">
                        <input type="text" class="inputMail form-control" name="mail" placeholder="Your E-mail *">
                    </div>
                    <div class="form-group col col-sm-12  col-md-4">
                        <input type="text" class="form-control" name="website" placeholder="Your Website">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col col-md-12">
                        <textarea tabindex="4" class="inputContent form-control grey" rows="10" name="comment" placeholder="Your Message"></textarea>
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" name="addComment" id="submitComment" class="btn btn-default" value="Send Message">
                </div>
            </form>
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