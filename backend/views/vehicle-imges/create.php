<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VehicleImges */

$this->title = 'Create Vehicle Imges';
$this->params['breadcrumbs'][] = ['label' => 'Vehicle Imges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-imges-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
