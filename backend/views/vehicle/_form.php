<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use janisto\timepicker\TimePicker;
use yii\base\Model;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'users_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'make')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'year_2')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'transmission')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'series')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'edition')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'conditions')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'mileage')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'areo')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'ac_front')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'cruise_control')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'navigation_sys')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'power_lock')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'power_steer')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'remote_key')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'tv')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'air_bag_driver')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'air_bag_passenger')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'air_bag_side')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'alarm')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'lock_brake')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'fog_light')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'transaction_cont')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'power_windows')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'rear_windows_def')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'rear_window_wiper')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'tint_glass')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'alloy_wheels')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'sun_roof')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'third_row_seats')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'tow_package')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'bidding_price')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'garage_id')->textInput(['maxlength' => 111]) ?>

    <?php // $form->field($model, 'time_left')->textInput(['maxlength' => 111]) ?>
    
    <lable><b>Time Left</b></lable>
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
    <br>

    <?= $form->field($model, 'sale_status')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'reg_no')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'manufacture')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'type_2')->textInput(['maxlength' => 111]) ?>

    <?php // $form->field($model, 'date_reg')->textInput() ?>
    
    <lable><b>Date Reg</b></lable>
    <?php echo TimePicker::widget([
        //'language' => 'fi',
        'model' => $model,
        'attribute' => 'date_reg',
        'mode' => 'date',
        'clientOptions'=>[
        'dateFormat' => 'yy-mm-dd',        
            ]]);   
    ?>
    <br>

    <?= $form->field($model, 'trim_color')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'doors')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'last_owner')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'engine_size')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'vin')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'mot_exp_date')->textInput() ?>

    <?= $form->field($model, 'v5_preset')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'green_slip')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'imported')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'service_history')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fuel')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'lot_id')->textInput(['maxlength' => 11]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
