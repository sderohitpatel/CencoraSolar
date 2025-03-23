@extends('layout')

@section('title')
    <title>Cencora</title>
@endsection

@section('frontend-content')

      <!-- <div class="row-3">
                <div class="slider">
                    <figure class="inner">
                        <img src="frontend/images/image1.jpg" alt="" class="img">
                        <img src="frontend/images/image2.jpg" alt="" class="img">
                        <img src="frontend/images/image3.jpg" alt="" class="img">
                        <img src="frontend/images/image4.jpg" alt="" class="img">
                        <img src="frontend/images/image3.jpg" alt="" class="img"> 
                    </figure>
                </div>
            </div> -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <!-- Indicators (Optional) -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <!-- Carousel Images -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="frontend/images/baner/banner2.jpg" class="d-block w-100" alt="First Slide">
                </div>
                <div class="carousel-item">
                    <img src="frontend/images/baner/banner1.png" class="d-block w-100" alt="Second Slide">
                </div>
                <div class="carousel-item">
                    <img src="frontend/images/baner/banner3.jpg" class="d-block w-100" alt="Second Slide">
                </div>
               
                </div>
    <style>
        .carousel-control-prev,.carousel-control-next{
            position:absolute;
            top:40%;
        }
        
    
    </style>
                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
            
            <div class="sidebar">
                <div class="rows rows1"> 
                    <a href=""><i class="fas fa-phone-alt"></i><li>Cencora Solar Query <i class="fas fa-circle" id="bullet"></i></li></a>
                </div>
                <div class="rows rows2">
                    <a href=""><i class="fas fa-chess-queen"></i><li>Our Employee</li></a>
                </div>
                <div class="rows rows3">
                    <a href=""><i class="fas fa-user"></i><li>Registration Apply Online</li></a>
                </div>
                <div class="rows rows4">
                    <a href=""><i class="fas fa-cart-arrow-down"></i><li>Online Fee Payment</li></a>
                </div>
            </div> 
        
    
    <div class="small-cantainer">
        <div class="row row-4">
            <div class="col">Covid-19 Free Camapus @ CSS</div>
             <div class="col"> Registration (Online 2021) <i class="fas fa-circle" id="bullet"></i></div>
        </div>
        
    </div>
    <div class="container-xxl mb-3">
        <div class="row d-flex align-item-center">
            <div class="col-md-7 notification_container">
                <h4 class=" text-white">Job Vacancies</h4>
                <div class="notification_body p-2">
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title">Software Engineer</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>  
                    
                </div>
            </div>
            <div class="col-md-4 notification_container">
                <h4 class=" text-white">Latest News</h2>
                <div class="notification_body p-2">
                <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title">Software Engineer</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Apply Now</a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
        <!-----Academic Excellence and Admisions Query---->

        <div class="small-cantainer-1">
            <div class="row-5">
                <div class="col_1">
                    <h1>Cencora Solar <span>Excellence</span></h1>
                    <img src="frontend/images/baner/sad.jpg" alt="">
                    <p>
Absolutely! Here’s a brief overview for Cencora Solar & Scooter Company that highlights its mission and offerings:

Cencora Solar & Scooter Company: Powering a Sustainable Future

At Cencora Solar & Scooter Company, we believe in a world where innovation and sustainability go hand in hand. Our mission is to empower individuals and communities by providing clean, renewable energy solutions and eco-friendly transportation options.                   </p>
                    <p>The spacious lecture halls, e-class rooms, Conference
                         Halls, Induction Halls, Auditorium,Meeting rooms are 
                         well equipped with all latest...
                    </p>
                    <a class="btn">Read More &#8594;</a>
                    
                </div>
                <div class="col_2">
                <h1><span>Enquiry</span> Form</h1>
                    <form action="index.php" method="post">
                        <input type="text" placeholder="Your Name" >
                        <input type="email" placeholder="Email Address">
                        <input type="text" placeholder="Mobile Number">
                        <input type="text" placeholder="Postal Address">
                        <select name="" id="">
                            <option value="" disabled selected>Please Select State</option>
                            <option value="">Delhi</option>
                            <option value="">..</option>
                        </select>
                        <textarea name="desc" placeholder="Description" id="" cols="10" rows="3" style="font-size:12px;width:100%; padding:5px;"></textarea>
                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!----- Rating Facility ----->
        <div class="small-cantainer-2" style="background-image: url('frontend/images/baner/banner4.jpg')">
            <div class="row-6">
                <div class="col_1">
                    <img src="frontend/images/img3.svg" alt="">
                    <h1>25000*</h1>
                    <span>Vacancies</span>
                    <P>GIVEN BY Cencora Solar</P>
                </div>
                <div class="col_1">
                    <img src="frontend/images/img2.svg" alt="">
                    <h1>11400*</h1>
                    <span>Employement</span>
                    <P>OFFERED ON COMPANIES</P>
                </div>
                <div class="col_1">
                    <img src="frontend/images/img1.svg" alt="">
                    <h1>14000*</h1>
                    <span>AlUMNI</span>
                    <P>AlUMNI PAN INDIA</P>
                </div>
                <div class="col_1">
                    <img src="frontend/images/img4.svg" alt="">
                    <h1>11200*</h1>
                    <span>EMPLOYEES</span>
                    <P>OUR COMPANY</P>
                </div>
            </div>
        </div>

        
        <!-------Employee Testimonial------->
    
        <div class="small-cantainer-4">
            <h2>Our Employee</h2>
            <div class="row-8">
                <div class="col_3">
                    <div class="box">
                        <i class="fas fa-quote-left"></i>
                        <p>As an Electronic Engineer, I am dedicated to designing,
                         developing, and optimizing innovative electronic systems
                          that enhance our everyday lives. 
                        </p>
                            <div class="rating">
                                <i class="fas fa-star" id="bullet"></i>
                                <i class="fas fa-star" id="bullet"></i>
                                <i class="fas fa-star" id="bullet"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        <img src="frontend/images/asrar.jpg" alt="">
                        <h3>Mr. ASRAR BARI</h3>
                        <P>Electronic Engineer,</P>
                    </div>
                </div>

                <div class="col_3">
                    <div class="box">
                        <i class="fas fa-quote-left"  ></i>
                        <p>As a solar engineer, you are dedicated to harnessing 
                        the power of the sun to create sustainable energy solutions.
                         With a strong background in technology and a passion for 
                         renewable energy,  </p>
                            <div class="rating">
                                <i class="fas fa-star" id="bullet"></i>
                                <i class="fas fa-star" id="bullet"></i>
                                <i class="fas fa-star-half-alt" ></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        <img src="frontend/images/engineer1.PNG" alt="">
                        <h3>Mr. DEEPAK KUSHWAHA</h3>
                        <p>Solar Engineer</p>
                    </div>
                </div>

                <div class="col_3">
                    <div class="box">
                        <i class="fas fa-quote-left"  ></i>
                        <p>As a Enviornment engineer, you are dedicated to harnessing 
                        the power of the sun to create sustainable energy solutions.
                         With a strong background in technology and a passion for 
                         renewable energy,  </p>
                            <div class="rating">
                                <i class="fas fa-star" id="bullet"></i>
                                <i class="fas fa-star" id="bullet"></i>
                                <i class="fas fa-star-half-alt" ></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        <img src="frontend/images/engineer2.PNG" alt="">
                        <h3>Mis. Annju Mishraa</h3>
                        <p>Enviornment Engineer</p>
                    </div>
                </div>

                <div class="col_3">
                    <div class="box">
                        <i class="fas fa-quote-left"  ></i>
                        <p>As a machanical engineer, you are dedicated to harnessing 
                        the power of the sun to create sustainable energy solutions.
                         With a strong background in technology and a passion for 
                         renewable energy,  </p>
                            <div class="rating">
                                <i class="fas fa-star" id="bullet"></i>
                                <i class="fas fa-star" id="bullet"></i>
                                <i class="fas fa-star-half-alt" ></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        <img src="frontend/images/engineer3.jpg" alt="">
                        <h3>Mis. Rajesh Kumar</h3>
                        <p>Machanical Engineer</p>
                    </div>
                </div>

                
            </div>
        </div>
        <!--=========Testimonial Start=============-->

        <div class="small-cantainer-3 " style="background-image: url('frontend/images/Manufacturing-Edge.jpg')">
            <div class="row-7 ">
                <h2>INTERN MEMBER TESTIMONIAL</h2>
                <div class="slider">
                    <div class="inner">
                    <div class="col_1 img">
                            <img src="frontend/images/intern1.jpg" alt="">
                            <p>Throughout my two years of MBA, 
                            I had countless opportunities to develop 
                            analytical skills, leadership and proactive 
                            thinking through various programs and events.</p>
                            <h3>SUMIT SINGH</h3>
                            <P>AKTU Final Top 10 Rank 8 MBA</P>
        
                        </div>
                        <div class="col_1 img">
                            <img src="frontend/images/intern2.jpg" alt="">
                            <p>Throughout my two years of MBA, 
                            I had countless opportunities to develop 
                            analytical skills, leadership and proactive 
                            thinking through various programs and events.</p>
                            <h3>KRISHNA PANDEY</h3>
                            <P>AKTU Final Top 10 Rank 8 MBA</P>
        
                        </div>
                        <div class="col_1 img">
                            <img src="frontend/images/intern3.jpg" alt="">
                            <p>Throughout my two years of BTECH, 
                            I had countless opportunities to develop 
                            analytical skills, leadership and proactive 
                            thinking through various programs and events.</p>
                            <h3>SHUBHAM SINGH</h3>
                            <P>AKTU Final Top 10 Rank 8 BTECH</P>
        
                        </div>
                        <div class="col_1 img">
                            <img src="frontend/images/intern4.jpg" alt="">
                            <p>Throughout my two years of BCA, 
                            I had countless opportunities to develop 
                            analytical skills, leadership and proactive 
                            thinking through various programs and events.</p>
                            <h3>SHUBHAM SINGH</h3>
                            <P>AKTU Final Top 100 Rank 8 BCA</P>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=========Testimonial End=============-->

@endsection