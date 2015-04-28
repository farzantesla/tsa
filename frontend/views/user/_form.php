<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
div class="user-form">
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

    <?php $form = ActiveForm::begin(); ?>
<div class="box-body">
                                        <div class="form-group">
 <?php $form->field($model, 'id')->textInput(['maxlength' => 11]) ?>
                                        </div>
    <div class="box-body">
                                        <div class="form-group">
   <?=  $form->field($model, 'full_name')->textInput(['maxlength' => 225]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'company_name')->textInput(['maxlength' => 200]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
   <?= $form->field($model, 'phone_no')->textInput() ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
  <?= $form->field($model, 'business_no')->textInput() ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
 <?= $form->field($model, 'address')->textInput(['maxlength' => 222]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
   <?= $form->field($model, 'website')->textInput(['maxlength' => 45]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
 <?php // $form->field($model, 'auth_key')->textInput(['maxlength' => 32]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
<?php //$form->field($model, 'password_hash')->textInput(['maxlength' => 255]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
  <?php //$form->field($model, 'password_reset_token')->textInput(['maxlength' => 255]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
 <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'vat')->textInput(['maxlength' => 22]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
   <?php // $form->field($model, 'status')->textInput() ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
  <?= $form->field($model, 'payment_status')->textInput() ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
<?php //$form->field($model, 'created_at')->textInput() ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
  <?php //$form->field($model, 'updated_at')->textInput() ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
   <?php //$form->field($model, 'profile_status')->dropDownList([ 'Active' => 'Active', 'De-Active' => 'De-Active', ], ['prompt' => '']) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
					<div class="box-footer">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        
</div>
<!--                                </form>      	-->
  			</div>
         </section>
        </div>
        </aside><!-- /.right-side -->
    <?php ActiveForm::end(); ?>
        </div>
        