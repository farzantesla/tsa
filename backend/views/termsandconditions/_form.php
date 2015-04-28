<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\TermsAndConditions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="terms-and-conditions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => 100]) ?>

    <?php //echo $form->field($model, 'content')->textInput(['maxlength' => 1000]) ?>
    
    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'options' => ['rows' => 10],
        'preset' => 'basic'
    ]) ?>    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
