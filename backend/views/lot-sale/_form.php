<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use janisto\timepicker\TimePicker;
use yii\base\Model;

/* @var $this yii\web\View */
/* @var $model app\models\LotSale */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lot-sale-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vehicle_users_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'vehicle_id')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'lot_number')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'lot_price')->textInput(['maxlength' => 11]) ?>

    <?php // $form->field($model, 'ending_date')->textInput() ?>
    
    <lable><b>Ending Date</b></lable>
    <?php echo TimePicker::widget([
        //'language' => 'fi',
        'model' => $model,
        'attribute' => 'ending_date',
        'mode' => 'date',
        'clientOptions'=>[
        'dateFormat' => 'yy-mm-dd',     
            ]]);   
    ?>

    </br>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'sales_status')->textInput(['maxlength' => 11]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
