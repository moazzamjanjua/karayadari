@include('frontend.layouts.style')

<body id="product-detail">
@include('frontend.layouts.header')

    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <div id="main">
                    <div class="page-home">

                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                <div class="breadcrumb">
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Living Room</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Sofa</span>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>
                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">

                                        <!-- category -->
                                        <div class="sidebar-block">
                                            <div class="title-block">Categories</div>
                                            <div class="block-content">
                                                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapse-icons collapsed" data-toggle="collapse" data-target="#livingroom">
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
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bathroom">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">Bathroom</a>
                                                    <div class="subCategory collapse" id="bathroom">
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
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#diningroom">
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
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bedroom">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                    <a class="cateItem" href="#">BedRoom</a>
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
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#kitchen">
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

                                        <!-- best seller -->
                                        <div class="sidebar-block">
                                            <div class="title-block">
                                                Best seller
                                            </div>
                                            <div class="product-content tab-content">
                                                <div class="row">
                                                    <div class="item col-md-12">
                                                        <div class="product-miniature item-one first-item d-flex">
                                                            <div class="thumbnail-container border">
                                                                <a href="product-detail.html">
                                                                    <img class="img-fluid image-cover" src="/frontend/img/product/1.jpg" alt="img">
                                                                    <img class="img-fluid image-secondary" src="/frontend/img/product/22.jpg" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="product-groups">
                                                                    <div class="product-title">
                                                                        <a href="product-detail.html">Nulla et justo augue</a>
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
                                                                        <div class="product-price-and-shipping">
                                                                            <span class="price">£28.08</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item col-md-12">
                                                        <div class="product-miniature item-one first-item d-flex">
                                                            <div class="thumbnail-container border">
                                                                <a href="product-detail.html">
                                                                    <img class="img-fluid image-cover" src="/frontend/img/product/2.jpg" alt="img">
                                                                    <img class="img-fluid image-secondary" src="/frontend/img/product/11.jpg" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="product-groups">
                                                                    <div class="product-title">
                                                                        <a href="product-detail.html">Nulla et justo augue</a>
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
                                                                        <div class="product-price-and-shipping">
                                                                            <span class="price">£31.08</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item col-md-12">
                                                        <div class="product-miniature item-one first-item d-flex">
                                                            <div class="thumbnail-container border">
                                                                <a href="product-detail.html">
                                                                    <img class="img-fluid image-cover" src="/frontend/img/product/3.jpg" alt="img">
                                                                    <img class="img-fluid image-secondary" src="/frontend/img/product/14.jpg" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="product-groups">
                                                                    <div class="product-title">
                                                                        <a href="product-detail.html">Nulla et justo augue</a>
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
                                                                        <div class="product-price-and-shipping">
                                                                            <span class="price">£20.08</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- product tag -->
                                        <div class="sidebar-block product-tags">
                                            <div class="title-block">
                                                Product Tags
                                            </div>
                                            <div class="block-content">
                                                <ul class="listSidebarBlog list-unstyled">
                                                    <li>
                                                        <a href="#" title="Show products matching tag Hot Trend">Hot Trend</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Jewelry">Jewelry</a>
                                                    </li>

                                                    <li>
                                                        <a href="man.html" title="Show products matching tag Man">Man</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Party">Party</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag SamSung">SamSung</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Shirt Dresses">Shirt Dresses</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Shoes">Shoes</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Summer">Summer</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Sweaters">Sweaters</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Winter">Winter</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Woman">Woman</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-lg-9 col-md-9">
                                        <div class="main-product-detail">
                                            <h2>Lorem ipsum dolor</h2>
                                            <div class="product-single row">
                                                <div class="product-detail col-xs-12 col-md-5 col-sm-5">
                                                    <div class="page-content" id="content">
                                                        <div class="images-container">
                                                            <div class="js-qv-mask mask tab-content border">
                                                                <div id="item1" class="tab-pane fade active in show">
                                                                    <img src="/frontend/img/product/1.jpg" alt="img">
                                                                </div>
                                                                <div id="item2" class="tab-pane fade">
                                                                    <img src="/frontend/img/product/2.jpg" alt="img">
                                                                </div>
                                                                <div id="item3" class="tab-pane fade">
                                                                    <img src="/frontend/img/product/3.jpg" alt="img">
                                                                </div>
                                                                <div id="item4" class="tab-pane fade">
                                                                    <img src="/frontend/img/product/5.jpg" alt="img">
                                                                </div>
                                                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                                    <i class="fa fa-expand"></i>
                                                                </div>
                                                            </div>
                                                            <ul class="product-tab nav nav-tabs d-flex">
                                                                <li class="active col">
                                                                    <a href="#item1" data-toggle="tab" aria-expanded="true" class="active show">
                                                                        <img src="/frontend/img/product/1.jpg" alt="img">
                                                                    </a>
                                                                </li>
                                                                <li class="col">
                                                                    <a href="#item2" data-toggle="tab">
                                                                        <img src="/frontend/img/product/2.jpg" alt="img">
                                                                    </a>
                                                                </li>
                                                                <li class="col">
                                                                    <a href="#item3" data-toggle="tab">
                                                                        <img src="/frontend/img/product/3.jpg" alt="img">
                                                                    </a>
                                                                </li>
                                                                <li class="col">
                                                                    <a href="#item4" data-toggle="tab">
                                                                        <img src="/frontend/img/product/5.jpg" alt="img">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="modal fade" id="product-modal" role="dialog">
                                                                <div class="modal-dialog">

                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <div class="modal-body">
                                                                                <div class="product-detail">
                                                                                    <div>
                                                                                        <div class="images-container">
                                                                                            <div class="js-qv-mask mask tab-content">
                                                                                                <div id="modal-item1" class="tab-pane fade active in show">
                                                                                                    <img src="/frontend/img/product/1.jpg" alt="img">
                                                                                                </div>
                                                                                                <div id="modal-item2" class="tab-pane fade">
                                                                                                    <img src="/frontend/img/product/2.jpg" alt="img">
                                                                                                </div>
                                                                                                <div id="modal-item3" class="tab-pane fade">
                                                                                                    <img src="/frontend/img/product/3.jpg" alt="img">
                                                                                                </div>
                                                                                                <div id="modal-item4" class="tab-pane fade">
                                                                                                    <img src="/frontend/img/product/5.jpg" alt="img">
                                                                                                </div>
                                                                                            </div>
                                                                                            <ul class="product-tab nav nav-tabs">
                                                                                                <li class="active">
                                                                                                    <a href="#modal-item1" data-toggle="tab" class=" active show">
                                                                                                        <img src="/frontend/img/product/1.jpg" alt="img">
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#modal-item2" data-toggle="tab">
                                                                                                        <img src="/frontend/img/product/2.jpg" alt="img">
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#modal-item3" data-toggle="tab">
                                                                                                        <img src="/frontend/img/product/3.jpg" alt="img">
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#modal-item4" data-toggle="tab">
                                                                                                        <img src="/frontend/img/product/5.jpg" alt="img">
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
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
                                                <div class="product-info col-xs-12 col-md-7 col-sm-7">
                                                    <div class="detail-description">
                                                        
                                                        <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum
                                                            auctor, nisi elit consequat etiam non auctor.</p>
                                                    
                                                        <div class="d-flex2 has-border">
                                                            <div class="btn-group">
                                                                <a href="#">
                                                                    <i class="zmdi zmdi-share"></i>
                                                                    <span>Share</span>
                                                                </a>
                                                                <a href="#" class="email">
                                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                    <span>SEN TO A FRIEND</span>
                                                                </a>
                                                                <a href="#" class="print">
                                                                    <i class="zmdi zmdi-print"></i>
                                                                    <span>Print</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="rating-comment has-border d-flex">
                                                            <div class="review-description d-flex">
                                                                <span>REVIEW :</span>
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
                                                            <div class="read after-has-border">
                                                                <a href="#review">
                                                                    <i class="fa fa-commenting-o color" aria-hidden="true"></i>
                                                                    <span>READ REVIEWS (3)</span>
                                                                </a>
                                                            </div>
                                                            <div class="apen after-has-border">
                                                                <a href="#review">
                                                                    <i class="fa fa-pencil color" aria-hidden="true"></i>
                                                                    <span>WRITE A REVIEW</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <p>SKU :
                                                                <span class="content2">
                                                                    <a href="#">e-02154</a>
                                                                </span>
                                                            </p>
                                                            <p>Categories :
                                                                <span class="content2">
                                                                    <a href="#">Clothing</a>,
                                                                    <a href="#">Men's Jackets</a>
                                                                </span>
                                                            </p>
                                                            <p>tags :
                                                                <span class="content2">
                                                                    <a href="#">Jacket</a>,
                                                                    <a href="#">Overcoat</a>,
                                                                    <a href="#">Luxury</a>,
                                                                    <a href="#">men</a>,
                                                                    <a href="#">summer</a>,
                                                                    <a href="#">autumn</a>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											
                                            <div class="review">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#description" class="active show">Description</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#tag">Product Tags</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#review">Reviews (2)</a>
                                                    </li>
                                                </ul>
												
                                                <div class="tab-content">
                                                    <div id="description" class="tab-pane fade in active show">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                    </div>
													
                                                    <div id="review" class="tab-pane fade">
                                                        <div class="spr-form">
                                                            <div class="user-comment">
                                                                <div class="spr-review">
                                                                    <div class="spr-review-header">
                                                                        <span class="spr-review-header-byline">
                                                                            <strong>Peter Capidal</strong> -
                                                                            <span>Apr 14, 2018</span>
                                                                        </span>
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
                                                                    <div class="spr-review-content">
                                                                        <p class="spr-review-content-body">In feugiat venenatis enim, non finibus metus bibendum
                                                                            eu. Proin massa justo, eleifend fermentum varius
                                                                            quis, semper gravida quam. Cras nec enim sed
                                                                            lacus viverra luctus. Nunc quis accumsan mauris.
                                                                            Aliquam fermentum sit amet est id scelerisque.
                                                                            Nam porta risus metus.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="spr-review preview2">
                                                                    <div class="spr-review-header">
                                                                        <span class="spr-review-header-byline">
                                                                            <strong>David James</strong> -
                                                                            <span>Apr 13, 2018</span>
                                                                        </span>
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
                                                                    <div class="spr-review-content">
                                                                        <p class="spr-review-content-body">In feugiat venenatis enim, non finibus metus bibendum
                                                                            eu. Proin massa justo, eleifend fermentum varius
                                                                            quis, semper gravida quam. Cras nec enim sed
                                                                            lacus viverra luctus. Nunc quis accumsan mauris.
                                                                            Aliquam fermentum sit amet est id scelerisque.
                                                                            Nam porta risus metus.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form method="post" action="#" class="new-review-form">
                                                            <input type="hidden" name="review[rating]" value="3">
                                                            <input type="hidden" name="product_id">
                                                            <h3 class="spr-form-title">Write a review</h3>
                                                            <fieldset>
                                                                <div class="spr-form-review-rating">
                                                                    <label class="spr-form-label">Your Rating</label>
                                                                    <fieldset class="ratings">
                                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                                        <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                        <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                                        <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                        <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                                        <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                        <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                                        <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                        <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                                        <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                        <input type="radio" id="starhalf" name="rating" value="half" />
                                                                    </fieldset>
                                                                </div>
                                                            </fieldset>
                                                            <fieldset class="spr-form-contact">
                                                                <div class="spr-form-contact-name">
                                                                    <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Enter your name">
                                                                </div>
                                                                <div class="spr-form-contact-email">
                                                                    <input class="spr-form-input spr-form-input-email form-control" value="" placeholder="Enter your email">
                                                                </div>
                                                            </fieldset>
                                                            <fieldset>
                                                                <div class="spr-form-review-body">
                                                                    <div class="spr-form-input">
                                                                        <textarea class="spr-form-input-textarea" rows="10" placeholder="Write your comments here"></textarea>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <div class="submit">
                                                                <input type="submit" name="addComment" id="submitComment" class="btn btn-default" value="Submit Review">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="tag" class="tab-pane fade in">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="related">
                                                <div class="title-tab-content  text-center">
                                                    <div class="title-product justify-content-start">
                                                        <h2>Related Products</h2>
                                                    </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="row">
                                                        <div class="item text-center col-md-4">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container border border">
                                                                    <a href="product-detail.html">
                                                                        <img class="img-fluid image-cover" src="/frontend/img/product/1.jpg" alt="img">
                                                                        <img class="img-fluid image-secondary" src="/frontend/img/product/22.jpg" alt="img">
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
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="price">£28.08</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="#" method="post" class="formAddToCart">
                                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                            </a>
                                                                        </form>
                                                                        <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item text-center col-md-4">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container border">
                                                                    <a href="product-detail.html">
                                                                        <img class="img-fluid image-cover" src="/frontend/img/product/2.jpg" alt="img">
                                                                        <img class="img-fluid image-secondary" src="/frontend//frontend/img/product/11.jpg" alt="img">
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
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="price">£31.08</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="#" method="post" class="formAddToCart">
                                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                            </a>
                                                                        </form>
                                                                        <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item text-center col-md-4">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container border">
                                                                    <a href="product-detail.html">
                                                                        <img class="img-fluid image-cover" src="/frontend/img/product/3.jpg" alt="img">
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
                                                                            <div class="product-price-and-shipping">
                                                                                <span class="price">£20.08</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="#" method="post" class="formAddToCart">
                                                                            <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                            </a>
                                                                        </form>
                                                                        <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a>
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
        </div>
    </div>

    @include('frontend.layouts.footer')