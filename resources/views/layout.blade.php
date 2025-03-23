<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
       
        @yield('title','CencoraSolar')
    

    <!----Link CSS file---->
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="frontend/css/style.css">

    <!----Link Icon File---->
    <link rel="stylesheet" href="frontend\icon\fontawesome-free-5.15.3-web\fontawesome-free-5.15.3-web\css\all.css">

    <!----Link @media Screen file---->
    <link rel="stylesheet" href="frontend\css\@media-screen.css">

    <!----- Custom CSS ------>
    <link rel="stylesheet" href="frontend\custom_css\style.css">

</head>
<body style="width: 100% !important;">
   
    

            <div class="row-1" >
                    <div class="col_1 col-6 d-flex justify-content-center" >
                        <!-- <ul> -->
                        <li><i class="fas fa-phone-alt"></i> 1800 3131 808</li> <li><i class="fas fa-envelope"></i> infor@CSS.ac.in<i>(Kolkata)</i></li> <li><i class="fas fa-phone-alt"></i> 1800 103 3372 </li> <li> <i class="fas fa-envelope"></i> infogn@CSS.ac.in(KLKT)</li>
                        <!-- </ul> -->
                    </div>
                    <div class="col_1 col-6 d-flex justify-content-center">
                        <!-- <ul> -->
                            <li>CSS Vacancies <i class="fas fa-circle" id="bullet"></i></li> <li> Bank Pay In Slip <i class="fas fa-circle" id="bullet"></i></li> <li>India Best Company CSS <i class="fas fa-circle" id="bullet"></i></li>   <i class="fab fa-youtube"></i> <i class="fab fa-facebook"></i> <i class="fab fa-linkedin-in"></i>
                        <!-- </ul> -->
                    </div>
               
            </div>
            <div class="row-2 d-flex" style="padding: 0 40px">
                    <div class="col_2 col-lg-3">
                        <div class="logo">
                            <img src="frontend/images/logo-png.png" alt="" style="width:200px">
                        </div>
                    </div>
                    <div class="col_2 col-lg-9">
                        <div class="menu float-end" id="Maintain">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('aboutUs')}}">About Us</a></li>
                                <li class="dropdown">
                                    <a >Crown Solar <i class="fas fa-angle-down"></i></a>
                                    <div class="dropdown-menu">
                                        <a href=""><i class="fas fa-star"></i> History</a>
                                        <a href=""><i class="fas fa-star"></i> Vision & Mision</a>
                                        <a href=""> <i class="fas fa-star"></i> Faculty <i class="fas fa-circle" id="bullet"></i></a>
                                        <a href=""><i class="fas fa-star"></i> Advisory Council</a>
                                        <a href=""><i class="fas fa-star"></i> Our Leaders</a>
                                        <a href=""><i class="fas fa-star"></i> Distributers</a>
                                    </div>
                                </li>

                              
                               
                                <li><a href="index.php">Gallery</a></li>
                                <li><a href="{{route('contactUs')}}">Contact Us</a></li>
                                
                            </ul>
                        </div>
                        <div class="col_2"><a onclick="ToggleOpen();"><img src="frontend/images/menu.png" alt="" width="30px" id="menu"></a></div>

                    </div>      
            </div>
        <!-- header End -->

        @yield('frontend-content')

    
        <!----footer Start----->

        <div class="footer" style="background:url('frontend/images/banner_gb2.jpg'); background-size:cover">
            <div class="row-9">
                <div class="col_4">
                    <h2>About Us</h2>
                    <p>Cencora Solar & Scooter is committed to a sustainable future through cutting-edge solar 
                    technology and eco-friendly scooters. Our electric scooters offer a smart, 
                    efficient way to travel while reducing your carbon footprint.
                     Join us in revolutionizing urban mobility and embracing renewable energy.</p>
                           <a class="btn1">Read More &#8594;</a>

                </div>

                <div class="col_4">
                    <h2>Corporate Office</h2>
                    <h5>Cencora Solar & Scooter's, Muraripukur,</h4>
                    <h6>Muraripukur Lane, P.O. Ultadanga, Kolkata, Pin- 700067(West Bengal)</h5>
                    <h6>Phone : +91 8188966459</h5>
                    <h6>Email : Cencorasolarscooter@gmail.com</h5>
                </div>

                <div class="col_4">
                    <h2>Download Links</h2>
                    <ul class="d-flex flex-column ">
                        <li><i class="fas fa-circle" id="bullet"></i> CSS Brochure</li>
                        <li><i class="fas fa-circle" id="bullet"></i> Registration Form</li>
                        <li><i class="fas fa-circle" id="bullet"></i> Placement Brochure</li>
                        <li><i class="fas fa-circle" id="bullet"></i> The CSS Newslatter</li>
                        <li><i class="fas fa-circle" id="bullet"></i> CSS Brochure</li>
                    </ul>
                </div>
                
                <div class="col_4">
                    <h2>Query</h2>
                    <h5>FAQ</h4>
                    <h5>Contact</h4>
                </div>
            </div>
            <hr>
            <h5 style="margin-top: 10px; text-align: center;">Copyright@2024CSS</h5>
        </div>


        <!------------Toggle for menu------------->

        <script>
            var Maintain=document.getElementById("Maintain");
            Maintain.style.maxHeight="0px";

            function ToggleOpen(){
                if(Maintain.style.maxHeight=="0px"){
                    Maintain.style.maxHeight="400px";
                }
                else{
                    Maintain.style.maxHeight ="0px";
                }

            }
        </script>
    <!-- Bootstrap JS Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>