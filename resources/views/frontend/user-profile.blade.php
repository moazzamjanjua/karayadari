@include('frontend.layouts.style')

<body class="user-acount">
   @include('frontend.layouts.header')
    <!-- main content -->
   
    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">

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
                                    <span>My Account</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

            <div class="acount head-acount">
                <div class="container">
                    <div id="main">
                        <h1 class="title-page">My Account</h1>
                        <div class="content" id="block-history">
                            <table class="std table">
                                <tbody>
                                    <tr>
                                        <th class="first_item">id :</th>
                                        <td>{{Auth::user()->id}}</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Name:</th>
                                        <td>{{Auth::user()->name}}</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Address :</th>
                                        <td>{{Auth::user()->address}}</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">City :</th>
                                        <td>tgtr</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Phone :</th>
                                        <td>gtr</td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Country:</th>
                                        <td>rb</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                            view Address
                        </button>
                        <div class="order">
                            <h4>Order
                                <span class="detail">History</span>
                            </h4>
                            <p>You haven't placed any orders yet.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
   @include('frontend.layouts.footer')