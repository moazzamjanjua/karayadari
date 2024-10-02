<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/admindashboard/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/admindashboard/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/admindashboard/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="/admindashboard/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="/admindashboard/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="/admindashboard/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="/admindashboard/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="/admindashboard/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="/admindashboard/vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="/admindashboard/vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="/admindashboard/vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="/admindashboard/vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="/admindashboard/vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="/admindashboard/vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="/admindashboard/vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="/admindashboard/vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name">Jawad Ahmad</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="../admin/profile"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="../admin/login"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="https://github.com/dropways/deskapp" target="_blank"><img src="/admindashboard/vendors/images/github.svg" alt=""></a>
			</div>
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="/admindashboard/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="/admindashboard/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							<li><a href="index.html">Dashboard style 1</a></li>
							<li><a href="index2.html">Dashboard style 2</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
						</a>
						<ul class="submenu">
							<li><a href="form-basic.html">Form Basic</a></li>
							<li><a href="advanced-components.html">Advanced Components</a></li>
							<li><a href="form-wizard.html">Form Wizard</a></li>
							<li><a href="html5-editor.html">HTML5 Editor</a></li>
							<li><a href="form-pickers.html">Form Pickers</a></li>
							<li><a href="image-cropper.html">Image Cropper</a></li>
							<li><a href="image-dropzone.html">Image Dropzone</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Tables</span>
						</a>
						<ul class="submenu">
							<li><a href="basic-table.html">Basic Tables</a></li>
							<li><a href="datatable.html">DataTables</a></li>
						</ul>
					</li>
					<li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-apartment"></span><span class="mtext"> UI Elements </span>
						</a>
						<ul class="submenu">
							<li><a href="ui-buttons.html">Buttons</a></li>
							<li><a href="ui-cards.html">Cards</a></li>
							<li><a href="ui-cards-hover.html">Cards Hover</a></li>
							<li><a href="ui-modals.html">Modals</a></li>
							<li><a href="ui-tabs.html">Tabs</a></li>
							<li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
							<li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
							<li><a href="ui-notification.html">Notification</a></li>
							<li><a href="ui-timeline.html">Timeline</a></li>
							<li><a href="ui-progressbar.html">Progressbar</a></li>
							<li><a href="ui-typography.html">Typography</a></li>
							<li><a href="ui-list-group.html">List group</a></li>
							<li><a href="ui-range-slider.html">Range slider</a></li>
							<li><a href="ui-carousel.html">Carousel</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-paint-brush"></span><span class="mtext">Icons</span>
						</a>
						<ul class="submenu">
							<li><a href="font-awesome.html">FontAwesome Icons</a></li>
							<li><a href="foundation.html">Foundation Icons</a></li>
							<li><a href="ionicons.html">Ionicons Icons</a></li>
							<li><a href="themify.html">Themify Icons</a></li>
							<li><a href="custom-icon.html">Custom Icons</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
						</a>
						<ul class="submenu">
							<li><a href="highchart.html">Highchart</a></li>
							<li><a href="knob-chart.html">jQuery Knob</a></li>
							<li><a href="jvectormap.html">jvectormap</a></li>
							<li><a href="apexcharts.html">Apexcharts</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-right-arrow1"></span><span class="mtext">Additional Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="video-player.html">Video Player</a></li>
							<li><a href="login.html">Login</a></li>
							<li><a href="forgot-password.html">Forgot Password</a></li>
							<li><a href="reset-password.html">Reset Password</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-browser2"></span><span class="mtext">Error Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="400.html">400</a></li>
							<li><a href="403.html">403</a></li>
							<li><a href="404.html">404</a></li>
							<li><a href="500.html">500</a></li>
							<li><a href="503.html">503</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="mtext">Extra Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="blank.html">Blank</a></li>
							<li><a href="contact-directory.html">Contact Directory</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="blog-detail.html">Blog Detail</a></li>
							<li><a href="product.html">Product</a></li>
							<li><a href="product-detail.html">Product De
								tail</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="../admin/profile">Profile</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="pricing-table.html">Pricing Tables</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-list3"></span><span class="mtext">Multi Level Menu</span>
						</a>
						<ul class="submenu">
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle">
									<span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
								</a>
								<ul class="submenu child">
									<li><a href="javascript:;">Level 2</a></li>
									<li><a href="javascript:;">Level 2</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
						</ul>
					</li>
					<li>
						<a href="sitemap.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">Sitemap</span>
						</a>
					</li>
					<li>
						<a href="chat.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
						</a>
					</li>
					<li>
						<a href="invoice.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
						</a>
						<ul class="submenu">
							<li><a href="introduction.html">Introduction</a></li>
							<li><a href="getting-started.html">Getting Started</a></li>
							<li><a href="color-settings.html">Color Settings</a></li>
							<li><a href="third-party-plugins.html">Third Party Plugins</a></li>
						</ul>
					</li>
					<li>
						<a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-paper-plane1"></span>
							<span class="mtext">Landing Page <img src="/admindashboard/vendors/images/coming-soon.png" alt="" width="25"></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>





	<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <!-- Banner Image Section -->
                <div class="col-md-4">
                    <img src="/admindashboard/vendors/images/banner-img.png" alt="Banner Image" class="img-fluid">
                </div>

                <!-- Welcome Message Section -->
                <div class="col-md-8">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">Welcome back,</h4>
                    <h2 class="weight-600 font-30 text-blue">Karaydari!</h2>
                    <p class="font-16 max-width-600">Manage your platform efficiently with real-time approvals, insights, and more to ensure a smooth experience for all users.</p>

                    <!-- Quick Statistics Section -->
                    <div class="quick-stats">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <h3 class="font-24">120</h3>
                                <p>Total Hostels</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <h3 class="font-24">85</h3>
                                <p>Approved Hostels</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <h3 class="font-24">30</h3>
                                <p>Pending Approvals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs Section as Buttons -->
        <div class="text-center mt-20" id="myTab" role="group">
            <button type="button" class="btn btn-primary active" id="owners-tab" data-target="#owners" role="tab">Owners</button>
            <button type="button" class="btn btn-primary" id="hostels-tab" data-target="#hostels" role="tab">Hostels</button>
            <button type="button" class="btn btn-primary" id="blogs-tab" data-target="#blogs" role="tab">Add Blogs</button>
        </div>

        <!-- Tab Content Section -->
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="owners" role="tabpanel">
			<h2 class="mb-4">Owners List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Owner Name</th>
                <th>Owner Email</th>
                <th>Owner Address</th>
                <th>Owner City</th>
                <th>Owner Number</th>
                <th>Owner Country</th>
                <th>Owner Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($owners as $owner)
                <tr>
                    <td>{{ $owner->id }}</td>
                    <td>{{ $owner->owner_name }}</td>
                    <td>{{ $owner->owner_email }}</td>
                    <td>{{ $owner->owner_address }}</td>
                    <td>{{ $owner->owner_city }}</td>
                    <td>{{ $owner->owner_number }}</td>
                    <td>{{ $owner->owner_country }}</td>
                    <td>
                        <img src="{{ asset($owner->owner_image) }}" alt="Owner Image" style="width: 100px;">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
                <!-- Add owner management content here -->
            </div>
            <div class="tab-pane fade" id="hostels" role="tabpanel">
			<div class="container mt-5">
			<h2 class="mb-4">Hostels List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Hostel Name</th>
                <th>Owner ID</th>
                <th>Owner Number</th>
                <th>Owner Email</th>
                <th>Best Hostel</th>
                <th>Verified</th>
                <th>Approved</th>
                <th>Top Rated</th>
                <th>Homepage</th>
                <th>Featured Hostel</th>
                <th>Category Name</th>
                <th>Hostel Address</th>
                <th>City</th>
                <th>Location</th>
                <th>Front Image</th>
                <th>Detail</th>
                <th>Capacity</th>
                <th>Email</th>
                <th>Number of Rooms</th>
                <th>Wi-Fi</th>
                <th>Security</th>
                <th>Water Supply</th>
                <th>Hostel Price</th>
                <th>Hostel Video</th>
                <th>Slug</th>
                <th>Area</th>
                <th>Is Booked</th>
                <th>Required Capacity</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hostels as $hostel)
                <tr>
                    <td>{{ $hostel->id }}</td>
                    <td>{{ $hostel->hostel_name }}</td>
                    <td>{{ $hostel->owner_id }}</td>
                    <td>{{ $hostel->owner_number }}</td>
                    <td>{{ $hostel->owner_email }}</td>
                    <td>{{ $hostel->best_hostel ? 'Yes' : 'No' }}</td>
                    <td>{{ $hostel->is_verified ? 'Yes' : 'No' }}</td>
                    <td>{{ $hostel->is_approved ? 'Yes' : 'No' }}</td>
                    <td>{{ $hostel->top_rated_hostel ? 'Yes' : 'No' }}</td>
                    <td>{{ $hostel->homepage ? 'Yes' : 'No' }}</td>
                    <td>{{ $hostel->featured_hostel ? 'Yes' : 'No' }}</td>
                    <td>{{ $hostel->category_name }}</td>
                    <td>{{ $hostel->hostel_address }}</td>
                    <td>{{ $hostel->city }}</td>
                    <td>{{ $hostel->hostel_location }}</td>
                    <td>
                        <img src="{{ asset($hostel->hostel_front_image) }}" alt="Hostel Front Image" style="width: 100px;">
                    </td>
                    <td>{{ $hostel->hostel_detail }}</td>
                    <td>{{ $hostel->capacity }}</td>
                    <td>{{ $hostel->email }}</td>
                    <td>{{ $hostel->num_rooms }}</td>
                    <td>{{ $hostel->wifi ? 'Yes' : 'No' }}</td>
                    <td>{{ $hostel->security ? 'Yes' : 'No' }}</td>
                    <td>{{ $hostel->water_supply ? 'Yes' : 'No' }}</td>
                    <td>{{ $hostel->hostel_price }}</td>
                    <td>{{ $hostel->hostel_video }}</td>
                    <td>{{ $hostel->slug }}</td>
                    <td>{{ $hostel->area }}</td>
                    <td>{{ $hostel->is_booked ? 'Yes' : 'No' }}</td>
                    <td>{{ $hostel->required_capacity }}</td>
                    <td>{{ $hostel->created_at }}</td>
                    <td>{{ $hostel->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
            </div>
            <div class="tab-pane fade" id="blogs" role="tabpanel">
			<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Add New Blog</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="" method="POST" enctype="multipart/form-data"> <!-- Add enctype for file upload -->
    @csrf
    <div class="form-group">
        <label for="title">Blog Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
	<div class="form-group">
        <label for="image">Upload Image</label>
        <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
    </div>
    <div class="form-group">
        <label for="content">Blog Content</label>
        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</body>
</html>

                <!-- Add blog management content here -->
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and jQuery for tab functionality -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        // Handle tab clicks
        $('[role="tab"]').on('click', function () {
            // Remove 'active' class from all buttons and hide all tab panes
            $('[role="tab"]').removeClass('active btn-primary').addClass('btn-secondary');
            $('.tab-pane').removeClass('show active');

            // Add 'active' class to the clicked button
            $(this).addClass('active btn-primary').removeClass('btn-secondary');

            // Get the target tab content ID from the button's data-target attribute
            const target = $(this).data('target');
            // Show the corresponding tab content
            $(target).addClass('show active');
        });
    });
</script>

<style>
    /* Additional styles if needed */
</style>





	<!-- js -->
	<script src="/admindashboard/vendors/scripts/core.js"></script>
	<script src="/admindashboard/vendors/scripts/script.min.js"></script>
	<script src="/admindashboard/vendors/scripts/process.js"></script>
	<script src="/admindashboard/vendors/scripts/layout-settings.js"></script>
	<script src="/admindashboard/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="/admindashboard/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="/admindashboard/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="/admindashboard/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="/admindashboard/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="/admindashboard/vendors/scripts/dashboard.js"></script>
</body>
</html>