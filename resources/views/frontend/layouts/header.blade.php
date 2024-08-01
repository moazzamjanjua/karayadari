<header>
        <!-- header left mobie -->
        <div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

                <!-- menu left -->
                <div id="mobile_mainmenu" class="item-mobile-top">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>

                <!-- logo -->
                <div class="mobile-logo">
                    <a href="index-2.html">
                        <img class="logo-mobile img-fluid" src="/frontend/img/home/logo-mobie.png" alt="Prestashop_Furnitica">
                    </a>
                </div>

                <!-- menu right -->
                <div class="mobile-menutop" data-target="#mobile-pagemenu">
                    <i class="zmdi zmdi-more"></i>
                </div>
            </div>

            <!-- search -->
            <div id="mobile_search" class="d-flex">
                <div id="mobile_search_content">
                    <form method="get" action="#">
                        <input type="text" name="s" value="" placeholder="Search">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="desktop_cart">
                    <div class="blockcart block-cart cart-preview tiva-toggle">
                        <div class="header-cart tiva-toggle-btn">
                            <span class="cart-products-count">1</span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="dropdown-content">
                            <div class="cart-content">
                                <table> 
                                    <tbody>
                                        <tr>
                                            <td class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/frontend/img/product/5.jpg" alt="Product">
                                                </a>
                                            </td>
                                            <td>
                                                <div class="product-name">
                                                    <a href="product-detail.html">Organic Strawberry Fruits</a>
                                                </div>
                                                <div>
                                                    2 x
                                                    <span class="product-price">£28.98</span>
                                                </div>
                                            </td>
                                            <td class="action">
                                                <a class="remove" href="#">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <td colspan="2">Total:</td>
                                            <td>£92.96</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" class="d-flex justify-content-center">
                                                <div class="cart-button">
                                                    <a href="product-cart.html" title="View Cart">View Cart</a>
                                                    <a href="product-checkout.html" title="Checkout">Checkout</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header desktop -->
        <div class="header-top d-xs-none ">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-sm-2 col-md-2 d-flex align-items-center">
                        <div id="logo">
                            <a href="/">
                                <img class="img-fluid" src="/frontend/img/home/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- menu -->
                    <div class="main-menu col-sm-4 col-md-5 align-items-center justify-content-center navbar-expand-md">
                        <div class="menu navbar collapse navbar-collapse">
                            <ul class="menu-top navbar-nav">
                                <li class="nav-link">
                                    <a href="/" class="parent">Home</a>
                                </li>
                                <li>
                                    <a href="../blog" class="parent">Blog</a>
                                </li>
                               
                                <li>
                                    <a href="../contact" class="parent">Contact US</a>
                                </li>

                                 <!-- Add Hostel button -->
                                  <a href="../owner/login">
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
                            
                            </ul>
                        </div>
                    </div>


                    <!-- search-->
                    <div id="search_widget" class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex">
                        <form method="get" action="#">
                            <input type="text" name="s" value="" placeholder="Search ..." class="ui-autocomplete-input" autocomplete="off">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>

                        <!-- acount  -->
                        <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
    <div class="myaccount-title">
        <a href="#acount" data-toggle="collapse" class="acount">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>{{ Auth::check() ? Auth::user()->name : 'My Account' }}</span>
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
    </div>
    <div id="acount" class="collapse">
        <div class="account-list-content">
            @auth
            <div>
                <a class="login" href="{{ route('user-profile') }}" rel="nofollow" title="View your profile">
                    <i class="fa fa-cog"></i>
                    <span>My Account</span>
                </a>
            </div>
            <div>
                <a class="register" href="{{ route('logout') }}" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                   rel="nofollow" title="Logout Account">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                    @csrf
                </form>
            </div>
            @endauth

            @guest
            <div>
                <a class="login" href="{{ route('login') }}" rel="nofollow" title="Log in to your customer account">
                    <i class="fa fa-sign-in"></i>
                    <span>Sign in</span>
                </a>
            </div>
            <div>
                <a class="register" href="{{ route('register') }}" rel="nofollow" title="Register Account">
                    <i class="fa fa-user"></i>
                    <span>Register Tenant</span>
                </a>
            </div>
            <div>
                <a class="register" href="../owner/login" rel="nofollow" title="Owner Account">
                    <i class="fa fa-user"></i>
                    <span>Owner</span>
                </a>
            </div>
            @endguest
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
    </header>