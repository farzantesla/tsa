<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?><div class="vehicle-form">
	  <aside class="right-side">
		<div class="row ">
        <section class="cover_photo" >
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
                                        </div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'make')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'model')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'year_2')->textInput(['maxlength' => 4]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'transmission')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'series')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'edition')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'conditions')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'mileage')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'areo')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'ac_front')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'cruise_control')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'navigation_sys')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'power_lock')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'power_steer')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'remote_key')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'tv')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'air_bag_driver')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'air_bag_passenger')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'air_bag_side')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'alarm')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'lock_brake')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'fog_light')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'transaction_cont')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'power_windows')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'rear_windows_def')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'rear_window_wiper')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'tint_glass')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'alloy_wheels')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'sun_roof')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'third_row_seats')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'tow_package')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'bidding_price')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'garage_id')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'time_left')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'sale_status')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'status')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'reg_no')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'user_id')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'color')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'manufacture')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'type_2')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'date_reg')->textInput() ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'trim_color')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'doors')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'last_owner')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'engine_size')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'vin')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'mot_exp_date')->textInput() ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'v5_preset')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'green_slip')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'imported')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'service_history')->textarea(['rows' => 6]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'fuel')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'description')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'lot_id')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                    
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
<!--                                </form>      	-->
  			</div>
         </section>
        </div>
        </aside><!-- /.right-side -->
    <?php ActiveForm::end(); ?>
        </div>
        
