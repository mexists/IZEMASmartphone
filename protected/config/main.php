<?php
// uncomment the following to define a path alias
//	Yii::setPathOfAlias('local', dirname(__FILE__));
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return [
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'IZEMA Smartphone',
	// preloading 'log' component
	//'preload' => array('log'),
	// autoloading model and component classes
	'import' => [
		'application.models.*',
		'application.components.*',
		'application.modules.srbac.controllers.SBaseController',
	],
	'behaviors' => [/*'onBeginRequest' => array(
				'class' => 'application.components.RequireLogin'
			),*/
	],
	'modules' => [
		// uncomment the following to enable the Gii tool
		'gii' => [
			'class' => 'system.gii.GiiModule',
			'password' => 'password',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters' => ['127.0.0.1', '::1'],
		],
		'srbac' => [
			'userclass' => 'User',
			//default: User
			'userid' => 'id',
			//default: userid
			'username' => 'username',
			//default:username
			'delimeter' => '@',
			//default:-
			'debug' => true,
			//default :false
			'pageSize' => 10,
			// default : 15
			'superUser' => 'Administrator',
			//default: Authorizer
			'css' => 'srbac.css',
			//default: srbac.css
			'layout' => 'application.views.layouts.main',
			//default: application.views.layouts.main,  //must be an existing alias
			'notAuthorizedView' => 'srbac.views.authitem.unauthorized',
			// default:
			//srbac.views.authitem.unauthorized, must be an existing alias
			'alwaysAllowed' => [ //default: array()
				'SiteLogin',
				'SiteLogout',
				'SiteIndex',
				'SiteAdmin',
				'SiteError',
				'SiteContact',
				'SiteRegister',
			],
			'userActions' => ['Show', 'View', 'List'],
			//default: array()
			'listBoxNumberOfLines' => 15,
			//default : 10
			'imagesPath' => 'srbac.images',
			// default: srbac.images
			'imagesPack' => 'noia',
			//default: noia
			'iconText' => true,
			// default : false
			'header' => 'srbac.views.authitem.header',
			//default : srbac.views.authitem.header,
			//must be an existing alias
			'footer' => 'srbac.views.authitem.footer',
			//default: srbac.views.authitem.footer,
			//must be an existing alias
			'showHeader' => true,
			// default: false
			'showFooter' => true,
			// default: false
			'alwaysAllowedPath' => 'srbac.components',
			// default: srbac.components
			// must be an existing alias
		],
		'admin',
	],
	// application components
	'components' => [
		'user' => [
			// enable cookie-based authentication
			'allowAutoLogin' => true,
			'loginUrl' => ['site/login'],
		],
		'session' => [
			'autoStart' => true,
			'timeout' => 60, //minute
		],
		// uncomment the following to enable URLs in path-format

		'urlManager' => [
			'urlFormat' => 'path',
			/*	'rules'=>array(
					'<controller:\w+>/<id:\d+>'=>'<controller>/view',
					'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
					'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				),*/
			//'showScriptName'=>FALSE,
		],
		/*'db' => array(
			'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database

		'db' => [
			'connectionString' => 'mysql:host=localhost;dbname=izema_smartphone',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'password',
			'charset' => 'utf8',
		],
		'errorHandler' => [
			// use 'site/error' action to display errors
			'errorAction' => 'site/error',
		],
		'authManager' => [
			// Path to SDbAuthManager in srbac module if you want to use case insensitive
			//access checking (or CDbAuthManager for case sensitive access checking)
			'class' => 'application.modules.srbac.components.SDbAuthManager',
			// The database component used
			'connectionID' => 'db',
			// The itemTable name (default:authitem)
			'itemTable' => 'items',
			// The assignmentTable name (default:authassignment)
			'assignmentTable' => 'assignments',
			// The itemChildTable name (default:authitemchild)
			'itemChildTable' => 'itemchildren',
		],
		'behaviors' => ['ApplicationConfigBehavior'],
		'email' => [
			'class' => 'ext.email.Email',
			'delivery' => 'php',
		],
		/*'mail' => [
				'class' => 'ext.yii-mail.YiiMail',
				'transportType' => 'smtp',
				'transportOptions' => [
						'host' => 'smtp.gmail.com',
						'username' => 'ellah.fadhilah93@gmail.com',
						'password' => '1301duan',
						'port' => 465,
				],
				'viewPath' => 'application.views.mail',
		],*/
		'Smtpmail' => [
			'class' => 'application.extensions.smtpmail.PHPMailer',
			'Host' => "smtp.gmail.com",
			'Username' => 'ellah.fadhilah93@gmail.com',
			'Password' => '1301duan',
			'Mailer' => 'smtp',
			'Port' => '587',
			'SMTPAuth' => true,
			'SMTPSecure' => 'tls',
		],
		'ePdf' => [
			'class' => 'ext.yii-pdf.EYiiPdf',
			'params' => [
				'mpdf' => [
					'librarySourcePath' => 'application.vendors.MPDF57.*',
					'constants' => [
						'_MPDF_TEMP_PATH' => Yii::getPathOfAlias('application.runtime'),
					],
					'class' => 'mpdf',
				]
			],
		],
		'log' => [
			'class' => 'CLogRouter',
			'routes' => [
				[
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning, trace, log',
					'categories' => 'system.db.CDbCommand',
					'logFile' => 'db.log'
				],
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			],
		],
	],
	'timeZone' => 'Asia/Kuala_Lumpur',
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	//'params' => array(
	//	// this is used in contact page
	//	'adminEmail' => 'webmaster@example.com',
	//),
	'params' => require(dirname(__FILE__) . '/params.php'),
];