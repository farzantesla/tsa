<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicle */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <!--
    <p>
        <?php //echo Html::a('Update', ['update', 'id' => $model->id, 'users_id' => $model->users_id], ['class' => 'btn btn-primary']) ?>
        <?php // echo Html::a('Delete', ['delete', 'id' => $model->id, 'users_id' => $model->users_id], [
            //'class' => 'btn btn-danger',
            //'data' => [
             //   'confirm' => 'Are you sure you want to delete this item?',
              //  'method' => 'post',
            //],
        //]) ?>
    </p>
    -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'users_id',
            'make',
            'model',
            'year_2',
            'transmission',
            'series',
            'edition',
            'conditions',
            'mileage',
            'areo',
            'ac_front',
            'cruise_control',
            'navigation_sys',
            'power_lock',
            'power_steer',
            'remote_key',
            'tv',
            'air_bag_driver',
            'air_bag_passenger',
            'air_bag_side',
            'alarm',
            'lock_brake',
            'fog_light',
            'transaction_cont',
            'power_windows',
            'rear_windows_def',
            'rear_window_wiper',
            'tint_glass',
            'alloy_wheels',
            'sun_roof',
            'third_row_seats',
            'tow_package',
            'bidding_price',
            'garage_id',
            'time_left',
            'sale_status',
            'status',
            'reg_no',
            'user_id',
            'color',
            'manufacture',
            'type_2',
            'date_reg',
            'trim_color',
            'doors',
            'last_owner',
            'engine_size',
            'vin',
            'mot_exp_date',
            'v5_preset',
            'green_slip',
            'imported',
            'service_history:ntext',
            'fuel',
            'description',
            'lot_id',
        ],
    ]) ?>

</div>
