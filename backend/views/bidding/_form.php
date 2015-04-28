<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use janisto\timepicker\TimePicker;
use yii\base\Model;

/* @var $this yii\web\View */
/* @var $model frontend\models\Bidding */
/* @var $form yii\widgets\ActiveForm */
?>
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
    <lable><b>Date Time</b></lable>
    <?php echo TimePicker::widget([
        //'language' => 'fi',
        'model' => $model,
        'attribute' => 'date_time',
        'mode' => 'datetime',
        'clientOptions'=>[
        'dateFormat' => 'yy-mm-dd',
        'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
            ]]);   
    ?>

    </br>

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
