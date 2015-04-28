<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use janisto\timepicker\TimePicker;
use yii\base\Model;

/* @var $this yii\web\View */
/* @var $model app\models\Review */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="review-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'users_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'vehicle_users_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'vehicle_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'car_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'comments')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rating')->textInput(['maxlength' => 11]) ?>

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
