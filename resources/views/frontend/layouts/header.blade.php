<header>

    <!-- Mobile menu button and logo -->
    <div class="mobile-header d-block d-md-none">
        <div class="mobile-menu-icon">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="mobile-logo">
            <a href="/">
                <img class="img-fluid" src="/frontend/img/home/logo.png" alt="logo">
            </a>
        </div>

    </div>

    <!-- Mobile menu -->
    <div id="mobile_mainmenu_content">
        <ul class="mobile-menu">
            <li class="{{ request()->is('/') ? 'active' : '' }}">
                <a href="/" class="parent">Home</a>
            </li>
            <li class="{{ request()->is('all-hostels*') ? 'active' : '' }}">
                <a href="../all-hostels" class="parent">All Hostels</a>
            </li>
            <li class="{{ request()->is('blog*') ? 'active' : '' }}">
                <a href="{{route('all-blogs')}}" class="parent">Blogs</a>
            </li>

            <li class="{{ request()->is('blog*') ? 'active' : '' }}">
                <a href="{{route('contact')}}" class="parent"> Contact Us</a>
            </li>
            <!-- Add Hostel button -->
            @if(auth()->guard('owner')->check())
                <li>
                    <a href="{{ route('owner.home') }}" class="btn-add-hostel">Add Hostel</a>
                </li>
            @else
                <li>
                    <a href="{{ route('owner-login') }}" class="btn-add-hostel">Add Hostel</a>
                </li>
            @endif
        </ul>
    </div>

    <!-- header desktop -->
    <div class="header-top d-none d-md-block">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-sm-2header-top col-md-2 d-flex align-items-center">
                    <div id="logo">
                        <a href="/">
                            <img class="img-fluid" src="/frontend/img/home/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- WhatsApp Icon -->


                <style>
                    /*#logo {*/
                    /*    animation: logo 5s linear infinite;*/
                    /*}*/

                    /*@keyframes logo {*/
                    /*    100% {*/
                    /*        transform: rotate(360deg);*/
                    /*    }*/
                    /*}*/

                    .menu-top li.active a {
                        font-weight: bold;
                        color: #007bff;
                        background-color: #f0f0f0;
                        border-radius: 5px;


                    }


                    /* Mobile header styles */
                    .mobile-header {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 10px;
                        background-color: #fff;
                        border-bottom: 1px solid #ddd;
                    }

                    .mobile-menu-icon {
                        font-size: 24px;
                        margin-left: 90%;
                        cursor: pointer;
                    }

                    .mobile-logo img {
                        height: 60px;
                        /* Adjust as needed */
                        margin-top: -30px;
                    }

                    /* Mobile menu styles */
                    #mobile_mainmenu_content {
                        display: none;
                        /* Initially hidden */
                        position: absolute;
                        top: 40px;
                        /* Adjust based on the height of the mobile header */
                        left: 0;
                        width: 100%;
                        background-color: #fff;
                        border-top: 1px solid #ddd;
                        z-index: 1500;
                        /* Ensure it appears on top */
                    }

                    #mobile_mainmenu_content.active {
                        display: block;
                        /* Show when active */
                    }

                    .mobile-menu {
                        list-style: none;
                        padding: 0;
                        margin: 0;
                    }

                    .mobile-menu li {
                        border-bottom: 1px solid #ddd;
                    }

                    .mobile-menu a {
                        display: block;
                        padding: 15px;
                        color: #333;
                        text-decoration: none;
                    }

                    .mobile-menu a:hover {
                        background-color: #f0f0f0;
                    }


                    /* Show menu when menu icon is clicked */
                    #mobile_mainmenu_content.active {
                        display: block;
                    }


                    .header-top {
                        display: none;
                        background-color: white;
                    }

                    @media (min-width: 768px) {
                        .header-top {
                            display: block;
                        }

                        #mobile_mainmenu_content {
                            display: none;
                        }
                </style>


                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var menuIcon = document.querySelector('.mobile-menu-icon');
                        var mobileMenu = document.getElementById('mobile_mainmenu_content');

                        menuIcon.addEventListener('click', function () {
                            // Toggle the visibility of the mobile menu
                            if (mobileMenu.classList.contains('active')) {
                                mobileMenu.classList.remove('active');
                                mobileMenu.style.display = 'none';
                            } else {
                                mobileMenu.classList.add('active');
                                mobileMenu.style.display = 'block';
                            }
                        });
                    });
                </script>


                <!-- menu -->
                <div class="main-menu col-sm-4 col-md-5 align-items-center justify-content-center navbar-expand-md">
                    <div class="menu navbar collapse navbar-collapse">
                        <ul class="menu-top navbar-nav">
                            <li class="{{ request()->is('/') ? 'active' : '' }}">
                                <a href="/" class="parent">Home</a>
                            </li>
                            <li class="{{ request()->is('all-hostels*') ? 'active' : '' }}">
                                <a href="../all-hostels" class="parent">All Hostels</a>
                            </li>
                            <li class="{{ request()->is('blog*') ? 'active' : '' }}">
                                <a href="{{route('all-blogs')}}" class="parent">Blogs</a>
                            </li>

                            <!-- <li class="{{ request()->is('blog*') ? 'active' : '' }}">-->
                            <!--<a href="{{route('contact')}}" class="parent"> Contact Us</a>-->
                            <!--</li>-->



                            <!-- Add Hostel button -->
                            @if(auth()->guard('owner')->check())
                                                <a href="{{ route('owner.home') }}">
                                                    <li style="margin-top: 33px;">
                                                        <button style="
                                    background: linear-gradient(45deg, #ff6b6b, #f06595);
                                    border: none;
                                    border-radius: 6px;
                                    padding: 5px 30px;  
                                    color: white;
                                    height: 45px;
                                    white-space: nowrap;
                                    font-size: 1em;
                                    font-weight: bold;
                                    text-transform: uppercase;
                                    text-decoration: none;
                                    transition: transform 0.2s, box-shadow 0.2s;
                                    cursor: pointer;
                                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                                " onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0, 0, 0, 0.3)';"
                                                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 5px 15px rgba(0, 0, 0, 0.2)';"
                                                            onmousedown="this.style.transform='scale(0.95)'; this.style.boxShadow='0 5px 10px rgba(0, 0, 0, 0.2)';"
                                                            onmouseup="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0, 0, 0, 0.3)';">
                                                            Add Hostel
                                                        </button>
                                                    </li>
                                                </a>
                            @else
                                                <a href="{{ route('owner-login') }}">
                                                    <li style="margin-top: 33px;">
                                                        <button style="
                                    background: linear-gradient(45deg, #ff6b6b, #f06595);
                                    border: none;
                                    border-radius: 6px;
                                    padding: 5px 30px;  
                                    color: white;
                                    height: 45px;
                                    white-space: nowrap;
                                    font-size: 1em;
                                    font-weight: bold;
                                    text-transform: uppercase;
                                    text-decoration: none;
                                    transition: transform 0.2s, box-shadow 0.2s;
                                    cursor: pointer;
                                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                                " onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0, 0, 0, 0.3)';"
                                                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 5px 15px rgba(0, 0, 0, 0.2)';"
                                                            onmousedown="this.style.transform='scale(0.95)'; this.style.boxShadow='0 5px 10px rgba(0, 0, 0, 0.2)';"
                                                            onmouseup="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0, 0, 0, 0.3)';">
                                                            Add Hostel
                                                        </button>
                                                    </li>
                                                </a>
                            @endif


                        </ul>
                    </div>
                </div>



                <!-- Search and Account Dropdown -->
                <div id="search_widget" class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex">
                    <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                        <div class="myaccount-title">
                            <a href="#" id="account-toggle" class="acount"
                                style="display: flex; align-items: center; color: #333;">
                                @if(Auth::check() && Auth::user()->user_image)
                                    <img src="{{ asset('storage/user_images/' . Auth::user()->user_image) }}"
                                        alt="User Avatar"
                                        style="width: 30px; height: 30px; border-radius: 50%; object-fit: cover; margin-right: 8px;">
                                @else
                                    <i class="fa fa-user" aria-hidden="true" style="margin-right: 8px; color: #333;"></i>
                                @endif
                                <span
                                    style="color: #333;">{{ Auth::check() ? Auth::user()->name : 'My Account' }}</span>
                                <i class="fa fa-angle-down" aria-hidden="true"
                                    style="margin-left: 8px; color: #333;"></i>
                            </a>
                        </div>

                        <div id="acount" class="collapse">
                            <div class="account-list-content">
                                @auth
                                    <div>
                                        <a class="login" href="{{ route('user-profile') }}" rel="nofollow"
                                            title="View your profile">
                                            <i class="fa fa-cog"></i>
                                            <span>My Account</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="register" href="{{ route('user.logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            rel="nofollow" title="Logout Account">
                                            <i class="fa fa-sign-out"></i>
                                            <span>Logout</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('user.logout') }}" method="GET"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                @endauth

                                @guest
                                    <div>
                                        <a class="login" href="{{ route('login') }}" rel="nofollow"
                                            title="Log in to your customer account">
                                            <i class="fa fa-sign-in"></i>
                                            <span>Sign in</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="register" href="{{ route('register') }}" rel="nofollow"
                                            title="Register Account">
                                            <i class="fa fa-user"></i>
                                            <span>Register Tenant</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="register" href="{{ route('owner-login') }}" rel="nofollow"
                                            title="Owner Account">
                                            <i class="fa fa-user"></i>
                                            <span>Owner</span>
                                        </a>
                                    </div>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>

                <!-- JavaScript for toggling dropdown -->
                <script>
                    document.getElementById("account-toggle").addEventListener("click", function (event) {
                        event.preventDefault(); // Prevents default behavior
                        const accountDropdown = document.getElementById("acount");

                        // Toggle the 'show' class to open/close the dropdown
                        accountDropdown.classList.toggle("show");
                    });
                </script>



            </div>
        </div>
    </div>
    </div>
    </div>
    </div>



</header>




<div class="bottom-left-message">
    <!-- WhatsApp icon with link -->
    <a href="https://wa.me/923078379364?text=How%20can%20I%20get%20more%20info%20on%20this%3F" target="_blank">
        <i class="fa fa-whatsapp" aria-hidden="true"></i>
        <span class="hover-text">Contact Us</span>
    </a>
</div>

<style>
    .bottom-left-message {
        position: fixed;
        bottom: 20px;

        left: 20px;

        z-index: 1000;
    }

    .bottom-left-message a {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        /* Set width and height to fit icon closely */
        height: 50px;
        background-color: rgb(37, 211, 102);
        border-radius: 10%;
        /* Circle background */
        text-decoration: none;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        /* Optional shadow */
    }

    .bottom-left-message i {
        font-size: 40px;
        /* Icon size */
        color: white;
        transition: transform 0.3s;
    }

    /* Hover text styling */
    .hover-text {
        display: none;
        position: absolute;
        top: 50%;
        left: 100%;
        transform: translateY(-50%);
        background-color: rgb(37, 211, 102);
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 16px;
        margin-left: 8px;
        white-space: nowrap;
    }

    /* Show hover text on icon hover */
    .bottom-left-message a:hover .hover-text {
        display: inline-block;
    }

    /* Icon zoom effect on hover */
    .bottom-left-message a:hover i {
        transform: scale(1.1);
    }
</style>