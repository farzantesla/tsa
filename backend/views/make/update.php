<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Make */

$this->title = 'Update Make: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Makes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="make-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
