<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LotSale */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lot Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lot-sale-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <!--
    <p>
        <?php //echo Html::a('Update', ['update', 'id' => $model->id, 'vehicle_users_id' => $model->vehicle_users_id, 'vehicle_id' => $model->vehicle_id], ['class' => 'btn btn-primary']) ?>
        <?php //echo Html::a('Delete', ['delete', 'id' => $model->id, 'vehicle_users_id' => $model->vehicle_users_id, 'vehicle_id' => $model->vehicle_id], [
            //'class' => 'btn btn-danger',
            //'data' => [
                //'confirm' => 'Are you sure you want to delete this item?',
                //'method' => 'post',
            //],
        //]) ?>
    </p>
    
    -->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vehicle_users_id',
            'vehicle_id',
            'lot_number',
            'lot_price',
            'ending_date',
            'status',
            'sales_status',
        ],
    ]) ?>

</div>
