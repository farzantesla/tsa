<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use janisto\timepicker\TimePicker;
use dosamigos\ckeditor\CKEditor;
use yii\base\Model;

/* @var $this yii\web\View */
/* @var $model app\models\Notification */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notification-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'users_id')->textInput(['maxlength' => 11]) ?>

    <?php // $form->field($model, 'message')->textInput(['maxlength' => 111]) ?>
    
    <?= $form->field($model, 'message')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?= $form->field($model, 'sender')->textInput(['maxlength' => 111]) ?>

    <?php // $form->field($model, 'date')->textInput() ?>
    
    <lable><b>Date</b></lable>
     <?php echo TimePicker::widget([
        //'language' => 'fi',
        'model' => $model,
        'attribute' => 'date',
        'mode' => 'datetime',
        'clientOptions'=>[
        'dateFormat' => 'yy-mm-dd',
        'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
            ]]);   
    ?>
    
    <br>
    
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
