<!DOCTYPE html>
<html>
    <head>
        <!-- Title -->
        <title>Seoera</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="FiveFighters" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:500,400,300' rel='stylesheet' type='text/css'>
        

        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('plugins/fontawesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Register Modal -->
        <link href="{{ asset('plugins/pricing-tables/css/style.css') }}" rel="stylesheet" type="text/css">
        <!-- Slim Photo -->
        <link href="{{ asset('plugins/slim/slim.min.css') }}">
        <!-- Mobile Input -->
        <link href="{{ asset('css/intlTelInput.css') }}">

        <link href="{{ asset('css/landing.css') }}" rel="stylesheet" type="text/css"/>
        
        <style>
            .slim {
                width: 200px;
                height: 200px;
                border-radius: 50%;
                margin: 0 auto;
            }
            .pl-0 {
                padding-left: 0;
            }
            .intl-tel-input {
                width: 100%;
            }
        </style>
    </head>
    <body data-spy="scroll" data-target="#header">
        

        <!--================================
        =            Navigation            =
        =================================-->
        <nav id="header" class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="#">EmployMe</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#founders">Founders</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--====  End of Navigation  ====-->
        

        <!--==================================
        =            Home Section            =
        ===================================-->
        <div class="home" id="home">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="home-text col-md-8">
                        <h1 class="wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1.5s" data-wow-offset="10">Lorem ipsum dolor sit amet.</h1>
                        <p class="lead wow fadeInDown" data-wow-delay="2s" data-wow-duration="1.5s" data-wow-offset="10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br>Aenean commodo ligula eget dolor.</p>

                          @if (Route::has('login'))
                           @auth
                        <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('register') }}" class="btn btn-default btn-rounded btn-lg wow fadeInUp" data-wow-delay="2.5s" data-wow-duration="1.5s" data-wow-offset="10">Register</a>
                            <a href="{{ route('login')}}" class="btn btn-success btn-rounded btn-lg wow fadeInUp" data-wow-delay="2.5s" data-wow-duration="1.5s" data-wow-offset="10">Login</a>
                            @endauth
                          @endif
                       
                    </div>
                    <div class="scroller">
                        <div class="mouse"><div class="wheel"></div></div>
                    </div>
                </div>
            </div>
        </div>
        <!--====  End of Home Section  ====-->
        

        <!--=====================================
        =            Feature Section            =
        ======================================-->
        <div id="features">
            <div class="container">
                <div class="row features-list">
                    <div class="col-sm-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.5s">
                        <div class="feature-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <h2>Fully Responsive</h2>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies</p>
                    </div>
                    <div class="col-sm-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.7s">
                        <div class="feature-icon">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                        <h2>Creative Design</h2>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies</p>
                    </div>
                    <div class="col-sm-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.9s">
                        <div class="feature-icon">
                            <i class="fa fa-support"></i>
                        </div>
                        <h2>Free Support</h2>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies</p>
                    </div>
                </div>
            </div>    
        </div>
        <!--====  End of Feature Section  ====-->
        

        <!--===================================
        =            Power Section            =
        ====================================-->
        <section id="section-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="10">
                        <img src="{{ asset('img/power.jpg') }}" class="img-responsive iphone-img" alt="">
                    </div>
                    <div class="col-sm-8 wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="10">
                        <h1>The Power You Need</h1>
                        <p>Suspendisse pulvinar, augue ac venenatis condimentum,nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut varius tincidunt libero.</p>
                        <ul class="list-unstyled features-list-2">
                            <li><i class="fa fa-diamond icon-state-success m-r-xs icon-md"></i>Unique design</li>
                            <li><i class="fa fa-check icon-state-success m-r-xs icon-md"></i>Everything you need</li>
                            <li><i class="fa fa-cloud icon-state-success m-r-xs icon-md"></i>Easy to use &amp; customize</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--====  End of Power Section  ====-->
        

        <!--==========================================
        =            Testimonials Section            =
        ===========================================-->
        <section id="section-3">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="10">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <p class="text-white">“Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut varius tincidunt libero.”</p>
                                            <span>- David, App Manager</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <p class="text-white">“Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.”</p>
                                            <span>- Sandra, Director</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <p>“Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit.”</p>
                                            <span>- Amily, UI Designer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </section>
        <!--====  End of Testimonials Section  ====-->
        
        
        <!--=====================================
        =            Contact Section            =
        ======================================-->
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.5s">
                        <a href="#contact" class="btn btn-success btn-lg btn-rounded contact-button"><i class="fa fa-envelope-o"></i></a>
                        <h2>Let's keep in touch</h2>
                        <form class="m-t-md">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control input-lg contact-name" placeholder="Name">
                                    </div>
                                    <div class="col-sm-6">      
                                        <input type="email" class="form-control input-lg" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="4=6" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default btn-lg">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--====  End of Contact Section  ====-->
        

        <!--====================================
        =            Footer Section            =
        =====================================-->
        <footer>
            <div class="container">
                <p class="text-center no-s">2019 &copy; Seoera.</p>
            </div>
        </footer>
        <!--====  End of Footer Section  ====-->

      
                
        <!-- Javascripts -->
        <script src="{{ asset('plugins/jquery/jquery-2.1.3.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('plugins/wow/wow.min.js') }}"></script>
        <!-- Regiter Modal -->
        <script src="{{ asset('plugins/pricing-tables/js/modernizr.js') }}"></script>
        <script src="{{ asset('plugins/pricing-tables/js/main.js') }}"></script>
        <!-- Slim Photo -->
        <script src="{{ asset('plugins/slim/slim.kickstart.min.js') }}"></script>
        <!-- Mobile Input -->
        <script src="{{ asset('js/intlTelInput.min.js') }}"></script>
        <script src="{{ asset('js/landing.js') }}"></script>

    </body>
</html>