<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <!-- Title -->
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
        <!-- Description, Keywords -->
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!-- Google web fonts -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/roboto.css" rel="stylesheet" type="text/css">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
        
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.css" rel="stylesheet" type="text/css">
        
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/msdropdown/jquery-1.3.2.min.js" type="text/javascript"></script>
                <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/custom.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/msdropdown/jquery.dd.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/msdropdown/dd.css" />



        <!-- HTML5 Support for IE -->
        <!--[if lt IE 9]>
        <script src="js/html5shim.js"></script>
        <![endif]-->


        <!-- JS -->
            <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
      </head>

    <body style="">

        <!-- Header starts -->

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <!-- Logo and site link -->
                        <div class="logo">
                            <h1><a href="#"> Xchanger24<span class="color">.</span></a></h1>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-sm-offset-4 col-md-offset-4">
                        <div class="list">
                            <!-- Add your phone number here -->
                            <div class="phone">
                                <i class="icon-phone"></i> Phone: +84. 1648-523-325
                            </div>
                            <hr>
                            <!-- Add your email id here -->
                            <div class="email">
                                <i class="icon-envelope-alt"></i> Email: admin@network-rating.com
                            </div>
                            <hr>
                            <!-- Add your address here -->
                            <div class="address">
                                <i class="icon-home"></i> Address: 453 HD, Danang, 59000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Header ends -->

        <!-- Navigation Starts -->

        <!-- Note down the syntax before editing. It is the default twitter bootstrap navigation -->

        <div class="navbar bs-docs-nav" role="banner">

            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>


                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">


                    <!-- Navigation links starts here -->
  

                        <!-- Main menu -->
                        
                        <?php


$this->widget('zii.widgets.CMenu', array(
	
	'items'=>array(
	array(
		'label'=>'Home',
		'url'=>array('site/index'),
	),
        array(
		'label'=>'News',
		'url'=>array('/News'),
	),
                array(
		'label'=>'About Us',
		'url'=>array('/About-Us'),
	),
        
           array(
		'label'=>'Exchange',
		'url'=>array('/Exchange'),
	),   array(
		'label'=>'Support',
		'url'=>array('/Support'),
	),   array(
		'label'=>'FAQ',
		'url'=>array('/FAQ'),
	),
        ),
	'htmlOptions'=>array('class'=>'nav navbar-nav'),
)
);

?>

                        <!-- Navigation with sub menu. Please note down the syntax before you need. Each and every link is important. -->


                        <!--li class="dropdown">
                          <a href="" class="dropdown-toggle" data-toggle="dropdown">Pages #1 <b class="caret"></b></a>
                        <!-- Submenus >
                        <ul class="dropdown-menu">
                          <li><a href="">Support</a></li>
                           <li><a href="">FAQ</a></li>
                          <li><a href="">Team</a></li>
                        </ul>
                      </li-->   


                </nav>
            </div>
        </div>

        <!-- Navigation Ends -->   