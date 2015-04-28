<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Messages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="messages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'users_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'tiltle')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'message')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'sender')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'receiver')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
