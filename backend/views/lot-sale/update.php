<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LotSale */

$this->title = 'Update Lot Sale: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lot Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'vehicle_users_id' => $model->vehicle_users_id, 'vehicle_id' => $model->vehicle_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lot-sale-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
