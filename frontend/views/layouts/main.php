<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
//new add from signup for form of signup

use yii\bootstrap\ActiveForm;
//

/* @var $this \yii\web\View */
/* @var $content string */
//AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/style.css" rel="stylesheet">
    <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/morris/morris.css" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
        <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/designe/css/slicknav.css">
     
       <!-- Syntax Highlighter -->
  <!-- Demo CSS -->
	<link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/designe/css/slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/designe/css/flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/modernizr.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script type="text/javascript">
$(function(){
	$(".scroll").on('click',function(){
	var id = $(this).attr('href');
	var offset = $(id).offset();
	console.log(offset);
	$('html, body').animate({scrollTop: offset.top}, 1000);
        return false;
	});
	
});
</script>
  </head>
  <body>
      <?php $this->beginBody() ?>
      <?php $getid =  Yii::$app->user->id; ?>
	<header class="headr_one">
    	<div class="container">
        	<div class="col-md-4 margn_top"><figure class="login_section"><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/logo.png" class="img-responsive"></figure></div>
            <div class="col-md-4 col-sm-12 col-xs-12 pull-right">
            <?php if(!empty($getid))  { ?>
                
            <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=vehicle%2Fmygarage&id=<?php echo $getid ?>" class="garge">
            	<img src="<?php echo Yii::getAlias('@web') ?>/designe/images/garge.png">
                My Garage
            </a>
            <?php }?>
           <?php     if (!\Yii::$app->user->isGuest) {
           // return $this->goHome(); ?>
             <div class="logian_main">
            	<ul class="list-unstyled list-inline center-block">
                	<li>
                            <a href="index.php?r=site/logout" data-method="post" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Logout</a>
                        </li>
                    	
                    
                </ul>
            </div>
      <?php  }else{ ?>
                <div class="logian_main">
            	<ul class="list-unstyled list-inline center-block">
                	<li><a href="#"  data-toggle="modal" data-target="#myLogin"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login</a></li>
                    	<li>|</li>
                    <li><a href="#" data-toggle="modal" data-target="#myLogin"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>Register</a></li>
                </ul>
            </div>
          
          
  <?php    } ?>
                
            </div>
          	<div class="navi_top">
       <ul id="menu">
    		        	         <li><a href="index.php">Home</a>
                    </li>
                   <?php if(!empty($getid))  { ?>
                    <li>
                        <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=vehicle%2Fmygarage&id=<?php echo $getid ?>">Account</a>
                    </li>
                   <?php }?>
                     <li>
                        <a href="index.php?r=site%2Fgenerallist">General Listings</a>
                    </li>
                     <li>
                        <a href="index.php?r=site%2Fterms">Terms & Condition</a>
                    </li>
                     <li>
                        <a href="index.php?r=site%2Ffaq">FAQ</a>
                    </li>
                     <li>
                        <a href="index.php?r=site%2Fcontactus">Contact Us</a>
                    </li>
</ul>


<div id="demo1"></div>
</div>
			
			<div class="banner">
           	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <!-- First slide -->
    <div class="item active">
      <div class="col-md-12">
        <h1 class="text-center heading">Welcome To Trade Stock Auction</h1>
        <p class="text-center heading_pra">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
        Ut enim ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>Duis aute irure dolor in reprehenderit in voluptate velit 

esse cillum dolore eu fugiat nulla pariatur. <br> sunt in culpa qui officia deserunt mollit anim id est aborum.</p>
        </div>

 
    </div><!-- /.item -->
    
    <div class="item ">
     
          <div class="col-md-12">
       <h1 class="text-center heading">Welcome To Trade Stock Auction</h1>
      <p class="text-center heading_pra">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
        Ut enim ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>Duis aute irure dolor in reprehenderit in voluptate velit 

esse cillum dolore eu fugiat nulla pariatur. <br> sunt in culpa qui officia deserunt mollit anim id est aborum.</p>
        </div>>
        

    
    </div>
    
      <div class="item ">
    <div class="col-md-12">
        <h1 class="text-center heading">Welcome To Trade Stock Auction</h1>
      <p class="text-center heading_pra">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
        Ut enim ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>Duis aute irure dolor in reprehenderit in voluptate velit 

esse cillum dolore eu fugiat nulla pariatur. <br> sunt in culpa qui officia deserunt mollit anim id est aborum.</p>
        </div>
        

      
    </div>



  </div><!-- /.carousel-inner -->

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic"
     role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic"
     role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div><!-- /.carousel -->
            </div>
            
            
            <div class="arrow_down"><figure><a href="#auction" class="scroll"><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/arrow.png"></a></figure></div>
             
            <div class="col-md-4">
            	<a class="van_car" href="#"> <img src="<?php echo Yii::getAlias('@web') ?>/designe/images/car.png">Car</a>
                    <a class="car_van" href="#"><img src="<?php echo Yii::getAlias('@web') ?>/designe/images/van.png">Van</a>
           
            </div>
   </div>
   </header>

        <?= $content ?>
  

<!-- Modal Register -->


    <!-- MENU -->
   <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php echo Yii::getAlias('@web') ?>/designe/js/jquery.slicknav.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#menu').slicknav({
		prependTo:'#demo1'
});

});
</script>

  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/bootstrap.min.js"></script>
    

  <!-- FlexSlider -->
  <script defer src="<?php echo Yii::getAlias('@web') ?>/designe/js/jquery.flexslider.js"></script>

   <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 210,
        itemMargin: 5,
        minItems: 2,
        maxItems: 4,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  <!-- Optional FlexSlider Additions -->
  <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/jquery.easing.js"></script>
  <script defer src="<?php echo Yii::getAlias('@web') ?>/designe/js/demo.js"></script>
    <?php // $this->endBody() ?>
  </body>
</html>
<?php  $this->endPage() ?>