
@include('frontend.layouts.style')

<body id="home">
   
@include('frontend.layouts.header')

    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">
            <!-- menu category -->
            <div class="container position">
                <div class="section menu-banner d-xs-none">
                    <div class="tiva-verticalmenu block">
                        <div class="box-content">
                            <div class="verticalmenu" role="navigation">
                                <ul class="menu level1">
                                    <li class="item">
                                  @foreach($categories as $category)
                                        <a href="#" class="hasicon">
                                            <img src="/frontend/img/home/table-lamp.png" alt="img">{{ $category->category_name }}</a>
                                            @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slide show -->
            <div class="section banner">
                <div class="tiva-slideshow-wrapper">
                    <div id="tiva-slideshow" class="nivoSlider">
                        <a href="#">
                            <img class="img-responsive" src="/frontend/img/home/home1-banner1.jpg" title="#caption1" alt="Slideshow image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="/frontend/img/home/home1-banner2.jpg" title="#caption2" alt="Slideshow image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="/frontend/img/home/home1-banner3.jpg" title="#caption3" alt="Slideshow image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <section class="page-home">
                        <div class="container">

                            <!-- delivery form -->
                            <div class="section policy-home col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="block">
                                            <div class="block-content">
                                                <div class="policy-item">
                                                    <div class="policy-content iconpolicy1">
                                                        <img src="/frontend/img/home/home1-policy.png" alt="img">
                                                        <div class="policy-name mb-5">FREE DELIVERY FROM $ 250</div>
                                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tiva-html col-lg-4 col-md-4">
                                        <div class="block">
                                            <div class="block-content">
                                                <div class="policy-item">
                                                    <div class="policy-content iconpolicy2">
                                                        <img src="/frontend/img/home/home1-policy2.png" alt="img">
                                                        <div class="policy-name mb-5">FREE INSTALLATION</div>
                                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tiva-html col-lg-4 col-md-4">
                                        <div class="block">
                                            <div class="block-content">
                                                <div class="policy-item">
                                                    <div class="policy-content iconpolicy3">
                                                        <img src="/frontend/img/home/home1-policy3.png" alt="img">
                                                        <div class="policy-name mb-5">MONEY BACK GUARANTEED</div>
                                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- product living room -->
                        <div class="section living-room">
                            <div class="container">
                                <div class="tiva-row-wrap row">
                                    <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                        <div class="grouptab row">
                                            <div class="categoriestab-right col-lg-3 align-items-start d-flex flex-column col-md-3 flex-3">
                                                <div class="block-title-content">
                                                    <h2 class="title-block">
                                                        Living Room
                                                    </h2>
                                                </div>
                                                <!-- <div class="btn dropdown-toggle toggle-cate-child-vertical hidden-md-up mr-auto">Select category</div> -->
                                                <div class="cate-child-vertical">
                                                    <ul class="d-flex align-items-start flex-column">
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">SIDE TABLE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">FIREPLACE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">FLOOR LAMP</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">OTTOMAN</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">ARMCHAIR</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">CUSHION</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">DRESSING TABLE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">WALL CLOCK</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">BEDSIDE TABLE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">PICTURE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">WINDOW</a>
                                                        </li>
                                                        <li class="last float-right">
                                                            <a href="product-grid-sidebar-left.html">View all</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="categoriestab-left product-tab col-md-9 flex-9">
                                                <div class="title-tab-content d-flex justify-content-start">
                                                    <ul class="nav nav-tabs">
                                                        <li>
                                                            <a href="#new" data-toggle="tab" class="active">New Arrivals</a>
                                                        </li>
                                                        <li>
                                                            <a href="#best" data-toggle="tab">Best Onwer</a>
                                                        </li>
                                                        <li>
                                                            <a href="#sale" data-toggle="tab">Special Rooms</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div id="new" class="tab-pane fade in active show">
                                                        <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                            <div class="item text-center">
                                                                <div class="product-miniature first-item js-product-miniature item-one">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/frontend/img/product/1.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/frontend/img/product/5.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                          
                                                                        </div>
                                                                      
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/frontend/img/product/3.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/frontend/img/product/9.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
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
                                                                            <div class="product-group-price">
                                                                              
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/frontend/img/product/2.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/frontend/img/product/17.jpg" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
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
                                                                            <div class="product-group-price">
                                                                               
                                                                            </div>
                                                                        </div>
                                                                      
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="best">
                                                        <div class="category-product-index owl-carousel owl-theme">
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/frontend/img/product/4.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/frontend/img/product/10.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
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
                                                                            <div class="product-group-price">
                                                                                
                                                                            </div>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/frontend/img/product/5.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/frontend/img/product/12.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                            <div class="product-group-price">
                                                                               
                                                                            </div>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/frontend/img/product/6.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/frontend/img/product/13.jpg" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                            <div class="product-group-price">
                                                                              
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="sale">
                                                        <div class="category-product-index owl-carousel owl-theme">
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/frontend/img/product/7.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/frontend/img/product/14.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                            <div class="product-group-price">
                                                                          
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/frontend/img/product/8.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/frontend/img/product/15.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-20%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                            <div class="product-group-price">
                                                                              
                                                                            </div>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/frontend/img/product/9.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/frontend/img/product/16.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-20%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                            <div class="product-group-price">
                                                                               
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

                        <div class="container">
                            <!-- banner -->
                            <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="/frontend/img/home/effect1.jpg" alt="banner-1" title="banner-1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="/frontend/img/home/effect2.jpg" alt="banner-2" title="banner-2">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- best seller -->
                            <div class="section best-sellers col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="groupproductlist">
                                            <div class="row d-flex align-items-center">
                                                <!-- column 4 -->
                                                <div class="flex-4 col-lg-4 flex-4">
                                                    <h2 class="title-block">
                                                        <span class="sub-title">Best Owner Rooms</span>Best Owner Rooms
                                                    </h2>
                                                    <div class="content-text">
                                                        <p> here is the list of best onwer wich is is lis here 
                                                        </p>
                                                        <div>
                                                            <a href="product-grid-sidebar-left.html"> View all Rooms </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- column 8 -->
                                                <div class="block-content col-lg-8 flex-8">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active show">
                                                            <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/26.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/1.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="../product-detail">Best Room 1</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/25.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/2.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Best Room 2</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    
                                                                               </div>
                                                                            </div>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/10.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/9.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Best Room 3</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/3.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/9.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Best Room 4</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/24.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/3.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Best Room 5</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/23.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/4.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Best Room 6</a>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    
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
                        </div>

                        <!-- product kitchen -->
                        <div class="section kitchen">
                            <div class="living-room">
                                <div class="container">
                                    <div class="tiva-row-wrap row">
                                        <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                            <div class="grouptab row">
                                                <!-- column 3 -->
                                                <div class="categoriestab-right col-lg-3 align-items-start d-flex flex-column col-md-3 flex-3">
                                                    <div class="block-title-content">
                                                        <h2 class="title-block">
                                                            Kitchen
                                                        </h2>
                                                    </div>
                                                    <div class="cate-child-vertical">
                                                        <ul class="d-flex align-items-start flex-column">
                                                            <li>
                                                                <a href="/product-grid-sidebar-left">Kitchen Shears</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Colander</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Mixing Bowls</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Grater</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Vegetable Peeler</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Rolling Pin</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Baking Sheet</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Oven Mitts</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Dutch Oven</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Salad Bowl</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">WINDOW</a>
                                                            </li>
                                                            <li class="last float-right">
                                                                <a href="product-grid-sidebar-left.html">View All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- column 9 -->
                                                <div class="categoriestab-left product-tab col-md-9 flex-9">
                                                    <div class="title-tab-content d-flex justify-content-start">
                                                        <ul class="nav nav-tabs">
                                                            <li>
                                                                <a href="#new_kitchen" data-toggle="tab" class="active">New Rooms</a>
                                                            </li>
                                                            <li>
                                                                <a href="#best_kitchen" data-toggle="tab">Best Hostal Onwner</a>
                                                            </li>
                                                            <li>
                                                                <a href="#sale_kitchen" data-toggle="tab">Special Rooms</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-content">
                                                        <!-- new kitchen -->
                                                        <div id="new_kitchen" class="tab-pane fade in active show">
                                                            <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/6.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/4.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-30%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">aaaaaa</a>
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
                                                                                <div class="product-group-price">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/10.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/11.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-10%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                <div class="product-group-price">
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                          

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/16.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/14.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                <div class="product-group-price">
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- best kitchen -->
                                                        <div id="best_kitchen" class="tab-pane fade">
                                                            <div class="category-product-index owl-carousel owl-theme">
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/8.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/13.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-30%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                <div class="product-group-price">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/4.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/12.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-10%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                <div class="product-group-price">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/13.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/6.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                <div class="product-group-price">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- sale kitchen -->
                                                        <div id="sale_kitchen" class="tab-pane fade">
                                                            <div class="category-product-index owl-carousel owl-theme">
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/10.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/8.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-30%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                <div class="product-group-price">
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/11.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/14.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-20%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                <div class="product-group-price">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/frontend/img/product/6.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/frontend/img/product/16.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-20%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                <div class="product-group-price">
                                                                                   
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
                        </div>

                        <!-- banner -->
                        <div class="container">
                            <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="/frontend/img/home/effect3.jpg" alt="banner-1" title="banner-1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="/frontend/img/home/effect4.jpg" alt="banner-2" title="banner-2">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                                                <p>"Living in a hostel is about finding a community that becomes your family,
                                                                     growing through shared struggles and triumphs, and building lifelong memories 
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
                                                                <p>" Living in a hostel is about finding a community that becomes your family,
                                                                     growing through shared struggles and triumphs, and building lifelong memories 
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
                                                                <p>" Hostel life fosters independence and personal growth, teaching valuable life skills and resilience through shared experiences "</p>
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
                                                                <p>" Experience the vibrant community and dynamic environment of hostel living, where every day is a new adventure. "</p>
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
                                                <img class="img-fluid img-responsive" src="/frontend/img/home/home1-tolltip1.jpg" alt="lookbook">
                                                
												<div class="item-lookbook item1">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="/frontend/img/home/icon-tolltip2.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Lorem ipsum dolor</a>
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
                                                                    <a href="product-detail.html">View More</a>
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
                                                                <a href="product-detail.html">
                                                                    <img src="/frontend/img/home/icon-tolltip1.jpg" alt="contrary-to-popular-belief">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Sed vel malesuada lorem</a>
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
                                                                    <a href="product-detail.html">View More</a>
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
                                                <img class="img-fluid img-responsive" src="/frontend/img/home/home1-tolltip2.jpg" alt="lookbook">
                                                
												<div class="item-lookbook item3">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook  d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="/frontend/img/product/34.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Lorem ipsum dolor sit</a>
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
                                                                    <a href="product-detail.html">View More</a>
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
                                                                <a href="product-detail.html">
                                                                    <img src="/frontend/img/home/icon-tolltip6.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Lorem ipsum dolor</a>
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
                                                                    <a href="product-detail.html">View More</a>
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
                                                                <a href="product-detail.html">
                                                                    <img src="/frontend/img/home/icon-tolltip4.jpg" alt="mug-the-adventure-begins">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Sed vel malesuada lorem</a>
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
                                                                    <a href="product-detail.html">View More</a>
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
                                                <img class="img-fluid img-responsive" src="/frontend/img/home/home1-tolltip3.jpg" alt="lookbook">
                                                
												<div class="item-lookbook item6">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook  d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="/frontend/img/home/icon-tolltip4.jpg" alt="mug-the-adventure-begins">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Sed vel malesuada lorem</a>
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
                                                                    <a href="product-detail.html">View More</a>
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
                                                                <a href="product-detail.html">
                                                                    <img src="/frontend/img/product/13.jpg" alt="brown-bear-vector-graphics">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Orci varius natoque penatibus</a>
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
                                                                    <a href="product-detail.html">View More</a>
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
                                                                <a href="product-detail.html">
                                                                    <img src="/frontend/img/home/icon-tolltip6.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Etiam congue nisl nec</a>
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
                                                                    <a href="product-detail.html">View More</a>
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
                                                <img class="img-fluid img-responsive" src="/frontend/img/home/home1-tolltip4.jpg" alt="lookbook">
                                                
												<div class="item-lookbook item9">
                                                    <span class="number-lookbook">+</span>
                                                    <div class="content-lookbook">
                                                        <div class="main-lookbook  d-flex align-items-center">
                                                            <div class="item-thumb">
                                                                <a href="product-detail.html">
                                                                    <img src="/frontend/img/home/icon-tolltip10.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Nam semper a ligula nec</a>
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
                                                                    <a href="product-detail.html">View More</a>
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
                                                                <a href="product-detail.html">
                                                                    <img src="/frontend/img/home/icon-tolltip8.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Donec accumsan lectus ut</a>
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
                                                                    <a href="product-detail.html">View More</a>
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
                                                                <a href="product-detail.html">
                                                                    <img src="/frontend/img/home/icon-tolltip9.jpg" alt="lorem-ipsum-dolor-sit-amet">
                                                                </a>
                                                            </div>
                                                            <div class="content-bottom">
                                                                <div class="item-title">
                                                                    <a href="product-detail.html">Fusce quis felis libero</a>
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
                                                                    <a href="product-detail.html">View More</a>
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
                                                Discover comfort and convenience at Usman Hostel, located near University Chowk in Bahawalpur. Experience hassle-free student living with furnished rooms and easy access to campus amenities.
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
                                                    Lorem ipsum dolor sit amet, consecte adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
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
                                                    Lorem ipsum dolor sit amet, consecte adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- partner -->
                            <div class="section introduct-logo">
                                <div class="row">
                                    <div class="tiva-manufacture  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <div class="block">
                                            <div id="manufacture" class="owl-carousel owl-theme owl-loaded owl-drag">
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/frontend/img/home/icon-logo1.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/frontend/img/home/icon-logo2.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/frontend/img/home/icon-logo3.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/frontend/img/home/icon-logo4.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/frontend/img/home/icon-logo5.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/frontend/img/home/icon-logo6.jpg" alt="img" />
                                                        </a>
                                                    </div>
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