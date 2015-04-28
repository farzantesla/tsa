<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TermsAndConditions */

$this->title = 'Update Terms And Conditions: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Terms And Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="terms-and-conditions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
