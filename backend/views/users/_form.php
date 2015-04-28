<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'phone_no')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 222]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'vat')->textInput(['maxlength' => 22]) ?>

    <?= $form->field($model, 'business_no')->textInput(['maxlength' => 222]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 222]) ?>

    <?= $form->field($model, 'password_2')->textInput(['maxlength' => 22]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'payment_status')->textInput(['maxlength' => 11]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
