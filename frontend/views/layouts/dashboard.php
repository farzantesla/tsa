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
<html>
    <?= Html::csrfMetaTags() ?>
    <title><?php echo 'TSA' ?></title>
    <?php $this->head() ?>
    <head>
        <meta charset="UTF-8">
        <title>TSA</title>
        
        
        
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

    </head>
    <body class="skin-blue">
        <?php $this->beginBody() ?>
        
        <?php $getid =  Yii::$app->user->id; ?>
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php?r=site%2Findex" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="<?php echo Yii::getAlias('@web') ?>/designe/img/Logo.png" class="img-responsive"> 
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle icone_style" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                     
                </a>
                 <a href="#" class="refrsh_btn icone_style"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span></a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                      
                      <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?= Yii::$app->user->identity->full_name ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo Yii::getAlias('@web') ?>/designe/img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?= Yii::$app->user->identity->full_name ?>
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
<!--                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>-->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=user%2Fview&id=<?php echo $getid ?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <!--<a href="<?php // echo Yii::app()->createAbsoluteUrl('site/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>-->
                                        
                                    <!--<a href="<?php //echo Yii::getAlias('@web') ?>/index.php/site/logout" data-method="post"  class="btn btn-default btn-flat">Logout</a>-->
                                   <?= Html::a('Logout', ['/site/logout'], ['data-method'=>'post','class'=>'btn btn-default btn-flat']) ?>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        <!-- Notifications: style can be found in dropdown.less -->
                        
                        <!-- Tasks: style can be found in dropdown.less -->
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo Yii::getAlias('@web') ?>/designe/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?= Yii::$app->user->identity->full_name ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            
                            <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=user%2Fview&id=<?php echo $getid ?>">
                                <i class="fa fa-home"></i> <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=vehicle%2Fmygarage&id=<?php echo $getid ?>">
                                <i class="fa fa-wrench"></i> <span>My Garage</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=bidding%2Fmybids&bidder_id=<?php echo $getid ?>">
                                <i class="fa fa-tachometer"></i> <span>My Bids</span>
                                
                            </a>
                            
                        </li>
                        
                        <li class="treeview">
                            <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=vehicle%2Fsoldvehicle&id=<?php echo $getid ?>">
                                <i class="fa fa-check-square"></i> <span>Sold Vehicles</span> 
                                
                            </a>
                            
                        </li>
                        <li class="treeview">
                            <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=vehicle%2Fpurchased&id=<?php echo $getid ?>">
                                <i class="fa fa-edit"></i> <span>Purchased Vehicles</span>
                               
                            </a>
                            
                        </li>
                        <li class="treeview">
                            <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=vehicle%2Fnotification&id=<?php echo $getid ?>">
                                <i class="fa fa-bell"></i> <span>Notifications</span> 
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                            
                        </li>
                        <li>
                            <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=vehicle%2Fmessages&id=<?php echo $getid ?>">
                                <i class="fa fa-envelope"></i>  <span>Messages</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html">
                               <i class="fa fa-calendar"></i><span>Wish-List  asd asd</span>
                                
                            </a>
                        </li>
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
        
         



            
                  <?= $content ?>
            
            
                    <!-- add new calendar event modal -->
</div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
<!--        <script src="<?php //echo Yii::getAlias('@web') ?>/designe/js/AdminLTE/app.js" type="text/javascript"></script>-->
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo Yii::getAlias('@web') ?>/designe/js/AdminLTE/dashboard.js" type="text/javascript"></script>        
        <?php  $this->endBody() ?>
    </body>
</html>
<?php  $this->endPage() ?>
