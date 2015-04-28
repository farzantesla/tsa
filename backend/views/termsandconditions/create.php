<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TermsAndConditions */

$this->title = 'Create Terms And Conditions';
$this->params['breadcrumbs'][] = ['label' => 'Terms And Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="terms-and-conditions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
