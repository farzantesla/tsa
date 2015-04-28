<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
$this->title = 'My Yii Application';


?>

<?php $getid =  Yii::$app->user->id; ?>

   
   <div class="container-fluid">
   	<div class="container">
    		<div class="row">
            	 <div class="col-md-3 margin-tp">
        
        <!-- Keep all menus within masterdiv-->
            <div id="masterdiv">
            
                <div class="headmenu" onclick="SwitchMenu('sub1')">Category</div>
                <span class="submenu" id="sub1">
                     <a href="#">Option one</a><br>
                     <a href="#">Option two</a><br>
                  
                </span>
            
                <div class="headmenu" onclick="SwitchMenu('sub2')">Condition</div>
                <span class="submenu" id="sub2">
                    <a href="#">Option one</a><br>
                     <a href="#">Option two</a><br>
                </span>
            
                <div class="headmenu" onclick="SwitchMenu('sub3')">Brand</div>
                <span class="submenu" id="sub3">
                   <a href="#">Option one</a><br>
                     <a href="#">Option two</a><br>
                </span>
                
                <div class="headmenu" onclick="SwitchMenu('sub4')">Price</div>
                <span class="submenu" id="sub4">
                    <a href="#">Option one</a><br>
                     <a href="#">Option two</a><br>
                </span>
            
                
                
            
            </div>
            </div>
            
            <div class="col-md-9 margin-tp">
                
                 <?php $veh=  frontend\models\Vehicle::find()->where(['status'=>1])->orderBy(['id'=>SORT_DESC,])->all();
              foreach($veh as $vehs){
                  
                  $vehid =  $vehs->id;
              ?>
            	<div class="row bdr_btm">
                	<h1><?= $vehs->make;?> <?= $vehs->model;?> <?= $vehs->year_2;?></h1>
                 <div class="col-md-4">
                	<div class="big_image"><img src="<?php echo Yii::getAlias('@web') ?>/extradesign/images/kitchen_adventurer_lemon.jpg"></div>
                    	<div class="thumbnail_pic"><img src="<?php echo Yii::getAlias('@web') ?>/extradesign/images/kitchen_adventurer_cheesecake_brownie.jpg" class="img-thumbnail"></div>
                        <div class="thumbnail_pic"><img src="<?php echo Yii::getAlias('@web') ?>/extradesign/images/kitchen_adventurer_cheesecake_brownie.jpg" class="img-thumbnail"></div>
                        <div class="thumbnail_pic"><img src="<?php echo Yii::getAlias('@web') ?>/extradesign/images/kitchen_adventurer_cheesecake_brownie.jpg" class="img-thumbnail"></div>
                        <div class="thumbnail_pic"><img src="<?php echo Yii::getAlias('@web') ?>/extradesign/images/kitchen_adventurer_cheesecake_brownie.jpg" class="img-thumbnail"></div>
                    
                </div>
              	  <div class="col-md-5 margin-tp">
                  	<div class="drive_des" ><?= $vehs->mileage;?> Km</div>
                    <div class="drive_des" ><?= $vehs->transmission;?></div>
                    <br clear="all">
                   <div class="drive_des" > <?= $vehs->conditions;?></div>
                    <div class="drive_des" ><?= $vehs->fuel;?></div>
                    <br clear="all">
                    <div class="drive_des" >800</div>
                    <br clear="all">
                    <p><?= $vehs->description;?> </div>
                  <div class="col-md-3 bdr_lft">
                  		<span class="text-center prive_det">£ <?= $vehs->bidding_price;?></span>
                       
                                 <?php if(!empty($getid)){?>
                  
                  <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=bidding%2Fcreate&id=<?php echo $getid ?>&vehid=<?php echo $vehid ?>" class="btn_price">View Detail</a>
                  
                  <?php }
                  
                  else{
                  ?>
                  <a class="btn_price" onclick="login()">View Detail</a>
                  <?php } ?>
                                
                               
                        <span class="content_dealer">Dealer  </span>
                        <span class="content_dealer"><?= $vehs->location;?></span>
                        <span class="text-center prive_det">Certified dealer</span>
                  </div>
                  </div>
                
                <?php }?>
                     </div>
            </div>
    </div>
   </div>
        
       <!------------popup------------------>



<!-- Modal Login -->
<div class="modal fade" id="myLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#Login" aria-controls="Login" role="tab" data-toggle="tab">Login</a></li>
    <li role="presentation"><a href="#Register" aria-controls="Register" role="tab" data-toggle="tab">Register</a></li>

  </ul>
       
      </div>
      <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="Login">
    
        
        
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model_login, 'username')->textInput(['class'=>'form-control margn_top', 'id'=>'recipient-name', 'placeholder'=>'User Name'])->label(false) ?>
                <?= $form->field($model_login, 'password', ['inputOptions'=>['class'=>'form-control','placeholder'=>'Password']])->passwordInput()->label(false); ?> 
                <?= $form->field($model_login, 'rememberMe')->checkbox() ?>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        
    </div>
    <div role="tabpanel" class="tab-pane" id="Register">
<!----<div class="modal-body">
        <input type="text" class="form-control margn_top" id="recipient-name" placeholder="Company Name">
        <input type="password" class="form-control margn_top" id="recipient-name" placeholder="Full Name">
        <input type="text" class="form-control margn_top" id="recipient-name" placeholder="Email Address">
        <input type="password" class="form-control margn_top" id="recipient-name" placeholder="Phone Number">
        <input type="text" class="form-control margn_top" id="recipient-name" placeholder="Company Contact Number">
        <input type="password" class="form-control margn_top" id="recipient-name" placeholder="Address">
        <input type="text" class="form-control margn_top" id="recipient-name" placeholder="Website">
        <input type="password" class="form-control margn_top" id="recipient-name" placeholder="Vat Number">
        <input type="text" class="form-control margn_top" id="recipient-name" placeholder="Business Number">
         
      </div>---->
<!-----------------------------------------Start Registration-------------------------------------------------->


    
<div class="user-form">
      <?php   
      use backend\models\User;
      $model = new User(); ?>

    <?php $form = ActiveForm::begin(); ?>
    <input type="hidden" name="reg_from" value="1" />
    <br />
    <?= $form->field($model, 'full_name')->textInput(['maxlength' => 225,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Full Name' ])->label(false) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Username' ])->label(false) ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => 200,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Company Name' ])->label(false) ?>

    <?= $form->field($model, 'phone_no')->textInput(['class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Phone Number' ])->label(false) ?>

    <?= $form->field($model, 'business_no')->textInput(['class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Business Number' ])->label(false) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 222,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Address' ])->label(false) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => 45,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Website' ])->label(false) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Email Address' ])->label(false) ?>

    <?= $form->field($model, 'vat')->textInput(['maxlength' => 22,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Vat Number' ])->label(false) ?>
    
    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => 255,'class'=>'form-control margn_top', 'id'=>'recipient-name','placeholder'=>'Password' ])->label(false) ?>
     <div class="form-group">
         <?= Html::submitButton($model->isNewRecord ? 'Register' : 'Update', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

     
      </div>
    </div>
  </div>

</div>
      
    </div>
  </div>
</div> 

<script>
function login()
{
   // alert("login!");
  //$('#mmlogin').click();
  
  //$('#mmlogin_reg').click();
   document.getElementById('mmlogin').click();
}
</script>