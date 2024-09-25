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
                                                        <a
                                                            href="{{ url('all-hostels?category=' . urlencode($category->category_name)) }}">
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
                                                    <a href="#verified" data-toggle="tab" class="active">Verified
                                                        Hostels</a>
                                                </li>
                                                <li>
                                                    <a href="#featured" data-toggle="tab">Featured Hostels</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <!-- Verfied Hostels Tab -->
                                            <div id="verified" class="tab-pane fade active show">
                                                <div class="category-product-index owl-carousel owl-theme">
                                                    @foreach($verifiedHostels->take(5) as $hostel)
                                                        <div class="item text-center">
                                                            <div
                                                                class="product-miniature first-item js-product-miniature item-one">
                                                                <div class="image-container">
                                                                    <div class="price-ribbon">
                                                                        {{ $hostel->hostel_price }} Rs / month
                                                                    </div>
                                                                    <a
                                                                        href="{{ route('hostel-detail.show', $hostel->slug) }}">
                                                                        <img src="{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}"
                                                                            alt="Hostel Image">
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a
                                                                                href="{{ route('hostel-detail.show', $hostel->slug) }}">{{ $hostel->hostel_name }}</a>
                                                                        </div>
                                                                        <div class="product-title">

                                                                            {{ $hostel->category_name }}
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    <!-- View All Button as the 6th Item -->
                                                    @if($verifiedHostels->count() > 5)
                                                        <div class="item text-center">
                                                            <div
                                                                class="product-miniature first-item js-product-miniature item-one">
                                                                <div class="image-container">
                                                                    <div class="view-all-button"
                                                                        style="display: flex; align-items: center; justify-content: center; height: 100%; background-color: #f7f7f7;">
                                                                        <a href="{{ route('all-hostels') }}?view=verified-hostels"
                                                                            class="btn btn-primary">
                                                                            View All Verified Hostels
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <!-- Featured Hostels Tab -->
                                            <div id="featured" class="tab-pane fade">
                                                <div class="category-product-index owl-carousel owl-theme">
                                                    @foreach($featuredHostels->take(5) as $hostel)
                                                        <div class="item text-center">
                                                            <div
                                                                class="product-miniature first-item js-product-miniature item-one">
                                                                <div class="image-container">
                                                                    <div class="price-ribbon">
                                                                        {{ $hostel->hostel_price }} Rs / month
                                                                    </div>
                                                                    <a
                                                                        href="{{ route('hostel-detail.show', $hostel->slug) }}">
                                                                        <img src="{{ asset('storage/hostel_images/' . $hostel->hostel_front_image) }}"
                                                                            alt="Hostel Image">
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
                                                    <!-- View All Button as the 6th Item -->
                                                    @if($featuredHostels->count() > 5)
                                                        <div class="item text-center">
                                                            <div
                                                                class="product-miniature first-item js-product-miniature item-one">
                                                                <div class="image-container">
                                                                    <div class="view-all-button"
                                                                        style="display: flex; align-items: center; justify-content: center; height: 100%; background-color: #f7f7f7;">
                                                                        <a href="{{ route('all-hostels') }}?view=featured-hostel"
                                                                            class="btn btn-primary">
                                                                            View All Featured Hostels
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
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
                                                    <div class="filter-options">

                                                        <a href="{{ route('all-hostels') }}?view=best-hostels"
                                                            class="btn btn-primary">View All Best Hostels</a>
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
                    <!-- testimonial -->
                    <div class="section testimonial-block col-lg-12 col-xs-12">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="block">
                <div class="owl-carousel owl-theme testimonial-type-one">
                    @foreach ($feedbacks as $feedback)
                        <div class="item type-one d-flex align-items-center flex-column">
                            <div class="textimonial-image">
                                <i class="icon-testimonial"></i>
                            </div>
                            <div class="desc-testimonial">
                                <div class="testimonial-content">
                                    <div class="text">
                                        <p>"{{ $feedback->message }}"</p>
                                    </div>
                                </div>
                                <div class="testimonial-info">
                                    <h5 class="mt-0 box-info">{{ $feedback->name }}</h5>
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
                                            <a href="../blog_detail">Royal Boys Hostel in Bahawalpur</a>
                                        </div>
                                        <div class="post-desc">
                                            Best Boys Hostel in Bahawalpur ! Are you looking for a nice and safety
                                            hostel in Bahwalpur.
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
                                            <a href="../blog_detail">Manhas Hostel in Bahawalpur</a>
                                        </div>
                                        <div class="post-desc">
                                            furnished Light Hostel in Bahwalpur are you looking for safe and affordable
                                            price room..
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
  