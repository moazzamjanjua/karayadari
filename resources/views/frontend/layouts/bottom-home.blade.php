<!-- main -->
<div id="wrapper-site">
    <div id="content-wrapper" class="full-width">
        <div id="main">
            <section class="page-home">
                <div class="container">
                </div>
                <!-- product living room -->
                <div class="section living-room">
                    <div class="container">
                        <div class="tiva-row-wrap row">
                            <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                <div class="grouptab row">

                                    <div
                                        class="categoriestab-right col-lg-3 align-items-start d-flex flex-column col-md-3 flex-3">
                                        <div class="block-title-content">
                                            <h2 class="title-block">
                                                Categories
                                            </h2>
                                        </div>
                                        <!-- <div class="btn dropdown-toggle toggle-cate-child-vertical hidden-md-up mr-auto">Select category</div> -->

                                        @foreach($categories as $category)
                                            <div class="cate-child-vertical">
                                                <ul class="d-flex align-items-start flex-column">

                                                    <li>
                                                        <a href="{{ url('room-detail/' . $category->category_name) }}">
                                                            <h6>{{ $category->category_name }}</h6>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>


                                        @endforeach
                                    </div>
                                    <div class="categoriestab-left product-tab col-md-9 flex-9">
                                        <div class="title-tab-content d-flex justify-content-start">
                                            <ul class="nav nav-tabs">
                                                <li>
                                                    <a href="#toprated" data-toggle="tab" class="active">Top Rated
                                                        Hostels</a>
                                                </li>
                                                <li>
                                                    <a href="#featured" data-toggle="tab">Featured Hostels</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div id="toprated" class="tab-pane fade in active show">


                                                <div class="category-product-index owl-carousel owl-theme">
                                                    @foreach($topRatedHostels as $hostel)
                                                        <div class="item text-center">
                                                            <div
                                                                class="product-miniature first-item js-product-miniature item-one">

                                                                <div class="image-container">
                                                                    <div class="price-ribbon">
                                                                        {{$hostel->hostel_price}} Rs / month
                                                                    </div>
                                                                    <a
                                                                        href="{{ route('hostel-detail.show', $hostel->slug) }}">
                                                                        <img src="{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}"
                                                                            alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a
                                                                                href="{{ route('hostel-detail.show', $hostel->slug) }}">{{ $hostel->hostel_name }}</a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <div class="star-content">
                                                                                @for($i = 0; $i < 5; $i++)
                                                                                    <div
                                                                                        class="star{{ $i < $hostel->rating ? ' filled' : '' }}">
                                                                                    </div>
                                                                                @endfor
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>



                                            </div>

                                            <div class="tab-pane fade" id="featured">
                                                <div class="category-product-index owl-carousel owl-theme">
                                                    @foreach($featuredHostels as $hostel)
                                                        <div class="item text-center">
                                                            <div
                                                                class="product-miniature first-item js-product-miniature item-one">
                                                                <div class="image-container">
                                                                <div class="price-ribbon">
                                                                        {{$hostel->hostel_price}} Rs / month
                                                                    </div>
                                                                    <a
                                                                        href="{{ route('hostel-detail.show', $hostel->slug) }}">
                                                                        <img src="{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}"
                                                                            alt="img">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a
                                                                                href="{{ route('hostel-detail.show', $hostel->id) }}">{{ $hostel->hostel_name }}</a>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <div class="star-content">
                                                                                @for($i = 0; $i < 5; $i++)
                                                                                    <div
                                                                                        class="star{{ $i < $hostel->rating ? ' filled' : '' }}">
                                                                                    </div>
                                                                                @endfor
                                                                            </div>
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

                    <div class="container">
                        <!-- banner -->
                        <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid" src="/frontend/img/home/effect1.jpg" alt="banner-1"
                                                title="banner-1">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid" src="/frontend/img/home/effect2.jpg" alt="banner-2"
                                                title="banner-2">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- best Hostels -->
                        <div class="section best-sellers col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="groupproductlist">
                                        <div class="row d-flex align-items-center">
                                            <!-- column 4 -->
                                            <div class="flex-4 col-lg-4 flex-4">
                                                <br>
                                                <br>
                                                <h2 class="title-block">
                                                    <span class="sub-title">Best Hostels</span>Best Hostels
                                                </h2>
                                                <div class="content-text">
                                                    <p>Here is the list of best hostels</p>
                                                    <div>
                                                        <a href="product-grid-sidebar-left.html"> View all Best </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- column 8 -->
                                            <div class="block-content col-lg-8 flex-8">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active show">
                                                        <div class="row">
                                                            @foreach($bestHostels as $index => $hostel)
                                                                    <!-- Start a new row after every 3 hostels -->
                                                                    @if($index % 3 === 0 && $index !== 0)
                                                                        </div>
                                                                        <div class="row">
                                                                    @endif
                                                                    <div class="col-lg-4 col-md-6 text-center">
                                                                        <div
                                                                            class="product-miniature js-product-miniature item-one first-item">
                                                                            <div class="best_image-container">
                                                                            <div class="price-ribbon">
                                                                        {{$hostel->hostel_price}} Rs / month
                                                                    </div>

                                                                                <a
                                                                                    href="{{ route('hostel-detail.show', $hostel->slug) }}">
                                                                                    <img src="{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}"
                                                                                        alt="img">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-title">
                                                                                        <a
                                                                                            href="{{ route('owner.hostel.show', $hostel->id) }}">{{ $hostel->hostel_name }}</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            @endforeach
                                                        </div> <!-- End of row -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>




                    <!-- banner -->
                    <div class="container">


                        <!-- testimonial -->
                        <div class="section testimonial-block col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 ">
                                    <div class="block">
                                        <div class="owl-carousel owl-theme testimonial-type-one">
                                            <div class="item type-one d-flex align-items-center flex-column">
                                                <div class="textimonial-image">
                                                    <i class="icon-testimonial"></i>
                                                </div>
                                                <div class="desc-testimonial">
                                                    <div class="testimonial-content">
                                                        <div class="text">
                                                            <p>"Living in a hostel is about finding a community that
                                                                becomes your family,
                                                                growing through shared struggles and triumphs, and
                                                                building lifelong memories
                                                                of camaraderie and independence."</p>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-info">
                                                        <h5 class="mt-0 box-info">MOAZZAM HUSSAIN</h5>
                                                        <p class="box-dress">FULL STACK DEVELOPER</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item type-one d-flex align-items-center flex-column">
                                                <div class="textimonial-image">
                                                    <i class="icon-testimonial"></i>
                                                </div>
                                                <div class="desc-testimonial">
                                                    <div class="testimonial-content">
                                                        <div class="text">
                                                            <p>" Living in a hostel is about finding a community that
                                                                becomes your family,
                                                                growing through shared struggles and triumphs, and
                                                                building lifelong memories
                                                                of camaraderie and independence. "</p>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-info">
                                                        <h5 class="mt-0 box-info">JAWAD AHMAD</h5>
                                                        <p class="box-dress">FRONT-DEVELOPER</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item type-one d-flex align-items-center flex-column">
                                                <div class="textimonial-image">
                                                    <i class="icon-testimonial"></i>
                                                </div>
                                                <div class="desc-testimonial">
                                                    <div class="testimonial-content">
                                                        <div class="text">
                                                            <p>" Hostel life fosters independence and personal growth,
                                                                teaching valuable life skills and resilience through
                                                                shared experiences "</p>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-info">
                                                        <h5 class="mt-0 box-info">SHEHZAD ASLAM</h5>
                                                        <p class="box-dress">MARKET MANAGER</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item type-one d-flex align-items-center flex-column">
                                                <div class="textimonial-image">
                                                    <i class="icon-testimonial"></i>
                                                </div>
                                                <div class="desc-testimonial">
                                                    <div class="testimonial-content">
                                                        <div class="text">
                                                            <p>" Experience the vibrant community and dynamic
                                                                environment of hostel living, where every day is a new
                                                                adventure. "</p>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-info">
                                                        <h5 class="mt-0 box-info">MUZAMIL HUSSAIN</h5>
                                                        <p class="box-dress">APP DEVELOPER</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SHOP THE LOOK -->
                    <div class="section spacing-10 groupbanner-special ">
                        <div class="title-block">
                            <span class="sub-title">shop the lookbook</span>
                            <span>FIND BEST ROOMS</span>
                            <span>Our Lookbook 2018
                                <br> hand-picked arrivals from
                                <br>the best designer</span>
                        </div>

                        <div class="row">
                            <div class="tiva-lookbook default col-lg-6 col-md-6 col-xs-12">
                                <div class="row">
                                    <div class="items col-lg-12 col-sm-12 col-xs-12">
                                        <div class="tiva-content-lookbook">
                                            <img class="img-fluid img-responsive"
                                                src="/frontend/img/home/home1-tolltip1.jpg" alt="lookbook">

                                            <div class="item-lookbook item1">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="../room-detail">
                                                                <img src="/frontend/img/home/icon-tolltip2.jpg"
                                                                    alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="../room-detail">Lorem ipsum dolor</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                £52.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="../room-detail">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item2">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="../room-detail">
                                                                <img src="/frontend/img/home/icon-tolltip1.jpg"
                                                                    alt="contrary-to-popular-belief">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="../room-detail">Sed vel malesuada lorem</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                £68.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="../room-detail">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Module Lookbooks -->
                            <div class="tiva-lookbook default  col-lg-6 col-md-6 col-xs-12">
                                <div class="row">
                                    <div class="items col-lg-12 col-sm-12 col-xs-12">
                                        <div class="tiva-content-lookbook">
                                            <img class="img-fluid img-responsive"
                                                src="/frontend/img/home/home1-tolltip2.jpg" alt="lookbook">

                                            <div class="item-lookbook item3">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="../room-detail">
                                                                <img src="/frontend/img/product/34.jpg"
                                                                    alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="../room-detail">Lorem ipsum dolor sit</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                £45.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="../room-detail">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item4">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="../room-detail">
                                                                <img src="/frontend/img/home/icon-tolltip6.jpg"
                                                                    alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="../room-detail">Lorem ipsum dolor</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                £21.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="../room-detail">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item5">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="../room-detail">
                                                                <img src="/frontend/img/home/icon-tolltip4.jpg"
                                                                    alt="mug-the-adventure-begins">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="../room-detail">Sed vel malesuada lorem</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                £11.90
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="../room-detail">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-lookbook">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Module Lookbooks -->
                            <div class="tiva-lookbook default  col-lg-6 col-md-6 col-xs-12">
                                <div class="row">
                                    <div class="items col-lg-12 col-sm-12 col-xs-12">
                                        <div class="tiva-content-lookbook">
                                            <img class="img-fluid img-responsive"
                                                src="/frontend/img/home/home1-tolltip3.jpg" alt="lookbook">

                                            <div class="item-lookbook item6">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="../room-detail">
                                                                <img src="/frontend/img/home/icon-tolltip4.jpg"
                                                                    alt="mug-the-adventure-begins">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="../room-detail">Sed vel malesuada lorem</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                £11.90
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="../room-detail">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item7">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="../room-detail">
                                                                <img src="/frontend/img/product/13.jpg"
                                                                    alt="brown-bear-vector-graphics">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="../room-detail">Orci varius natoque
                                                                    penatibus</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                £9.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="../room-detail">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item8">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="../room-detail">
                                                                <img src="/frontend/img/home/icon-tolltip6.jpg"
                                                                    alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="../room-detail">Etiam congue nisl nec</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                £16.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="../room-detail">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info-lookbook">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Module Lookbooks -->
                            <div class="tiva-lookbook default  col-lg-6 col-md-6 col-xs-12">
                                <div class="row">
                                    <div class="items col-lg-12 col-sm-12 col-xs-12">
                                        <div class="tiva-content-lookbook">
                                            <img class="img-fluid img-responsive"
                                                src="/frontend/img/home/home1-tolltip4.jpg" alt="lookbook">

                                            <div class="item-lookbook item9">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="../room-detail">
                                                                <img src="/frontend/img/home/icon-tolltip10.jpg"
                                                                    alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="../room-detail">Nam semper a ligula nec</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                £41.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="../room-detail">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item10">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="../room-detail">
                                                                <img src="/frontend/img/home/icon-tolltip8.jpg"
                                                                    alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="../room-detail">Donec accumsan lectus ut</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                £11.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="../room-detail">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item11">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="../room-detail">
                                                                <img src="/frontend/img/home/icon-tolltip9.jpg"
                                                                    alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="../room-detail">Fusce quis felis libero</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-price">
                                                                £11.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="../room-detail">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info-lookbook">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- recent posts -->
                    <div class="container">
                        <div class="section recent-post">
                            <div class="title-block">RECENT POST</div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="item-post">
                                        <div class="thumbnail-img">
                                            <a href="../blog_detail">
                                                <img src="/frontend/img/home/home1-post1.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-info">
                                                <span class="comment">
                                                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                    <span>0 Comments</span>
                                                </span>
                                                <span class="datetime">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <span>June 12, 2024</span>
                                                </span>
                                            </div>
                                            <div class="post-title">
                                                <a href="../blog_detail">Usman Hostel University Chowk Bahawalpur</a>
                                            </div>
                                            <div class="post-desc">
                                                Discover comfort and convenience at Usman Hostel, located near
                                                University Chowk in Bahawalpur. Experience hassle-free student living
                                                with furnished rooms and easy access to campus amenities.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item-post">
                                        <div class="thumbnail-img">
                                            <a href="../blog_detail">
                                                <img src="/frontend/img/home/home1-post2.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-info">
                                                <span class="comment">
                                                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                    <span>0 Comments</span>
                                                </span>
                                                <span class="datetime">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <span>April 12, 2018</span>
                                                </span>
                                            </div>
                                            <div class="post-title">
                                                <a href="../blog_detail">Lorem ipsum dolor sit amet</a>
                                            </div>
                                            <div class="post-desc">
                                                Lorem ipsum dolor sit amet, consecte adipis cing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item-post">
                                        <div class="thumbnail-img">
                                            <a href="../blog_detail">
                                                <img src="/frontend/img/home/home1-post3.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-info">
                                                <span class="comment">
                                                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                    <span>0 Comments</span>
                                                </span>
                                                <span class="datetime">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <span>April 12, 2018</span>
                                                </span>
                                            </div>
                                            <div class="post-title">
                                                <a href="../blog_detail">Lorem ipsum dolor sit amet</a>
                                            </div>
                                            <div class="post-desc">
                                                Lorem ipsum dolor sit amet, consecte adipis cing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>
</div>

<!-- footer -->
@include('frontend.layouts.footer')
  