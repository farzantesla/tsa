
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
<html lang="en">
     <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tsa</title>

    <!-- Bootstrap -->
     
        
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo Yii::getAlias('@web') ?>/designe/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::getAlias('@web') ?>/extradesign/css/font-awesome.css" rel="stylesheet">
<!--    <link href="<?php //echo Yii::getAlias('@web') ?>/extradesign/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php //echo Yii::getAlias('@web') ?>/extradesign/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="<?php echo Yii::getAlias('@web') ?>/extradesign/css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/extradesign/CSS/slicknav.css">
     




	<!-- Modernizr -->
  <script src="<?php echo Yii::getAlias('@web') ?>/extradesign/js/modernizr.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script type="text/javascript">

/***********************************************
* Switch Menu script- by Martial B of http://getElementById.com/
* Modified by Dynamic Drive for format & NS4/IE4 compatibility
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var persistmenu="yes" //"yes" or "no". Make sure each SPAN content contains an incrementing ID starting at 1 (id="sub1", id="sub2", etc)
var persisttype="sitewide" //enter "sitewide" for menu to persist across site, "local" for this page only

if (document.getElementById){ //DynamicDrive.com change
document.write('<style type="text/css">\n')
document.write('.submenu{display: none;}\n')
document.write('</style>\n')
}

function SwitchMenu(obj){
	if(document.getElementById){
	var el = document.getElementById(obj);
	var ar = document.getElementById("masterdiv").getElementsByTagName("span"); 
		if(el.style.display != "block"){ 
			for (var i=0; i<ar.length; i++){
				if (ar[i].className=="submenu") 
				ar[i].style.display = "none";
			}
			el.style.display = "block";
		}else{
			el.style.display = "none";
		}
	}
}

function get_cookie(Name) { 
var search = Name + "="
var returnvalue = "";
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) { 
offset += search.length
end = document.cookie.indexOf(";", offset);
if (end == -1) end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}
}
return returnvalue;
}

function onloadfunction(){
if (persistmenu=="yes"){
var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname
var cookievalue=get_cookie(cookiename)
if (cookievalue!="")
document.getElementById(cookievalue).style.display="block"
}
}

function savemenustate(){
var inc=1, blockid=""
while (document.getElementById("sub"+inc)){
if (document.getElementById("sub"+inc).style.display=="block"){
blockid="sub"+inc
break
}
inc++
}
var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname
var cookievalue=(persisttype=="sitewide")? blockid+";path=/" : blockid
document.cookie=cookiename+"="+cookievalue
}

if (window.addEventListener)
window.addEventListener("load", onloadfunction, false)
else if (window.attachEvent)
window.attachEvent("onload", onloadfunction)
else if (document.getElementById)
window.onload=onloadfunction

if (persistmenu=="yes" && document.getElementById)
window.onunload=savemenustate

</script>
  </head>
  <body>
      <?php $this->beginBody() ?>
       <?php $getid =  Yii::$app->user->id; ?>
	<header class="headr_two">
    	<div class="container">
        	<div class="col-md-4 margn_top"><figure class="login_section"><img src="<?php echo Yii::getAlias('@web') ?>/extradesign/images/logo.png" class="img-responsive"></figure></div>
            <div class="col-md-4 col-sm-12 col-xs-12 pull-right">
                 <?php if(!empty($getid))  { ?>
            <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=vehicle%2Fmygarage&id=<?php echo $getid ?>" class="garge">
            	<img src="<?php echo Yii::getAlias('@web') ?>/extradesign/images/garge.png">
                My Garage (0)
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
                	<li><a href="#" id="mmlogin" data-toggle="modal" data-target="#myLogin"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login</a></li>
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
			
            
            
            
             
            
   </div>
   </header>
      
         <?= $content ?>

      <footer class="bg_ftr">
	<div class="container">
    	<p class="copyright">Copyright 2015 - 2016, All Rights Reserved.</p>
    </div>
</footer>


<!------------popup------------------>




<!-- Modal Register -->


    <!-- MENU -->
   <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php echo Yii::getAlias('@web') ?>/extradesign/js/jquery.slicknav.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#menu').slicknav({
		prependTo:'#demo1'
});

});
</script>

  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo Yii::getAlias('@web') ?>/extradesign/js/bootstrap.min.js"></script>
    


    <?php // $this->endBody() ?>
  </body>
</html>
<?php  $this->endPage() ?>