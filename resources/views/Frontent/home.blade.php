@extends('Frontent.layouts.main')
@section('content')

<div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="assets/images/slider/slider-4.jpg" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title"></h1>
                                    <p class="slider-text hidden-xs"></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-3.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">Bharat Parivar Trust</h1>
                                <p class="slider-text hidden-xs">Helping hand for needed people</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-5.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">Bharat Parivar Trust</h1>
                                <p class="slider-text hidden-xs">Helping hand for needed people</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-1.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">Bharat Parivar Trust</h1>
                                <p class="slider-text hidden-xs">Helping hand for needed people</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">Bharat Parivar Trust</h1>
                                <p class="slider-text hidden-xs">Economically support Economically support Economically support Economically support</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> 
    <!-- Slider end here-->

<div class="about-us container-fluid">
   <div class="container">
        <div class="row natur-row no-margin w-100">
			<div class="text-part col-md-6">
				
			<marquee width="60%" direction="left" height="100px"  onmouseover="this.stop();" onmouseout="this.start();">
			<h3 style="color:green;">Welcome To Bharat Parivaar Trust</h3> 	
			</marquee>

					
			   <h2>Welcome To Bharat Parivaar Trust</h2>
                <p>Here at Bharat Parivaar Trust we strongly believe together we can achieve the goal of helping the needful, with this thaught we have formed Bharat Parivaar Trust to empower rural lives through various models such as education, health and nutrition, providing economic assistance to poor for marriage and much more. We are dedicated to providing excellent education, health care and the confidence to become productive and self supporting individuals. </p>
              
            </div>
            <div class="image-part col-md-6">
                <div class="about-quick-box row">
                    <div class="col-md-6">
                        <div class="about-qcard">
                           <i class="fas fa-user"></i>
                            <p>Becom a Volunteer</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-search-dollar red"></i>
                            <p>Quick Fundrais</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-donate yell"></i>
                            <p>Giv Donation</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-hands-helping blu"></i>
                            <p>Help Someone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
