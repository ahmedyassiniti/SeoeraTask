  <html lang="en" >
  <head>
    <meta charset="utf-8">
    <title style="margin: left;">Saiban</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
  media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/en_styles.css')}}">
    <link rel="icon" href="{{URL::asset('img/icon2.ico')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">`
    <meta name="author" content="">
    </head> 
     <body style="overflow-x: hidden !important;font-family: myfont !important;">
      <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593;</button>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse pull-right">
          <ul class="nav navbar-nav navbar-right">
            <li class="divider-vertical"></li> 
            <li class="menu-font" ><a  href="#" style="font-size: 40px !important;">Home<!--<span class="glyphicon glyphicon-plus pull-right"></span></span>--></a></li>
             <li class="divider-vertical"></li> 
            <li class="menu-font"><a href="#services">Services<!--<span class="glyphicon glyphicon-remove pull-right"></span>--></a></li>
          <li class="divider-vertical"></li> 
            <li class="menu-font" ><a href="#vision">Vision<span class="glyphicon pull-right"></span></a></li>
        <li class="divider-vertical"></li>            
   
          <li class="menu-font">
            <a href="#applications">Applications</a>
          <!--<a href="#" class="dropdown-toggle pull-right" data-toggle="dropdown">الخدمات<span class="caret"></span><span class="glyphicon  pull-right"></span></a>-->
          <!--
          <ul class="dropdown-menu pull-right" role="menu">
                  <li>
                 <a href="#">بيانات المؤلف
                    <div class="thumbnail">
                        <img class="img-responsive" src="http://blogs.adobe.com/captivate/files/2013/01/Picture1.jpg">
                    </div>
                    </a>
                  </li>
                        <li>
                 <a href="#">بيانات الكتاب
                    <div class="thumbnail">
                        <img class="img-responsive" src="http://img.talkandroid.com/uploads/2013/11/stack_of_books.jpg">
                    </div>
                    </a>
                  </li>
                   <li>
                 <a href="publisher_edit3.php">بيانات الناشرين 
                    <div class="thumbnail">
                        <img class="img-responsive" src="http://1.bp.blogspot.com/-a8GmNkPmB_s/UUbqYkCb5rI/AAAAAAAAACE/TCQikdw4Wzs/s1600/affiliate-publisher.png">
                    </div>
                    </a>
                  </li>
                   <li>
                 <a href="#">بيانات جهات الصرف 
                    <div class="thumbnail">
                        <img class="img-responsive" src="http://www.arabianbusiness.com/incoming/article272382.ece/BINARY/Qatari-riyal_thumb.jpg">
                    </div>
                    </a>
                  </li>
              </ul>
            -->
            </li>
         <li class="divider-vertical"></li> 
            <li class="menu-font" >
              <a href="#footer">
              Contact Us
            </a>
          </li>
        </ul>
     </div><!--/.nav-collapse -->
           <img src="{{URL::asset('img/logo 1.png')}}">
            <a class="nav-link" href="/home/" style="color:#000000;font-size: 17px;font-weight: 700;padding-top: 8px; padding-right: 0px !important;font-family: 'Avenir Next'; margin-left:30px;" id="convert-lang">AR</a>
    </div><!--nav bar-->

    <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                 <!-- First Slide -->

              <div class="item active">

                    <!-- Slide Background -->
                    <img src="{{URL::asset('headerImg.png')}}"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                         <div class="slide-text slide_style_left">
                              <!--  <h1 data-animation="animated zoomInRight">Bootstrap Carousel</h1>-->
                          <div data-animation="animated fadeInLeft" style="font-size: 85px;background-color:#00AEEF; margin: 10px; float: left;">Safe</div>
                                  <div data-animation="animated fadeInLeft" 
                                style="font-size: 97px; color:#00AEEF;  float: left;">Start with us</div>
                               <div data-animation="animated fadeInLeft" id="website-description" style=" border-color:#00AEEF; font-size: 29px;  float: left;">
                                 Siban Security Services is a security company classified in the first category (A) within the security companies officially approved by the Ministry of Interior in Saudi Arabia with Security License No. 489.
                                </div>
                          </div>
                      </div>
                    </div>
                </div>
                <!-- Second Slide -->
                  <div class="item">

                    <!-- Slide Background -->
                    <img src="{{URL::asset('img/MaskGroup2@2x.png')}}"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                         <div class="slide-text slide_style_left">
                              <!--  <h1 data-animation="animated zoomInRight">Bootstrap Carousel</h1>-->
                          <div data-animation="animated fadeInLeft" style="font-size: 85px;background-color:#00AEEF; margin: 10px; float: left;">Safe</div>
                                  <div data-animation="animated fadeInLeft" 
                                style="font-size: 97px; color:#00AEEF;  float: left;">Start with us</div>
                               <div data-animation="animated fadeInLeft" id="website-description" style=" border-color:#00AEEF; font-size: 29px;  float: left;">
                                 Siban Security Services is a security company classified in the first category (A) within the security companies officially approved by the Ministry of Interior in Saudi Arabia with Security License No. 489.
                                </div>
                          </div>
                      </div>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
             <div class="item">

                    <!-- Slide Background -->
                    <img src="{{URL::asset('img/MaskGroup2@2x.png')}}"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                         <div class="slide-text slide_style_left">
                              <!--  <h1 data-animation="animated zoomInRight">Bootstrap Carousel</h1>-->
                          <div data-animation="animated fadeInLeft" style="font-size: 85px;background-color:#00AEEF; margin: 10px; float: left;">Safe</div>
                                  <div data-animation="animated fadeInLeft" 
                                style="font-size: 97px; color:#00AEEF;  float: left;">Start with us</div>
                               <div data-animation="animated fadeInLeft" id="website-description" style=" border-color:#00AEEF; font-size: 29px;  float: left;">
                                 Siban Security Services is a security company classified in the first category (A) within the security companies officially approved by the Ministry of Interior in Saudi Arabia with Security License No. 489.
                                </div>
                          </div>
                      </div>
                    </div>
                </div>
                <!-- End of Slide -->
            </div><!-- End of Wrapper For Slides -->
            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div><br>
      
      <div style="width: 42%;
    height: 43px;
    border-bottom: 3px solid black;
    text-align: center;
    position: relative;
    right: -356px;
    top: 0px;
    bottom: 20px;" id="services">
        <span style="font-size: 64px; background-color: #F3F5F6; padding: 0 10px; color:#007cb6;">
          Services <!--Padding is optional-->
        </span>
      </div>
      <br><br><br>
           <div class="container">
            <img src="{{URL::asset('img/Rectangle 26@2x.png')}}" style="display: inline;padding: 10px;">
             <img src="{{URL::asset('img/Rectangle 24@2x.png')}}">
            </div>
         
              <div class="container">
                 <img src="{{URL::asset('img/Rectangle 28@2x.png')}}" style="display: inline;padding: 10px;">
                 <img src="{{URL::asset('img/Rectangle 30@2x.png')}}">
              </div>
    
        
       <div id="vision" style="width: 42%;
    height: 43px;
    border-bottom: 3px solid black;
    text-align: center;
    position: relative;
    right: -356px;
    top: 0px;
    bottom: 20px;" >
        <span style="font-size: 64px; background-color: #F3F5F6; padding: 0 10px; color:#007cb6;">
          Vision<!--Padding is optional-->
        </span>
      </div>
       <br><br><br>
        <div>
            <img style="width: 100%" src="{{URL::asset('img/MaskGroup2@2x.png')}}"/>
        </div>
    <div id="applications" style="width: 42%;
    height: 43px;
    border-bottom: 3px solid black;
    text-align: center;
    position: relative;
    right: -356px;
    top: 0px;
    bottom: 20px;">
        <span style="font-size: 64px; background-color: #F3F5F6; padding: 0 10px; color:#007cb6;">
          Applications
        </span>
      </div>
        <br><br><br>
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-offset-2 col-md-3 col-sm-4">
          <div class="wrimagecard wrimagecard-topimage" style="background-color: whitesmoke !important;">
           
          <div class="wrimagecard-topimage_header" style="background-color:#1A436A; ">
          </div><br>
           <center><img src="{{URL::asset('img/pic1.png')}}"></center>
          <div class="wrimagecard-topimage_title">
            <h2 style="text-align: center;color:#007cb6; font-size: 50px;">Incident reports</h2>
          </div><br><br><br><br>
        <p style="font-size: 24px;"> Believing in the importance of developing our business and excellence for all companies working in the field and in order to apply the highest quality standards and the development of security management and application of modern technology to provide detailed reports to help make decisions We designed an application</p>
      </div>
      </div>
    <div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage" style="background-color: whitesmoke !important;">
          
          <div class="wrimagecard-topimage_header" style="background-color:#1A436A;">
          </div><br>
          <center><img src="{{URL::asset('img/Group 17@2x (1) (2).png')}}"></center>
          <div class="wrimagecard-topimage_title">
            <p style="text-align: center;color:#007cb6; font-size: 50px;">مراقبة تواجد الافراد</p>
            
          </div><br><br><br><br>
         <p style="font-size: 24px;"> Believing in the importance of developing our business and excellence for all companies working in the field and in order to apply the highest quality standards and the development of security management and application of modern technology to provide detailed reports to help make decisions We designed an application</p>
      </div>
</div>
<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage" style="background-color: whitesmoke !important;">
          
          <div class="wrimagecard-topimage_header" style="background-color:#1A436A;">
            
          </div><br>
          <center><img src="{{URL::asset('img/pic2.png')}}"></center>
          <div class="wrimagecard-topimage_title" >
            <h2 style="text-align: center;color:#007cb6; font-size: 50px;">Schedule of escorts</h2>
           </div><br><br><br><br>
          <p style="font-size: 24px;"> Believing in the importance of developing our business and excellence for all companies working in the field and in order to apply the highest quality standards and the development of security management and application of modern technology to provide detailed reports to help make decisions We designed an application</p>
          </div>
  </div>
  <div class=" col-md-offset-2 col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage" style="background-color: whitesmoke !important;">
          
          <div class="wrimagecard-topimage_header" style="background-color:#1A436A;">
             
          </div><br>
          <center><img src="{{URL::asset('img/pic3.png')}}"></center>
          <div class="wrimagecard-topimage_title">
            <h2 style="text-align: center;color:#007cb6; font-size: 50px;">تسجيل الحضور والانصراف</h2>
         </div><br><br><br><br>
         <p style="font-size: 24px;">Believing in the importance of developing our business and excellence for all companies working in the field and in order to apply the highest quality standards and the development of security management and application of modern technology to provide detailed reports to help make decisions We designed an application</p>
      </div>
  </div>
  <div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage" style="background-color: whitesmoke !important;">
          
          <div class="wrimagecard-topimage_header" style="background-color:#1A436A;">
             
          </div><br>
          <center><img src="{{URL::asset('img/pic4.png')}}"></center>
          <div class="wrimagecard-topimage_title">
            <h2 style="text-align: center;color:#007cb6; font-size: 50px;">Advanced Reports</h2>
            
          </div><br><br><br><br>
       <p style="font-size: 24px;">Believing in the importance of developing our business and excellence for all companies working in the field and in order to apply the highest quality standards and the development of security management and application of modern technology to provide detailed reports to help make decisions We designed an application</p> 
      </div>
  </div>
  <div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage" style="background-color: whitesmoke !important;">
          
            <div class="wrimagecard-topimage_header" style="background-color:#1A436A;">
           
          </div><br>
          <center><img src="{{URL::asset('img/pic5.png')}}"></center> 
          <div class="wrimagecard-topimage_title">
            <h2 style="text-align: center;color:#007cb6; font-size: 50px;">Tracking Periodicals</h2>
           </div><br><br><br><br>
          <p style="font-size: 24px;">Believing in the importance of developing our business and excellence for all companies working in the field and in order to apply the highest quality standards and the development of security management and application of modern technology to provide detailed reports to help make decisions We designed an application</p>
     
      </div>
  </div>
 </div>
</div>

<div class="row">
    <div class="container col-sm-offset-3 col-md-6">
        <img src="{{URL::asset('img/Mask Group 6.png')}}" style="display: inline;margin: 10px;"> 
        <img src="{{URL::asset('img/Mask Group 5.png')}}">
   </div>
 </div>
   <div style="width: 42%;
    height: 25px;
    border-bottom: 3px solid black;
    text-align: center;
    position: relative;
    right: -356px;
    top: 0px;
    bottom: 20px;">
        <span style="font-size: 40px; background-color: #F3F5F6; padding: 0 10px; color:#007cb6;">
          Our Clients
        </span>
      </div>
     <br><br>

<div id="carousel-client" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active container">
        <img class="col-md-3 col-sm-5 col-xs-7 logo-client img-circle client-image" src="{{URL::asset('img/company1.png')}}" alt="...">
        <img class="col-md-3 col-sm-5 col-xs-7 logo-client img-circle client-image" src="{{URL::asset('img/company2.png')}}" alt="...">
        <img class="col-md-3 col-sm-5 col-xs-7 logo-client img-circle client-image" src="{{URL::asset('img/company3.png')}}" alt="...">
        <img class="col-md-3 col-sm-5 col-xs-7 logo-client img-circle client-image" src="{{URL::asset('img/company4.png')}}" alt="...">
    </div>
    
    <div class="item container">
       <img class="col-md-3 col-sm-5 col-xs-7 logo-client img-circle client-image" src="{{URL::asset('img/company1.png')}}" alt="...">
        <img class="col-md-3 col-sm-5 col-xs-7 logo-client img-circle client-image" src="{{URL::asset('img/company2.png')}}" alt="...">
        <img class="col-md-3 col-sm-5 col-xs-7 logo-client img-circle client-image" src="{{URL::asset('img/company3.png')}}" alt="...">
        <img class="col-md-3 col-sm-5 col-xs-7 logo-client img-circle client-image" src="{{URL::asset('img/company4.png')}}" alt="...">
      </div>
    
    <div class="item container">
        <img class="col-md-3 col-sm-5 col-xs-7 logo-client img-circle client-image" src="{{URL::asset('img/company1.png')}}" alt="...">
        <img class="col-md-3 col-sm-5 col-xs-7 logo-client img-circle client-image" src="{{URL::asset('img/company2.png')}}" alt="...">
        <img class="col-md-3 col-sm-5 col-xs-7 logo-client img-circle client-image" src="{{URL::asset('img/company3.png')}}" alt="...">
        <img class="col-md-3 col-sm-5 col-xs-7 logo-client img-circle client-image" src="{{URL::asset('img/company4.png')}}" alt="...">
     </div>   
  </div>

    <div class="crousel-client" >
    <!-- Controls -->
    <a class="left" href="#carousel-client" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
       <a class="right" href="#carousel-client" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          
      </div>
  
</div>
<br><br>
<!-- Footer -->
  <section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <p style="font-size: 40px; color: white;">Contact Us</p>
          <ul class="list-unstyled quick-links">
            <li><label style="font-size: 30px; color: white;">Name</label>&nbsp;&nbsp;<input type="text"></li>
            <li><label style="font-size: 30px; color: white;">Email</label>&nbsp;&nbsp;<input type="text"></li>
            <li><label style="font-size: 30px; color: white;">Telephone</label>&nbsp;&nbsp;<input type="text"></li>
            <li><label style="font-size: 30px; color: white;">Message</label>&nbsp;&nbsp;
              <textarea rows="2" cols="25"></textarea></li>
            <li><input type="submit" name="" value="Send"></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
        <img src="{{URL::asset('img/logo.png')}}">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
        <ul class="list-unstyled quick-links">
            <li><p style="font-size: 23px; color: white;"><i class="fa fa-map-marker" aria-hidden="true"></i>Jeddah, Prince Mohammed bin Abdul Aziz Street</p></li>
       <li>
        <p style="font-size: 25px; color: white;">
          <i class="fa fa-volume-control-phone" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;0126755594<br>05555555555555</p></li>
            <li><p style="font-size: 25px; color: white;"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@saiban.sa<br>Zip code 13164&nbsp;&nbsp;Jeddah 21493</p></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i>
            </a></li> 
           <li class="list-inline-item"><a href="https://www.google.com.eg/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>    
              <li class="list-inline-item"><a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i>
              </a></li>
           </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
         <p class="h6" style="font-size: 20px; color: white;">Copyright&copy2018<a class="text-green ml-2" href="#" target="_blank" style="color: black;">Saiban.</a>All rights reserved</p>
        </div>
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="{{URL::asset('js/slider.js')}}"></script>
      <script type="text/javascript">
          // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
      $('#bootstrap-touch-slider').bsTouchSlider();
     </script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
   </body>
</html>
