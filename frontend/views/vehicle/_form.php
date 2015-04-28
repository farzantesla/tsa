<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use janisto\timepicker\TimePicker;
use yii\base\Model;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */

?>
 <script type="text/javascript">
function hideshow(divid)
{

	$('#carfeat').slideUp('fast');
	$('#dashboardvichel').slideUp("fast");
	$(divid).slideDown("fast");

}
</script>
<div class="vehicle-form">
	  <aside class="right-side">
		<div class="row ">
        <section class="cover_photo" id="carfeat" >
        <div class="auto_cent">
        	<div class="col-md-6"><a href="#" class="btn_car_van"><img src="<?php echo Yii::getAlias('@web') ?>/designe/img/car.png"> Car</a></div>
            <div class="col-md-6"><a href="#" class="btn_car_van"><img src="<?php echo Yii::getAlias('@web') ?>/designe/img/van.png"> Van</a></div>
        <br clear="all">
        </div>
  			<div class="auto_cent">
<div class="col-lg-12">
    <h1><?= Html::encode($this->title) ?></h1>
<!--            <form role="form">-->
    <?php $form = ActiveForm::begin(); ?>
<div class="box-body">
                                        <div class="form-group">
<!--    <?= $form->field($model, 'users_id')->textInput(['maxlength' => 11]) ?>-->
                                        </div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'reg_no')->textInput(['maxlength' => 111]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    
                                   <?php 
use yii\helpers\ArrayHelper;
use backend\models\Make;
?>
                                         
                                            
           <?= $form->field($model, 'make')
          ->dropDownList(ArrayHelper::map(Make::find()->all(), 'id', 'title'), array('class' =>'form-control','onchange'=>'select_model(this)', 'prompt'=>'Select Company'))
          ->label('Select Model');  ?>
                                            
                                            
</div></div>
    <div class="box-body">
                                        <div class="form-group">
                                            
 <?php 

 use backend\models\Carmodels;
 ?>
                                            
                                            <div id="models_car"> 
 <?=
 $form->field($model, 'model')
     ->dropDownList(
            ArrayHelper::map(Carmodels::find()->all(), 'id', 'title')
            )
 ?>  
                                            </div>
                                            
   <!--- <?= $form->field($model, 'model')->textInput(['maxlength' => 11]) ?>-->
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'year_2')->textInput(['maxlength' => 4]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'transmission')->textInput(['maxlength' => 11]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'series')->textInput(['maxlength' => 11]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'edition')->textInput(['maxlength' => 11]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'conditions')->textInput(['maxlength' => 11]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'mileage')->textInput(['maxlength' => 111]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'areo')->textInput(['maxlength' => 111]) ?>
</div></div>
        
        <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'color')->textInput(['maxlength' => 500]) ?>
</div></div>
            
             <div class="box-body">
             <div class="form-group">
    <?= $form->field($model, 'bidding_price')->textInput(['maxlength' => 111]) ?>
</div></div>

<div class="box-body">
             <div class="form-group">
    <?= $form->field($model, 'location')->textInput(['maxlength' => 100]) ?>
</div></div>
    
   <div class="box-footer">
                                         <a href="javascript:;"  onClick="hideshow('#dashboardvichel')" class="btn btn-primary pull-right submit_btn_seller btn-lg" >Next</a>
                                                           
                                      
                                    </div>
        </section>
         <section class="cover_photo" id="dashboardvichel" style="display:none;">
  		 <div class="col-lg-12"><h1 class="text-center">Finalize Car Feature</h1></div>
  			<div class="col-md-4"><select class="form-control input-lg">....
            <option></option>
            </select></div>
            <div class="col-md-4"><select class="form-control input-lg">.....</select></div>
            <div class="col-md-4"><select class="form-control input-lg">.....</select></div>
            <div class="description_margn">
             <div class="form-group">
    <?= $form->field($model, 'description')->textArea(['maxlength' => 111]) ?>
</div>
            </div>
            
             
            <div class="col-md-3 col-sm-3">
            	<h1>Comfort</h1>
                
                <div class="form-group">                                    
                <?= $form->field($model, 'ac_front')->checkBox(['label' => 'A/C Front', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                <div class="form-group">                                    
                <?= $form->field($model, 'cruise_control')->checkBox(['label' => 'Cruise Control', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                <div class="form-group">                                    
                <?= $form->field($model, 'navigation_sys')->checkBox(['label' => 'Navigation System', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
               <?= $form->field($model, 'power_lock')->checkBox(['label' => 'Power Lock', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
                <?= $form->field($model, 'power_steer')->checkBox(['label' => 'Power Steer','uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
                <?= $form->field($model, 'remote_key')->checkBox(['label' => 'Remote Key', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
                <?= $form->field($model, 'tv')->checkBox(['label' => 'TV', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  
                 
                 
            </div>
    <div class="col-md-3 col-sm-3">
            	<h1>Saftey</h1>
                
                <div class="form-group">                                    
                <?= $form->field($model, 'air_bag_driver')->checkBox(['label' => 'Air Bag Driver', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
                   <?= $form->field($model, 'air_bag_passenger')->checkBox(['label' => 'Air Bag Passenger', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
                  <?= $form->field($model, 'air_bag_side')->checkBox(['label' => 'Air Bag Side', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
                 <?= $form->field($model, 'alarm')->checkBox(['label' => 'Alarm', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
                <?= $form->field($model, 'lock_brake')->checkBox(['label' => 'Anti Lock Brake', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
             <?= $form->field($model, 'fog_light')->checkBox(['label' => 'Fog Light','uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
               <?= $form->field($model, 'transaction_cont')->checkBox(['label' => 'Transaction Control', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                 
                 
            </div>
    <div class="col-md-3 col-sm-3">
            	<h1>Windows</h1>
                
                <div class="form-group">                                    
                <?= $form->field($model, 'power_windows')->checkBox(['label' => 'Power Windows', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
              <?= $form->field($model, 'rear_windows_def')->checkBox(['label' => 'Rear Windows Defroster', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
                 <?= $form->field($model, 'rear_window_wiper')->checkBox(['label' => 'Rear Windows Wiper', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
              <?= $form->field($model, 'tint_glass')->checkBox(['label' => 'Tint Glass', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                                   
            </div>
    <div class="col-md-3 col-sm-3">
            	<h1>Others</h1>
                
                <div class="form-group">                                    
                <?= $form->field($model, 'alloy_wheels')->checkBox(['label' => 'Alloy Wheels', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
               <?= $form->field($model, 'sun_roof')->checkBox(['label' => 'Sun Roof','uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
               <?= $form->field($model, 'third_row_seats')->checkBox(['label' => 'Third Row Seat','uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                  <div class="form-group">                                    
               <?= $form->field($model, 'tow_package')->checkBox(['label' => 'Tow Package', 'uncheck' => '0', 'checked' => '1']) ?>
                 </div>
                                  
            </div>
            
            <div class="col-lg-12">
   
   <div class="box-body">
<!--                                        <div class="form-group">
    <?php //echo $form->field($model, 'garage_id')->textInput(['maxlength' => 111]) ?>
</div></div>-->
                
                                        <div class="form-group">
                                               
                                  <lable><b>Auction Start Date</b></lable>
    <?php echo TimePicker::widget([
        //'language' => 'fi',
        'model' => $model,
        'attribute' => 'time_start',
        'mode' => 'datetime',
        'clientOptions'=>[
        'dateFormat' => 'yy-mm-dd',
        'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
            ]]);   
    ?>          
                                            
</div></div>
    <div class="box-body">
                                        <div class="form-group">
                                               
                                  <lable><b>Auction End Date</b></lable>
    <?php echo TimePicker::widget([
        //'language' => 'fi',
        'model' => $model,
        'attribute' => 'time_left',
        'mode' => 'datetime',
        'clientOptions'=>[
        'dateFormat' => 'yy-mm-dd',
        'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
            ]]);   
    ?>          
                                            
<!--</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?php //echo $form->field($model, 'sale_status')->textInput(['maxlength' => 111]) ?>
</div></div>-->
<!--    <div class="box-body">
                                        <div class="form-group">
    <?php //echo $form->field($model, 'status')->textInput(['maxlength' => 111]) ?>
</div></div>
    -->
<!--    <div class="box-body">
                                        <div class="form-group">
    <?php //echo $form->field($model, 'user_id')->textInput(['maxlength' => 111]) ?>
</div></div>-->
    
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'manufacture')->textInput(['maxlength' => 111]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'type_2')->textInput(['maxlength' => 111]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'date_reg')->textInput() ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'trim_color')->textInput(['maxlength' => 111]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'doors')->textInput(['maxlength' => 111]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'last_owner')->textInput(['maxlength' => 111]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'engine_size')->textInput(['maxlength' => 111]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'vin')->textInput(['maxlength' => 111]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'mot_exp_date')->textInput() ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'v5_preset')->textInput(['maxlength' => 111]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'green_slip')->textInput(['maxlength' => 111]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'imported')->textInput(['maxlength' => 111]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'service_history')->textarea(['rows' => 6]) ?>
</div></div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'fuel')->textInput(['maxlength' => 111]) ?>
</div></div>
   
<!--    <div class="box-body">
                                        <div class="form-group">
    <?php //echo $form->field($model, 'lot_id')->textInput(['maxlength' => 11]) ?>
</div></div>-->
    <div class="box-body">
                                        <div class="form-group">
    </div><!-- /.box-body -->

    <br class="all">
             <div class="back_btn">
                                         <a href="javascript:;"  onClick="hideshow('#carfeat')" class="btn btn-primary pull-right submit_btn_seller btn-lg" a>Back</a>
                                                           
                                      
                                    </div>
                                
<!--                                </form>      	-->
  			</div></div>
    
            <div class="box-footer">
                                    
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
         </section>
        </div>
        </aside><!-- /.right-side -->
    <?php ActiveForm::end(); ?>
        </div>
        
            <script>
            function select_model(item)
            { //alert(item.value)
                
$('#spinner').hide(); 

$.ajax({
            
         
      type: "POST",
  url: "<?php echo Yii::$app->getUrlManager()->createUrl('vehicle/car_model'); ?>",
  data: { id: item.value },
                          
success: function(data){
  //alert(data);
 document.getElementById("models_car").innerHTML = data;
      }
    });
    }
    
  
      //on-change code goes in here.
    //variable "this" references the state dropdown element           
            
            </script>