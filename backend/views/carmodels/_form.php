<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Carmodels */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carmodels-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 11]) ?>

   <!--- <?= $form->field($model, 'car_make_id')->textInput() ?>--->

    <?php 
use yii\helpers\ArrayHelper;
use backend\models\Make;
?>
<?=
$form->field($model, 'car_make_id')
     ->dropDownList(
            ArrayHelper::map(Make::find()->all(), 'id', 'title')
            )
?>
        
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
