<?php
include_once('header.php');
?>
    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
	            <h1 class="mb-4 bread">Rooms</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
	        
		    		
		    			<div class="col-sm col-md-6 col-lg-12 ftco-animate">
		    				<div class="card">
               
                  <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-hover">
                      
                      <thead>
                        <tr>
                          
                          <th scope="col">book_id</th>
                          <th scope="col">room_cate</th>
                          <th scope="col">check_in</th>
                          <th scope="col">check_out</th>
                          <th scope="col">shift_cate</th>
                          <th scope="col">in_time</th>
                          <th scope="col">out_time</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php
                          foreach($booking_arr as $data)
                          {
                      ?>
                      
                        <tr>
                          
                          <td><?php echo $data->book_id;?></td>
                          <td><?php echo $data->room_cate;?></td>
                          <td><?php echo $data->check_in;?></td>
                          <td><?php echo $data->check_out;?></td>
                          <td><?php echo $data->shift_cate;?></td>
                          <td><?php echo $data->in_time;?></td>
                          <td><?php echo $data->out_time;?></td>

                          
                        </tr>
                        </tbody>                        
                    
                      <?php 
                          }
                        ?>
                    </table>
                  </div>
                  </div>
                </div>
		    			</div>
		    		
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