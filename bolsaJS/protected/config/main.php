<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Bolsa de trabajo de Colegios Salesianas',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.cruge.components.*',
        'application.modules.cruge.extensions.crugemailer.*',
            'ext.eyui.*',
            
	),
    
    'controllerMap'=>array(
        'YiiFeedWidget'=>'ext.yii-feed-widget.YiiFeedWidgetController',
     /* 'min'=>array('class'=>'ext.minScript.controllers.ExtMinScriptController',
                        'optionName'=>'optionValue') */),
    
    

	'modules'=>array(
		
		'cruge'=>array(
            'tableprefix'=>'cruge_',

            // para que utilice a protected.modules.cruge.models.auth.CrugeAuthDefault.php
            //
            // en vez de 'default' pon 'authdemo' para que utilice el demo de autenticacion alterna
            // para saber mas lee documentacion de la clase modules/cruge/models/auth/AlternateAuthDemo.php
            //
            'availableAuthMethods'=>array('default'),//CAMBIAR A DEFAULT

            'availableAuthModes'=>array('username','email'),
            'baseUrl'=>'http://coco.com/',

             // NO OLVIDES PONER EN FALSE TRAS INSTALAR
             'debug'=>false,
             'rbacSetupEnabled'=>false,
             'allowUserAlways'=>false,

            // MIENTRAS INSTALAS..PONLO EN: false
            // lee mas abajo respecto a 'Encriptando las claves'
            //
            'useEncryptedPassword' => false,

            // a donde enviar al usuario tras iniciar sesion, cerrar sesion o al expirar la sesion.
            //
            // esto va a forzar a Yii::app()->user->returnUrl cambiando el comportamiento estandar de Yii
            // en los casos en que se usa CAccessControl como controlador
            //
            // ejemplo:
            //      'afterLoginUrl'=>array('/site/welcome'),  ( !!! no olvidar el slash inicial / )
            //      'afterLogoutUrl'=>array('/site/page','view'=>'about'),
            //
            'afterLoginUrl'=>null,
            'afterLogoutUrl'=>null,
            'afterSessionExpiredUrl'=>null,

            // manejo del layout con cruge.
            //
            'loginLayout'=>'//layouts/main',
            'registrationLayout'=>'//layouts/main',
            'activateAccountLayout'=>'//layouts/main',
            'editProfileLayout'=>'//layouts/main',
            // en la siguiente puedes especificar el valor "ui" o "column2" para que use el layout
            // de fabrica, es basico pero funcional.  si pones otro valor considera que cruge
            // requerirá de un portlet para desplegar un menu con las opciones de administrador.
            //
            'generalUserManagementLayout'=>'ui',
        ),
		
		
		
		// uncomment the following to enable the Gii tool

		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'polencito',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(/*
            'minScript'=>array(
        'class'=>'application.extensions.minScript.components.ExtMinScript',     
        'groupMap'=>array('cssgroup'=>array('assets/52ccd3ac/yRssTwitter.css')
        )),
            
            'clientScript'=>array(
                        'class'=>'ext.minScript.components.ExtMinScript',
                        'optionName'=>'optionValue'),*/
		/*'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),*/
		
		   //
        //  IMPORTANTE:  asegurate de que la entrada 'user' (y format) que por defecto trae Yii
        //               sea sustituida por estas a continuación:
        //
        'user'=>array(
            'allowAutoLogin'=>true,
            'class' => 'application.modules.cruge.components.CrugeWebUser',
            'loginUrl' => array('/cruge/ui/login'),
        ),
        'authManager' => array(
            'class' => 'application.modules.cruge.components.CrugeAuthManager',
        ),
        'crugemailer'=>array(
            'class' => 'application.modules.cruge.components.CrugeMailer',
            'mailfrom' => 'el___beni@hotmail.com',
            'subjectprefix' => 'Bolsa de trabajo(Salesianas Nervion)',
            'debug' => true,
            'transport'=>'hotmail',
            
        ),
        'format' => array(
            'datetimeFormat'=>"d M, Y h:m:s a",
        ),
		
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=bolsas;unix_socket:/Applications/MAMP/tmp/mysql/mysql.sock',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'beny.reading@gmail.com',
	),
);