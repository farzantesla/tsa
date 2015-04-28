<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VehicleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'users_id') ?>

    <?= $form->field($model, 'make') ?>

    <?= $form->field($model, 'model') ?>

    <?= $form->field($model, 'year_2') ?>

    <?php // echo $form->field($model, 'transmission') ?>

    <?php // echo $form->field($model, 'series') ?>

    <?php // echo $form->field($model, 'edition') ?>

    <?php // echo $form->field($model, 'conditions') ?>

    <?php // echo $form->field($model, 'mileage') ?>

    <?php // echo $form->field($model, 'areo') ?>

    <?php // echo $form->field($model, 'ac_front') ?>

    <?php // echo $form->field($model, 'cruise_control') ?>

    <?php // echo $form->field($model, 'navigation_sys') ?>

    <?php // echo $form->field($model, 'power_lock') ?>

    <?php // echo $form->field($model, 'power_steer') ?>

    <?php // echo $form->field($model, 'remote_key') ?>

    <?php // echo $form->field($model, 'tv') ?>

    <?php // echo $form->field($model, 'air_bag_driver') ?>

    <?php // echo $form->field($model, 'air_bag_passenger') ?>

    <?php // echo $form->field($model, 'air_bag_side') ?>

    <?php // echo $form->field($model, 'alarm') ?>

    <?php // echo $form->field($model, 'lock_brake') ?>

    <?php // echo $form->field($model, 'fog_light') ?>

    <?php // echo $form->field($model, 'transaction_cont') ?>

    <?php // echo $form->field($model, 'power_windows') ?>

    <?php // echo $form->field($model, 'rear_windows_def') ?>

    <?php // echo $form->field($model, 'rear_window_wiper') ?>

    <?php // echo $form->field($model, 'tint_glass') ?>

    <?php // echo $form->field($model, 'alloy_wheels') ?>

    <?php // echo $form->field($model, 'sun_roof') ?>

    <?php // echo $form->field($model, 'third_row_seats') ?>

    <?php // echo $form->field($model, 'tow_package') ?>

    <?php // echo $form->field($model, 'bidding_price') ?>

    <?php // echo $form->field($model, 'garage_id') ?>

    <?php // echo $form->field($model, 'time_left') ?>

    <?php // echo $form->field($model, 'sale_status') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'reg_no') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'manufacture') ?>

    <?php // echo $form->field($model, 'type_2') ?>

    <?php // echo $form->field($model, 'date_reg') ?>

    <?php // echo $form->field($model, 'trim_color') ?>

    <?php // echo $form->field($model, 'doors') ?>

    <?php // echo $form->field($model, 'last_owner') ?>

    <?php // echo $form->field($model, 'engine_size') ?>

    <?php // echo $form->field($model, 'vin') ?>

    <?php // echo $form->field($model, 'mot_exp_date') ?>

    <?php // echo $form->field($model, 'v5_preset') ?>

    <?php // echo $form->field($model, 'green_slip') ?>

    <?php // echo $form->field($model, 'imported') ?>

    <?php // echo $form->field($model, 'service_history') ?>

    <?php // echo $form->field($model, 'fuel') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'lot_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
