<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'phone_no')->textInput() ?>

    <?= $form->field($model, 'business_no')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 222]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'vat')->textInput(['maxlength' => 22]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'payment_status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'profile_status')->dropDownList([ 'Active' => 'Active', 'De-Active' => 'De-Active', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
