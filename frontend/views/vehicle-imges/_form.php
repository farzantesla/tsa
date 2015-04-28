<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VehicleImges */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-imges-form">

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

    <?php $form = ActiveForm::begin(); ?>
    
                 
                <div class="form-group">
                    <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                </div>
                
                
               
                

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
    <?= $form->field($model, 'title')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'description')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'image')->textInput(['maxlength' => 111]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'car_id')->textInput(['maxlength' => 11]) ?>
</div>
    <div class="box-body">
                                        <div class="form-group">
    <?= $form->field($model, 'status')->textInput(['maxlength' => 11]) ?>

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
<script>
    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });
    $("#file-1").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
	});
    /*
    $(".file").on('fileselect', function(event, n, l) {
        alert('File Selected. Name: ' + l + ', Num: ' + n);
    });
    */
	$("#file-3").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-lg",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
	$("#file-4").fileinput({
		uploadExtraData: {kvId: '10'}
	});
    $(".btn-warning").on('click', function() {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });    
    $(".btn-info").on('click', function() {
        $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });
    /*
    $('#file-4').on('fileselectnone', function() {
        alert('Huh! You selected no files.');
    });
    $('#file-4').on('filebrowse', function() {
        alert('File browse clicked for #file-4');
    });
    */
    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
        /*
        $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
        });
        */
    });
	</script>
