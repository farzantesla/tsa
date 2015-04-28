<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Bidding */
/* @var $form yii\widgets\ActiveForm */

$vehid=$_GET['vehid'];
?>

    <aside class="right-side">
                <!-- Content Header (Page header) -->

    
    		
		<div class="row ">
        <section class="cover_photo" >
            
            <?php $veh=  frontend\models\Vehicle::find()->where(['status'=>1,'id'=>$vehid])->one();
//             foreach($veh as $veh){
            ?>
            
       		<div class="col-md-6">
            	<h1 class="whitesale text-center"><?= $veh->make;?> <?= $veh->model;?> <?= $veh->year_2;?> Sale!</h1>
                <img src="<?php echo Yii::getAlias('@web') ?>/designe/img/car5.png" class="car_img">
            </div>
            <div class="col-md-6">
            	<h1 class="whiteprice text-center">£ <?= $veh->bidding_price;?></h1>
                <h2 class="auction_id text-center"><b>Auction ID : <span>308505</span></b></h2>
                <p class="text-center auction_pra">
                <b>Current Bid : <span> (Reserve not met)</span></b> <br>
				<b>Bids : <span>11(Â£100 Staring Bid)</span></b>	 <br>
                
                                
                <?php $date_start= Yii::$app->formatter->asDatetime($veh->time_start, "php:d-m-Y H:i")?>                
                Time Start : <b><?= $date_start ;?></b><br>
                
                <?php $date_end= Yii::$app->formatter->asDatetime($veh->time_left, "php:d-m-Y H:i")?>
                Auction Ends :  <b><?= $date_end ;?></b><br>
                
                <?php
                
                $cur_date = date('Y-m-d h:i:s');
                $start_date = new DateTime($cur_date);
                $since_start = $start_date->diff(new DateTime($veh->time_left));


                ?>
                
                  Time Left  : <b><?= $since_start->d ?> days ,<?= $since_start->h ?> hours</b><br>
                Vehicle Location : <b><?= $veh->location;?></b>
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
                <?php $form = ActiveForm::begin(); ?>
                <div class="form-group">
                 <span class="pra_det">£</span> <div class="fld_pric">
                     
                 <?= $form->field($model, 'bid_price')->textInput(); ?> 
                
                     <div style="display:none">
                         
                 <?php echo  $form->field($model, 'vehicle_users_id')->textInput(['value'=>$veh->user_id,'maxlength' => 11]) ?>
                 
                 <?php echo $form->field($model, 'vehicle_id')->textInput(['value'=>$vehid, 'maxlength' => 11]) ?>
                 
                 <?php echo $form->field($model, 'bidder_id')->textInput(['value'=>Yii::$app->user->id,'maxlength' => 11]) ?>
                 
                 <?php echo $form->field($model, 'date_time')->textInput(['value'=>date('Y-m-d h:i:s')]) ?>
                 
                 <?php echo $form->field($model, 'status')->textInput(['value'=>1,'maxlength' => 11]) ?>
                     </div>
                 
                 </div>
                  <span class="pra_det"> £ 2.050</span>
<!--                  <a href="#" class="watch_vichel_bottom">Watch Vehicle</a>-->
<div>
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn-lg btn-success' : 'btn btn-primary']) ?>
      
</div>
                </div>
                  <?php ActiveForm::end(); ?>
                
                </div>
            </div>
            <h1 class="vichle_hd">Vehicle</h1>
    
<!--            <form role="form">-->

    
    
<!--                                </form>      	-->
  			
         
        
        
        <div class="col-lg-4">
           		<div class="main_lst"> <p >Registrauorl Number : </p> <span ><?= $veh->reg_no;?></span></div>
           		<div class="main_lst"> <p>   Make :</p> <span ><?= $veh->make;?></span></div>
                <div class="main_lst"> <p >Transmission : </p> <span ><?= $veh->transmission;?></span></div>
           		<div class="main_lst"> <p>    Series :</p> <span ><?= $veh->series;?></span></div>
                <div class="main_lst"> <p >Edition : </p> <span ><?= $veh->edition;?></span></div>
           		<div class="main_lst"> <p>    Condition :</p> <span ><?= $veh->conditions;?></span></div>
                <div class="main_lst"> <p >Mileage: </p> <span ><?= $veh->mileage;?>Km</span></div>
           		<div class="main_lst"> <p>    Fuel :</p> <span ><?= $veh->fuel;?></span></div>
                <div class="main_lst"> <p >Aero: </p> <span ><?= $veh->areo;?></span></div>
           		<div class="main_lst"> <p>    Color :</p> <span ><?= $veh->color;?></span></div>
            
            
            </div>
             <?php // } ?>
              
        </section>
        </div>
                
            </aside><!-- /.right-side -->
