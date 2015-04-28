<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use janisto\timepicker\TimePicker;
use dosamigos\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model backend\models\Faqs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faqs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'question')->textInput(['maxlength' => 500]) ?>

    <?php //echo $form->field($model, 'answer')->textInput(['maxlength' => 500]) ?>
    
    <?= $form->field($model, 'answer')->widget(CKEditor::className(), [
        'options' => ['rows' => 10],
        'preset' => 'basic'
    ]) ?>    
    

    <?php echo $form->field($model, 'status')->textInput() ?>   
    
    <?php //echo $form->field($model, 'status[]')->dropDownList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']); ?>
    

    <?php // $form->field($model, 'datetime')->textInput() ?>
    
    <lable><b>Date Time</b></lable>
    <?php echo TimePicker::widget([
        //'language' => 'fi',
        'model' => $model,
        'attribute' => 'datetime',
        'mode' => 'datetime',
        'clientOptions'=>[
        'dateFormat' => 'yy-mm-dd',
        'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
            ]]);   
    ?>

    </br>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
