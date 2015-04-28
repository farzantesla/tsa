<?php
use yii\helpers\Html;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<aside class="right-side">
                <!-- Content Header (Page header) -->

		<div class="row">
        <section class="cover_photo" >
       <div class="col-lg-12"> <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=vehicle%2Fcreate&id=<?php echo Yii::$app->user->id ?>" class="add_vichel">+ Add Vehicle</a></div>
       <?php $veh=  frontend\models\Vehicle::findAll(["users_id" => Yii::$app->user->id]);

foreach($veh as $vehs){
?>
        	<div class="col-md-4">
                            <!-- Default box -->
                            <div class="box">
                            <figure class="car_imag_dashboard"><img src="<?php echo Yii::getAlias('@web') ?>/designe/img/Car1.jpg"></figure>
                                <div class="box-header">
                                    <h3 class="biding_price"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span> Biding Price: £<?php echo $vehs->bidding_price;?></h3>
                                     <h3 class="biding_price"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Time left    : 2days</h3>
                                    
                                </div>
                             
                            </div><!-- /.box -->
                        </div>
           
<?php }?> 
        </section>
        </div>
                
            </aside><!-- /.right-side -->