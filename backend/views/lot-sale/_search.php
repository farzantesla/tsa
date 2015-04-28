<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LotSaleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lot-sale-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vehicle_users_id') ?>

    <?= $form->field($model, 'vehicle_id') ?>

    <?= $form->field($model, 'lot_number') ?>

    <?= $form->field($model, 'lot_price') ?>

    <?php // echo $form->field($model, 'ending_date') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'sales_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
