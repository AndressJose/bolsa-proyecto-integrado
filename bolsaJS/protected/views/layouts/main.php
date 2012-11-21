<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

        
        
        
        <!-- OBLIGATORIOS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
     <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/redmond/jquery-ui-1.9.1.custom.css" />
    
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jsmios/jquery-ui-1.9.1.custom.js"></script>
      
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jsmios/jquery-1.8.2.js"></script>
        <script>
	$(function() {
		
	
		$( "#button" ).button();
		$( "#radioset" ).buttonset();
		

		
		$( "#tabs" ).tabs();
		

		
		$( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Cancel",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});

		// Link to open the dialog
		$( "#dialog-link" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
	

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>
        
        <style>
	body{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	</style>
    
        
        
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
    

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	

                
                
        </div><!-- header -->

	<div id="mainmenu">
		<?php 
		
	
		
		$this->widget('zii.widgets.Cmenu',array(  
			'items'=>array(
				
				array('label'=>'Home', 'url'=>array('/site/index')),
				
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Formulario CV', 'url'=>array('/full/create')),
				
				//array('label'=>'NewUser', 'url'=>array('/usuario/create')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				array('label'=>'Administrar Usuarios'
                , 'url'=>Yii::app()->user->ui->userManagementAdminUrl
                , 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Login'
                , 'url'=>Yii::app()->user->ui->loginUrl
                , 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')'
                , 'url'=>Yii::app()->user->ui->logoutUrl
                , 'visible'=>!Yii::app()->user->isGuest),

			
			),

		)); 
		

		
		
		
		
		
		
		
		
		
		
		?>
	</div><!-- mainmenu -->
	<?php  if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif ?>

	<?php echo $content; ?>

	<div class="clear"></div>
      
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
        <center>
          <script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>
<table border="0" bgcolor="#5F6364" cellspacing=1 cellpadding=3 class="clock24st" style="line-height:14px; padding:0;">
<tr><td bgcolor="#DCE8E8" class="clock24std" style="font-family:arial; font-size:12px;"><a href="http://www.24webclock.com/de/"><img src="http://www.24webclock.com/ico.gif" width="14" height="14" border="0" alt="gratis homepageuhr" align="left" hspace="2"></a> <a href="http://www.24webclock.com/es/" style="text-decoration:none;"><span class="clock24s" id="clock24_54109" style="color:#5F6364;">reloj web</span></a></td></tr>
</table>
<script type="text/javascript">
var clock24_54109 = new clock24('54109',60,'%W, %M %dd %yyyy %hh:%nn','es');
clock24_54109.daylight('ES'); clock24_54109.refresh();
</script>
        </center>

</div><!-- page -->

</body>
</html>
