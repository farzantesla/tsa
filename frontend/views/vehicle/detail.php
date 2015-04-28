<?php
use yii\helpers\Html;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$vehid=$_GET['vehid'];

//print_r($vehid);
?>


       <aside class="right-side">
                <!-- Content Header (Page header) -->

    
    		
		<div class="row ">
        <section class="cover_photo" >
            
            <?php $veh=  frontend\models\Vehicle::find()->where(['status'=>1,'id'=>$vehid])->all();
             foreach($veh as $vehs){
            ?>
            
       		<div class="col-md-6">
            	<h1 class="whitesale text-center"><?= $vehs->make;?> <?= $vehs->model;?> <?= $vehs->year_2;?> Sale!</h1>
                <img src="<?php echo Yii::getAlias('@web') ?>/designe/img/car5.png" class="car_img">
            </div>
            <div class="col-md-6">
            	<h1 class="whiteprice text-center">£ <?= $vehs->bidding_price;?></h1>
                <h2 class="auction_id text-center"><b>Auction ID : <span>308505</span></b></h2>
                <p class="text-center auction_pra">
                <b>Current Bid : <span> (Reserve not met)</span></b> <br>
				<b>Bids : <span>11(Â£100 Staring Bid)</span></b>	 <br>
                
                                
                <?php $date_start= Yii::$app->formatter->asDatetime($vehs->time_start, "php:d-m-Y H:i")?>                
                Time Start : <b><?= $date_start ;?></b><br>
                
                <?php $date_end= Yii::$app->formatter->asDatetime($vehs->time_left, "php:d-m-Y H:i")?>
                Auction Ends :  <b><?= $date_end ;?></b><br>
                
                <?php
                
                $cur_date = date('Y-m-d h:i:s');
                $start_date = new DateTime($cur_date);
                $since_start = $start_date->diff(new DateTime($vehs->time_left));


                ?>
                
                  Time Left  : <b><?= $since_start->d ?> days ,<?= $since_start->h ?> hours</b><br>
                Veichle Location : <b><?= $vehs->location;?></b>
                </p>
                <a href="#" class="watch_vichel">Watch Vehicle</a>
            </div>
            <div class="col-md-12 price_enter">
            	<h3>Please Enter Your Maximum  Bid Amount ,The System will bid up to this amount on your behalf .</h3>
                <div class="col-md-6">
                <p class="pra_det">Current Bid  : £ 2.050(reserve not met)<br>
                Your Maximum Bid  : £ 0</p>
                </div>
                <div class="col-md-6">
                <p class="pra_det_head">Enter Your Maximum Bid</p><br clear="all">
                <div class="form-group">
                 <span class="pra_det">£</span> <div class="fld_pric">
                     
                      <?= $form->field($model, 'bid_price')->textInput(['maxlength' => 11]) ?>
                     
                     
                     <input type="text" class="form-control" id="exampleInputPassword1" ></div>
                  <span class="pra_det"> £ 2.050</span>
                  <a href="#" class="watch_vichel_bottom">Watch Vehicle</a>
                  </div>
                  
                
                </div>
            </div>
            <h1 class="vichle_hd">Vehicle</h1>
            <div class="col-lg-4">
           		<div class="main_lst"> <p >Registrauorl Number : </p> <span ><?= $vehs->reg_no;?></span></div>
           		<div class="main_lst"> <p>   Make :</p> <span ><?= $vehs->make;?></span></div>
                <div class="main_lst"> <p >Transmission : </p> <span ><?= $vehs->transmission;?></span></div>
           		<div class="main_lst"> <p>    Series :</p> <span ><?= $vehs->series;?></span></div>
                <div class="main_lst"> <p >Edition : </p> <span ><?= $vehs->edition;?></span></div>
           		<div class="main_lst"> <p>    Condition :</p> <span ><?= $vehs->conditions;?></span></div>
                <div class="main_lst"> <p >Mileage: </p> <span ><?= $vehs->mileage;?>Km</span></div>
           		<div class="main_lst"> <p>    Fuel :</p> <span ><?= $vehs->fuel;?></span></div>
                <div class="main_lst"> <p >Aero: </p> <span ><?= $vehs->areo;?></span></div>
           		<div class="main_lst"> <p>    Color :</p> <span ><?= $vehs->color;?></span></div>
            
            
            </div>
<!--            <div class="col-lg-4">
           		<div class="main_lst"> <p >Registrauorl Number : </p> <span >Mazda</span></div>
           		<div class="main_lst"> <p>    Manufacturer :</p> <span >DY.SSZ</span></div>
                <div class="main_lst"> <p >Registrauorl Number : </p> <span >Mazda</span></div>
           		<div class="main_lst"> <p>    Manufacturer :</p> <span >DY.SSZ</span></div>
                <div class="main_lst"> <p >Registrauorl Number : </p> <span >Mazda</span></div>
           		<div class="main_lst"> <p>    Manufacturer :</p> <span >DY.SSZ</span></div>
                <div class="main_lst"> <p >Registrauorl Number : </p> <span >Mazda</span></div>
           		<div class="main_lst"> <p>    Manufacturer :</p> <span >DY.SSZ</span></div>
                <div class="main_lst"> <p >Registrauorl Number : </p> <span >Mazda</span></div>
           		<div class="main_lst"> <p>    Manufacturer :</p> <span >DY.SSZ</span></div>
            
            
            </div>-->
            
             <?php } ?>
            
        </section>
        </div>
                
            </aside><!-- /.right-side -->