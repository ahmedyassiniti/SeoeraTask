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
                <div class="row row justify-content-center">
                    <div class="home-text col-md-8">
                         <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
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
        <!--====  End of Home Section  ====-->
        
        

        <!--====================================
        =            Footer Section            =
        =====================================-->
        <footer>
            <div class="container">
                <p class="text-center no-s">2017 &copy; FiveFighters.</p>
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