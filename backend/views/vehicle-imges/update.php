<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VehicleImges */

$this->title = 'Update Vehicle Imges: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Vehicle Imges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id, 'vehicle_users_id' => $model->vehicle_users_id, 'vehicle_id' => $model->vehicle_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vehicle-imges-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
