<?php

include_once('header.php');
?>

<script>
$(document).ready(function(){
  $("#room_cate").change(function(){
    if($("#room_cate").val()=="fullday"){
    $("#shift_cate").hide(1000);
    $("#in_time").hide(1000);
    $("#out_time").hide(1000);
    $("#check_out").show(1000);
  }});
  $("#room_cate").change(function(){
  if($("#room_cate").val()=="halfday"){
    $("#shift_cate").show(1000);
    $("#in_time").show(1000);
    $("#out_time").show(1000);
    $("#check_out").hide(1000);
  }});
  $("#room_cate").change(function(){
  if($("#room_cate").val()=="roomtype"){
    $("#shift_cate").show(1000);
    $("#in_time").show(1000);
    $("#out_time").show(1000);
    $("#check_out").show(1000);
  }});
    });
  </script>
    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> </p>
	            <h1 class="mb-4 bread">Booking</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
	       <div class="col-lg-3">
	       </div>
		    	<div class="col-lg-6">
	      		<div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4">Advanced Search</h3>
	      			<form action="#" method="post">
	      				<div class="fields">
	      					<div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    
	                    	<label>Room Type</label>
	                    	<select name="room_cate" id="room_cate" class="form-control">
                        <option name="roomtype" id="roomtype" value="roomtype">Select Room Type</option>
                        <option name="fullday" id="fullday" value="fullday" >Full Day</option>
                        <option name="halfday" id="halfday" value="halfday" >Half Day</option>
                        <option>custom</option>
                        

                        
                      </select>
	                    	
	                  </div>
		              </div>
		              <div class="form-group">
		              	<label>Check In Date</label>
		                <input type="date" class="form-control" placeholder="Check In Date" name="check_in" >
		              </div>
		              <div class="form-group">
		              	<label>Check Out Date</label>
		                <input type="date" class="form-control" placeholder="Check Out Date" name="check_out" id="check_out">
		              </div>
		              
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span>
	                    </div>
	                    <label>Shift Type</label>
	                    	<select name="shift_cate" id="shift_cate" class="form-control">
                        <option value="">Select Shift Type</option>
                        <option name="morning" id="morning" value="morning" >Morning</option>
                        <option name="evening" id="evening" value="evening" >Evening</option>
                        
                      </select>
	                    
	                  </div>
		              </div>
		              <div class="form-group">
		              	<label>Check In Time</label>
		                <input type="time" id="in_time" class="form-control" placeholder="Check In time" name="in_time">
		              </div>

		               <div class="form-group">
		              	<label>Check Out Time</label>
		                <input type="time" id="out_time" class="form-control" placeholder="Check Out time" name="out_time">
		              </div>
		             
		              <div class="form-group">
		                <input type="submit" value="Booking" name="booking" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
	      		</div>
	      	
	        </div>
	        <div class="col-lg-3">
	       </div> 
		    </div>
    	</div>
    </section>


    <section class="instagram pt-5">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-1.jpg" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-2.jpg" class="insta-img image-popup" style="background-image: url(images/insta-2.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-3.jpg" class="insta-img image-popup" style="background-image: url(images/insta-3.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-4.jpg" class="insta-img image-popup" style="background-image: url(images/insta-4.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-5.jpg" class="insta-img image-popup" style="background-image: url(images/insta-5.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
<?php
include_once('footer.php');
?>