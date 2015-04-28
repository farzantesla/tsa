<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VehicleImges */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-imges-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vehicle_users_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'vehicle_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => 111]) ?>

    <?= $form->field($model, 'car_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 11]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
