@extends('layout')

@section('title')
    <title>About Us</title>

@endsection

@section('frontend-content')

<style>
    .container{
        margin:10px auto;
        border:1px solid rgb(141, 136, 136);
        border-top:7px solid darkblue;
        border-radius:5px;
        /* height:1000px; */
        padding:10px 0;
    }
</style>
    <div class="w-100" style="width:100vw">
        <img src="frontend/images/contact_us1.jpg" style="width:100%">
    </div>
<!--  -->

    <div class="container" style="">
        <div class="row w-100 d-flex p-0 m-0" style="">
        <h2>Contact Us</h2>
         <div class="row " style="margin:auto">
            <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Head Office:</h5>
                            <span><i>Mr. Dinesh Kumar Shukla – Chief Executive</i></span>
                            <div >
                                <p class="p-0 m-0">Muraripukur Lane, P.O. Ultadanga, Kolkata, Pin- 700067(West Bengal)</p>
                                <p class="p-0 m-0"><i class="fas fa-phone-alt"></i> <small><b>Mobile</b></small><i> +91 8188966459</i></p>
                                <p class="p-0 m-0"><small><i class="fas fa-phone-alt"></i> <b>Phone</b></small><i> 040 2309 1373, Telefax: 040 2319 5702</i></p>
                                <p class="p-0 m-0"><small><i class="fas fa-envelope"></i> <b>Email</b></small><i class="text-danger"> Cencorasolarscooter@gmail.com</i></p>
                                
                            </div>
                        </div>
                    </div> 
        </div>
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
                <div class="col_2" >
                <h1><span>Enquiry</span> Form</h1>
                    <form action="contact_us.php" method="post">
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
    </div>

@endsection