<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>


            <aside class="right-side">
                <!-- Content Header (Page header) -->

    
    		
		<div class="row">
        <section class="cover_photo" >
        <div class="col-lg-12"><h1 class="text-center">My Bids</h1></div>
        <h2>My Bids</h2>
        <?php $bid= frontend\models\Bidding::findAll(["bidder_id" => Yii::$app->user->id]);

foreach($bid as $bids){

    $veh= frontend\models\Vehicle::findOne(["id" => $bids->vehicle_id]);
    ?>
        
        	<div class="col-md-4">
                            <!-- Default box -->
                            <div class="box">
                            <figure class="car_imag_dashboard"><img src="<?php echo Yii::getAlias('@web') ?>/designe/img/Car1.jpg"></figure>
                                <div class="box-header">
                                    <h3 class="biding_price"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span> Biding Price: £ <?= $bids->bid_price?></h3>
                                    <?php $date_start= Yii::$app->formatter->asDatetime($veh->time_start, "php:d-m-Y H:i");
                                    $cur_date = date('Y-m-d h:i:s');
                                    $start_date = new DateTime($cur_date);
                                    $since_start = $start_date->diff(new DateTime($veh->time_left)) ;?>
                                    
                                    <h3 class="biding_price"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Time left    : <?= $since_start->d ?>days, <?= $since_start->h ?>hours</h3>
                                    
                                </div>
                             
                            </div><!-- /.box -->
                        </div>
<?php } ?>
   <!--       <h2>Successful</h2>
       	<div class="col-md-4">
                             Default box 
                            <div class="box">
                            <figure class="car_imag_dashboard"><img src="img/Car1.jpg"></figure>
                                <div class="box-header">
                                    <h3 class="biding_price"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span> Biding Price: £65000</h3>
                                     <h3 class="biding_price"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Time left    : 2days</h3>
                                    
                                </div>
                             
                            </div> /.box 
                        </div>-->
           
<!--          <h2>UnSuccessful</h2>
        	<div class="col-md-4">
                             Default box 
                            <div class="box">
                            <figure class="car_imag_dashboard"><img src="img/Car1.jpg"></figure>
                                <div class="box-header">
                                    <h3 class="biding_price"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span> Biding Price: £65000</h3>
                                     <h3 class="biding_price"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Time left    : 2days</h3>
                                    
                                </div>
                             
                            </div> /.box 
                        </div>-->
          
        </section>
        </div>
                
            </aside><!-- /.right-side -->
      