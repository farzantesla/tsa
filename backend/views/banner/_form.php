<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => 500]) ?>

    <?php $form->field($model, 'text')->textInput(['maxlength' => 500]) ?>

    <?php $form->field($model, 'url')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Active' => 'Active', 'Deactive' => 'Deactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
