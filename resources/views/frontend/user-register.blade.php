
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
                                    <form action="{{route('registerSave')}}"  method="post">
                                    @csrf
                                        <div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="name" type="text" placeholder="Name">
                                                </div>
                                            </div>

                                            </div>
                                           
                                  
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="email" type="email" placeholder="Email">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control js-child-focus js-visible-password" name="password" type="password" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control js-child-focus js-visible-password" name="password_confirmation" type="password_confirmation" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                            </div>
                                           
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
                                                <a href="{{route('login')}}" rel="nofollow">
                                                Do you have an Account?
                                            </a>
                                            </div>
                                            
                                        </div>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
    <!-- footer -->
    @include('frontend.layouts.footer')