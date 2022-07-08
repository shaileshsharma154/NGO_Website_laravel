@extends('Frontent.layouts.main')
@section('content')
<!--  ************************* Page Title Starts Here ************************** -->
        
<div class="page-nav no-margin row">
        <div class="container">
            <div class="row">


            <div class="row cont-row" id="SuccessMessage">
                
                   <div  class="col-sm-12">
                        @if(session('msg'))
                            <div class="alert alert-success">{{session('msg') }}</div>
                        @endif
                    </div>
            </div>

                <h2>Contact Us</h2>
                <ul>
                    <li> <a href="https://www.bharatparivaartrust.org/index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Contact US</li>
                </ul>
            </div>
        </div>
    </div>
    
    
   
  <!--  ************************* Contact Us Starts Here ************************** -->


    <div style="margin-top:0px;" class="row no-margin">



<iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113455.80039286442!2d82.89878179891497!3d27.2977315482706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3996dda7f00771b3%3A0x9148e1dbfa3c23ee!2sDeora%20bazar!5e0!3m2!1sen!2sin!4v1653486095113!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">
            
            

                <div style="padding:20px" class="col-sm-7">
				<?php
					$message= "";
					if(isset($_REQUEST['message']) && $_REQUEST['message']!='') {
					$message = trim($_REQUEST['message']);
					}
				?>
				<h2 class="text-success"><?php echo $message; ?></h2> <br>
				
                   <form action="{{url('/')}}/fetchEnquiryFormData" method="post"> 
                    @csrf
                    <?php /*
       // print_r($errors->all());  //for all error
    */ ?>

					<h2 >Contact Form</h2> <br>
                    <div class="row cont-row">
                        <div  class="col-sm-3"><label>Enter First Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="first_name" value="" class="form-control input-sm"  >
                        @error('first_name')
                        <div class="text text-danger">{{$message}}</div>
                    @enderror
                    </div>
                    </div>
                    

					<div class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Last Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="last_name" value="" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="email_id" value="" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="mobile_number" value="" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message" name="message" value="" class="form-control input-sm" ></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-sm">Send Message</button>
                        </div>
                    </div>
				</form>
              </div>
			
                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">

  <br> 
						 <br>
						 <br>

                        <h2 style="margin-top:10px;">Address</h2>

                       Bharat Parivaar Trust, <br>
                       Gram: Sisawa buzurg<br>
                       Poast: Deovra Bazar<br>
					   Siddharath Nagar<br>
					   Uttar Pradesh (272207), INDIA <br>
                        Phone:  
						<a href="tel:9151510928">+91 9151510928</a>
						<a href="tel:77270 64504">+91 7727064504</a> <br>
                        Email: <a href="mailto:bharatparivaartrust@gmail.com" class="">bharatparivaartrust@gmail.com</a><br>
                        Web: <a href="https://www.bharatparivaartrust.org/" class="" target="_blank">www.bharatparivaartrust.org</a>

                    </div>
					
					<a href="assets/images/team/membership_Form.pdf" target="_blank" title="Download Membership Form"><i class="fa fa-download"> Download Membership Form</i></a>
					
					<marquee width="60%" direction="left" height="100px"  onmouseover="this.stop();" onmouseout="this.start();">
						
						<a href="assets/images/team/membership_Form.pdf" target="_blank" style="color:red;">Click & Download the membership form </a>
						
					</marquee>

                </div>

            </div>
        </div>

    </div>
   
<script>
$(document).ready(function() {
      setTimeout(function() {
          $("#SuccessMessage").fadeOut(1500);
      }, 3000);
 
});
    </script>

@endsection	 	