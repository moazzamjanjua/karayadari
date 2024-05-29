
@include('frontend.layouts.style')
<body class="user-register blog">
  
@include('frontend.layouts.header')

        <!-- main -->
        <div id="wrapper-site">
            <div class="container">
                <div class="row">
                    <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                        <div id="main">
                            <div id="content" class="page-content">
                                <div class="register-form text-center">
                                    <h1 class="text-center title-page">Create Account</h1>
                                    <form action="{{ url('/') }}/register"  method="post">
                                    @csrf
                                        <div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="first_name" type="text" placeholder="First name">
                                                </div>
                                            </div>
                                           
                                 
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="last_name" type="text" placeholder="Last name">
                                                </div>
                                            </div>
                                           
                                  
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="email" type="email" placeholder="Email">
                                                </div>
                                            </div>
                                            @if(session('error'))
                                  <div class="alert alert-danger">{{ session('error') }}</div>
                                      @endif
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control js-child-focus js-visible-password" name="password" type="password" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
                                            @if(session('error'))
                                  <div class="alert alert-danger">{{ session('error') }}</div>
                                      @endif
                                      <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="country" type="text" placeholder="Country">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <div>
                                                <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                                    Create Account
                                                </button>
                                            </div>
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

    <!-- footer -->
    @include('frontend.layouts.footer')