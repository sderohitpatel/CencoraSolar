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
            padding:10px 0;
        }
    </style>
        <div class="w-100" style="width:100vw">
            <img src="frontend/images/baner/about_us.png" style="width:100%">
        </div>
    <!-- ================== -->
        <div class="container" style="">
            <div class="row w-100 d-flex p-0 m-0" style="">
            <h2>About Us</h2>
                <p>
                At Cencora Solar & Scooter Limited, we are dedicated to revolutionizing transportation and energy solutions. Our mission is to provide innovative solar technology and eco-friendly scooters that not only reduce carbon footprints but also enhance the quality of urban mobility.

                With a commitment to sustainability, our solar products harness the sun's power, making renewable energy accessible for everyone. Our scooters are designed for efficiency, convenience, and fun, offering an eco-friendly alternative to traditional commuting methods.

                Join us in driving change and embracing a greener tomorrow. Together, we can make a positive impact on our environment and elevate the way we move!




                </p>
            <img src="frontend/images/Manufacturing-Edge.jpg" alt="" style="width:100%">
                
                <h2>Capacity</h2>
                <p>
                Our module manufacturing lines have an in-house production capacity of 670MW for modules and
                530MW of cells, can process both mono of 182mm and multi-crystalline cells of 158.25mm sizes.
                </p>
                <h2>Certification</h2>
                <p>
                Cencora Solar is India's premier ISO 9001, ISO 14001 & ISO 45001; IEC 61215, 61730, 61701, 62716, 60068 UL61730 certified integrated cell and module manufacturing facility.
                </p>
                <h2>Global footprint</h2>
                <p>
                With over 3GW of modules shipped globally in the past 33 years, our modules power some of the biggest industry and utility scale projects in North America and Europe in addition to India.
                </p>
            </div>
        </div>
    <!-- ================== -->

@endsection