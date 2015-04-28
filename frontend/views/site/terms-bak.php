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
                	<h1>Terms And Conditions</h1>
                    <p>
                    The standard Lorem Ipsum passage, used since the 1500s<br><br>

"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br><br>

Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC<br><br>

"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"<br><br>

1914 translation by H. Rackham<br><br>


"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"<br><br>

Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC<br><br>

"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."<br><br>

1914 translation by H. Rackham<br><br>

"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."
                    </p>
                	
                </div>
            </div>
    </div>
   </div>
        
        
   
    
   
  
  <div class="container-fluid black_bg margn_thirty">
  		<div class="container">
        	<div class="row">
            	<?php $content= \backend\models\Content::find()->where(['id'=>2,'status'=>1])->all();
              foreach($content as $data){?>
            	<div class="col-md-4">
                	<div class="email_subscrib">
                               	<h1><?= $data->title;?></h1>

                        <p><?= $data->content;?> </p>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        <button type="button" class="btn btn-default margn_top ">Subscribe</button>
                    </div>
                </div>
                    
              <?php } ?>
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