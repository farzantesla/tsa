<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
$this->title = 'My Yii Application';


?>
   
   <div class="container-fluid">
   	<div class="container">
    		<div class="row">
            	<div class="col-md-12 margn_thirty">
                	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <?php $faq= backend\models\Faqs::find()-> orderBy(['id'=>SORT_DESC])->Where(['status'=>'active'])->all();
              foreach($faq as $faqs){
              //echo $faqs->answer;
              
              ?>
                            
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <?= $faqs->question; ?>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
     <?= $faqs->answer; ?>
      </div>
    </div>
  </div>
                            
                            <?php } ?>
    
  
  
</div>
                </div>
            </div>
    </div>
   </div>
        
        
   
    
   
  
  <div class="container-fluid black_bg">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-4">
                	<div class="email_subscrib">
                    	<h1>Newsletter</h1>
                        <p>velit Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        <button type="button" class="btn btn-default margn_top ">Subscribe</button>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="email_subscrib">
                    	<h1>Latest Tweet</h1>
                        
                </div>
                
            </div>
            <div class="col-md-4">
                <div class="email_subscrib">
                    	<h1>Contact Us</h1>
                        <div class="fotter_pra "><i class="fa fa-location-arrow fa-lg"></i>  Address 1234 Street name</div>
                        <div class="fotter_pra margn_top"><i class="fa fa-phone fa-lg"></i>  Phone 123456</div>
                        <div class="fotter_pra margn_top"><i class="fa fa-inbox fa-lg"></i>  Email abc@abc.com</div>
                       
                                      
                                                     
                                                                    
                 </div>
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