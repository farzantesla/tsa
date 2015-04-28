<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'company_name') ?>

    <?= $form->field($model, 'full_name') ?>

    <?= $form->field($model, 'phone_no') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'vat') ?>

    <?php // echo $form->field($model, 'business_no') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'password_2') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'payment_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
