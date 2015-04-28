
   
   
   <div role="main" class="main">

				

				<!-- Google Maps -->
				
                <div class="google_map">
                <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:1600px;"><div id="gmap_canvas" style="height:400px;width:1600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:11,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
               </div>
				
				<div class="container">

					<div class="row">
						<div class="col-md-6">

							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
							</div>

							<h2 class="short"><strong>Contact</strong> Us</h2>
							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="row margn_top">
									<div class="form-group">
										<div class="col-md-6">
											<label>Your name *</label>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
										</div>
										<div class="col-md-6">
											<label>Your email address *</label>
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
										</div>
									</div>
								</div>
								<div class="row margn_top">
									<div class="form-group">
										<div class="col-md-12">
											<label>Subject</label>
											<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject">
										</div>
									</div>
								</div>
								<div class="row margn_top">
									<div class="form-group">
										<div class="col-md-12">
											<label>Message *</label>
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message"></textarea>
										</div>
									</div>
								</div>
								<div class="row margn_top">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6">

							<h4 class="push-top">Get in <strong>touch</strong></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

							<hr />

							<h4>The <strong>Office</strong></h4>
							<ul class="list-unstyled">
								<li><i class="icon icon-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
								<li><i class="icon icon-phone"></i> <strong>Phone:</strong> (123) 456-7890</li>
								<li><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
							</ul>

							<hr />

							<h4>Business <strong>Hours</strong></h4>
							<ul class="list-unstyled">
								<li><i class="icon icon-time"></i> Monday - Friday 9am to 5pm</li>
								<li><i class="icon icon-time"></i> Saturday - 9am to 2pm</li>
								<li><i class="icon icon-time"></i> Sunday - Closed</li>
							</ul>

						</div>

					</div>

				</div>

			</div>
        
        
   
    
   
  
  <div class="container-fluid black_bg margn_thirty">
  		<div class="container">
        	<div class="row">
            	<?php $content= \backend\models\Content::find()->where(['id'=>2,'status'=>1])->all();
              foreach($content as $data){?>
            	<div class="col-md-4">
                	<div class="email_subscrib">
                               	<h1><?= $data->title;?></h1>

                        <p><?= $data->content;?> </p>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        <button type="button" class="btn btn-default margn_top ">Subscribe</button>
                    </div>
                </div>
                    
              <?php } ?>
                <div class="col-md-4">
                <div class="email_subscrib">
                    	<h1>Latest Tweet</h1>
                        
                </div>
                
            </div>
            <div class="col-md-4">
                <div class="email_subscrib">
                    	<h1>Contact Us</h1>
                        <div class="fotter_pra "><i class="fa fa-location-arrow fa-lg"></i>  Address 1234 Street name</div>
                        <div class="fotter_pra margn_top"><i class="fa fa-phone fa-lg"></i>  Phone 123456</div>
                        <div class="fotter_pra margn_top"><i class="fa fa-inbox fa-lg"></i>  Email abc@abc.com</div>
                       
                                      
                                                     
                                                                    
                 </div>
                </div>
        </div>
  </div>
   
 

</div>