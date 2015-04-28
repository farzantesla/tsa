<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Bidding */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bidding-form">
  <aside class="right-side">
		<div class="row ">
        <section class="cover_photo" >
        <div class="auto_cent">
        	<div class="col-md-6"><a href="#" class="btn_car_van"><img src="<?php echo Yii::getAlias('@web') ?>/designe/img/car.png"> Car</a></div>
            <div class="col-md-6"><a href="#" class="btn_car_van"><img src="<?php echo Yii::getAlias('@web') ?>/designe/img/van.png"> Van</a></div>
        <br clear="all">
        </div>
  			<div class="auto_cent">
<div class="col-lg-12">
    <h1><?= Html::encode($this->title) ?></h1>
<!--            <form role="form">-->

    <?php $form = ActiveForm::begin(); ?>

    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'vehicle_users_id')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'vehicle_id')->textInput(['maxlength' => 11]) ?>

</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'bidder_id')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'user_id')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'car_id')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'bid_price')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'date_time')->textInput() ?>

</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'status')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
<!--                                </form>      	-->
  			</div>
         </section>
        </div>
        </aside><!-- /.right-side -->
    <?php ActiveForm::end(); ?>

</div>
