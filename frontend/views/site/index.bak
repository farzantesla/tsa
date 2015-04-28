<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
$this->title = 'My Yii Application';


?>
<div class="container-fluid blue_bg">
   		<div class="container">
        	<div class="row">
            <div class="col-md-2  ">
            <select class="form-control margn_top">
  <option>All Makes</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
            </div>
            <div class="col-md-2">
               <select class="form-control margn_top">
  <option>All Models</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
            </div>
            <div class="col-md-2">
               <select class="form-control margn_top">
  <option>Price From</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
            </div>
            <div class="col-md-2">
               <select class="form-control margn_top">
  <option>Price To</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
            </div>
            <div class="col-md-4">
               <a href="#" class="submit_search">Submit</a>
            </div>
            </div>
        </div>
   </div>
   <div class="container-fluid latest_auction">
   		<div class="container">
        	<h1 class="hello_heading text-center" id="auction">Latest Added  <span>Auction</span> </h1>
            
              <div class="col-md-12"> 
            <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
<?php $veh=  frontend\models\Vehicle::find()->orderBy(['id'=>SORT_DESC,])->limit(10)->all();
              foreach($veh as $vehs){
              ?>
              
              
            <li><a href="#">
            	<div class="pic_div"> <img src="<?php echo Yii::getAlias('@web') ?>/designe/images/1.jpg" /></div>
                <div class="car_head">Aixam Crossline <br><span>Sitquet amert</span></div>
                <div class="car_head_right">
                <span><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/calender.jpg"><?= $vehs->year_2;?></span>
                <span><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/2nd.jpg"><?= $vehs->mileage;?> Km</span>
                <span><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/loc.jpg">Yarkshir</span>
                </div>
                
                <?php $date_start= Yii::$app->formatter->asDatetime($vehs->time_start, "php:d-m-Y H:i")?>
                <div class="start_time">Time Start : <?= $date_start;?></div>
                
                
                <?php
                
                $cur_date = date('Y-m-d h:i:s');
                $start_date = new DateTime($cur_date);
$since_start = $start_date->diff(new DateTime($vehs->time_left));
//echo $since_start->days.' days total<br>';
//echo $since_start->y.' years<br>';
//echo $since_start->m.' months<br>';
//echo $since_start->d.' days<br>';
//echo $since_start->h.' hours<br>';
//echo $since_start->i.' minutes<br>';
//echo $since_start->s.' seconds<br>';

                ?>
	<div class="end_time">Time Left   : <?= $since_start->d ?>days, <?= $since_start->h ?>hours </div>
                <div class="currunt_bid">Current Bid : £25,380</div>
                </a>
  	    	   </li>
              <?php }?>
          </ul>
        </div>
      </section>
        </div>
         
        </div>
   </div>
   
   <div class="container">
        	<h1 class="car_soon text-center" >Cars Ending Soon </h1>
            
              <div class="col-md-12"> 
            <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
              
              <?php $veh=  frontend\models\Vehicle::find()->orderBy(['id'=>SORT_DESC,])->limit(10)->all();
              foreach($veh as $vehs){
              ?>
            <li><a href="#">
            	<div class="pic_div"> <img src="<?php echo Yii::getAlias('@web') ?>/designe/images/1.jpg" /></div>
                <div class="car_head">Aixam Crossline <br><span>Sitquet amert</span></div>
                <div class="car_head_right">
                <span><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/calender.jpg"><?= $vehs->year_2;?></span>
                <span><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/2nd.jpg"><?= $vehs->mileage;?> Km</span>
                <span><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/loc.jpg">Yarkshir</span>
                </div>
                <?php $date_start= Yii::$app->formatter->asDatetime($vehs->time_start, "php:d-m-Y H:i")?>
                <div class="start_time">Time Start : <?= $date_start;?></div>
                
                
                <?php
                
                $cur_date = date('Y-m-d h:i:s');
                $start_date = new DateTime($cur_date);
$since_start = $start_date->diff(new DateTime($vehs->time_left));
//echo $since_start->days.' days total<br>';
//echo $since_start->y.' years<br>';
//echo $since_start->m.' months<br>';
//echo $since_start->d.' days<br>';
//echo $since_start->h.' hours<br>';
//echo $since_start->i.' minutes<br>';
//echo $since_start->s.' seconds<br>';

                ?>
	<div class="end_time">Time Left   : <?= $since_start->d ?>days, <?= $since_start->h ?>hours </div>
                <div class="currunt_bid">Current Bid : £25,380</div>
                </a>
  	    	   </li>
              <?php }?>
          </ul>
        </div>
      </section>
        </div>
         
        </div>
        
        <div class="container-fluid auction_pricing">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-6">
                    	<div class="auction_pricing_car">
                        	<h1>Simple, fair Car <span>Auction Pricing</span></h1>
                            <p>

 velit Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
 ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit <br><br>

esse cillum dolore eu fugiat nulla pariatur. <br><br>

Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

esse cillum dolore eu fugiat nulla pariatur. 

</p>
<a href="#" class="read_more_btn">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                    	<div class="rates_pricing">
                        	<h1>Lorem ipsum dolor</h1>
                            <div class="strike_price"><strike><b>$25,000</b></strike></div>
                            <p>Loerem Ipsum Dolor</p>
                            <div class="unstrike_price"><b>$25,000</b></div>
                            <a href="#" class="read_more_price">Read More</a>
                            <br clear="all">
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
   <div class="container-fluid buying_process">
   		<div class="container">
        	<h2 class="get_started">GET STARTED WITH OPEN LISTINGS</h2>
            <h1 class="buy_process_txt"><b>Where are you in the </b><span><b>buying process?</b></span></h1>
          <div class="col-md-6">
          <a href="#" class="click1"></a>
          </div>
          <div class="col-md-6">
          <a href="#" class="click2"></a>
          </div>  
        </div>
   </div> 
   <div class="container-fluid client_logos">
   		<div class="container">
        <h1 class="car_soon text-center margn_bottom_trirty" >Our Clients </h1>
        	<div class="col-md-2 col-sm-2"><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/lg2.png" class="img-responsive text-center"></div>
                <div class="col-md-2 col-sm-2"><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/lg1.png" class="img-responsive text-center"></div>
                <div class="col-md-2 col-sm-2"><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/lg2.png" class="img-responsive text-center"></div>
                <div class="col-md-2 col-sm-2"><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/lg1.png" class="img-responsive text-center"></div>
                <div class="col-md-2 col-sm-2"><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/lg2.png" class="img-responsive text-center"></div>
                <div class="col-md-2 col-sm-2"><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/lg1.png" class="img-responsive text-center"></div>
        </div>
  </div>
  
  <div class="container-fluid black_bg">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-4">
                	<div class="email_subscrib">
                    	<h1>Newsletter</h1>
                        <p>velit Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        <button type="button" class="btn btn-default margn_top ">Subscribe</button>
                    </div>
                </div>
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
<footer class="bg_ftr">
	<div class="container">
    	<p class="copyright">Copyright 2015 - 2016, All Rights Reserved.</p>
    </div>
</footer>


<!------------popup------------------>



<!-- Modal Login -->
<div class="modal fade" id="myLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#Login" aria-controls="Login" role="tab" data-toggle="tab">Login</a></li>
    <li role="presentation"><a href="#Register" aria-controls="Register" role="tab" data-toggle="tab">Register</a></li>

  </ul>
       
      </div>
      <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="Login">
    
        
        
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model_login, 'username')->textInput(['class'=>'form-control margn_top', 'id'=>'recipient-name', 'placeholder'=>'User Name'])->label(false) ?>
                <?= $form->field($model_login, 'password', ['inputOptions'=>['class'=>'form-control','placeholder'=>'Password']])->passwordInput()->label(false); ?> 
                <?= $form->field($model_login, 'rememberMe')->checkbox() ?>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        
    </div>
    <div role="tabpanel" class="tab-pane" id="Register">
<!----<div class="modal-body">
        <input type="text" class="form-control margn_top" id="recipient-name" placeholder="Company Name">
        <input type="password" class="form-control margn_top" id="recipient-name" placeholder="Full Name">
        <input type="text" class="form-control margn_top" id="recipient-name" placeholder="Email Address">
        <input type="password" class="form-control margn_top" id="recipient-name" placeholder="Phone Number">
        <input type="text" class="form-control margn_top" id="recipient-name" placeholder="Company Contact Number">
        <input type="password" class="form-control margn_top" id="recipient-name" placeholder="Address">
        <input type="text" class="form-control margn_top" id="recipient-name" placeholder="Website">
        <input type="password" class="form-control margn_top" id="recipient-name" placeholder="Vat Number">
        <input type="text" class="form-control margn_top" id="recipient-name" placeholder="Business Number">
         
      </div>---->
<!-----------------------------------------Start Registration-------------------------------------------------->


    
<div class="user-form">
      <?php   
      use backend\models\User;
      $model = new User(); ?>

    <?php $form = ActiveForm::begin(); ?>
    <input type="hidden" name="reg_from" value="1" />
    <br />
    <?= $form->field($model, 'full_name')->textInput(['maxlength' => 225,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Full Name' ])->label(false) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Username' ])->label(false) ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => 200,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Company Name' ])->label(false) ?>

    <?= $form->field($model, 'phone_no')->textInput(['class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Phone Number' ])->label(false) ?>

    <?= $form->field($model, 'business_no')->textInput(['class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Business Number' ])->label(false) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 222,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Address' ])->label(false) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => 45,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Website' ])->label(false) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Email Address' ])->label(false) ?>

    <?= $form->field($model, 'vat')->textInput(['maxlength' => 22,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Vat Number' ])->label(false) ?>
    
    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => 255,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Password' ])->label(false) ?>
     <div class="form-group">
         <?= Html::submitButton($model->isNewRecord ? 'Register' : 'Update', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

     
      </div>
    </div>
  </div>

</div>
      
    </div>
  </div>
</div>