<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Carmodels */

$this->title = 'Update Carmodels: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Carmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carmodels-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
