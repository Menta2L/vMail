<?php
define("APPLICATION_ENV", "development");
return new \Phalcon\Config(array(
	'database' => array(
		'adapter'  => 'Mysql',
		'host'     => 'localhost',
		'username' => 'vmail',
		'password' => 'vmail',
		'name'     => 'vmail',
	),
	'application' => array(
		'controllersDir' => __DIR__ . '/../../app/controllers/',
		'modelsDir'      => __DIR__ . '/../../app/models/',
		'viewsDir'       => __DIR__ . '/../../app/views/',
		'pluginsDir'     => __DIR__ . '/../../app/plugins/',
		'libraryDir'     => __DIR__ . '/../../app/library/',
		'baseUri'        => '/vmail/',
		'defaultModule'  => 'portal',
		'debug'  => true
	),
	'models' => array(
		'metadata' => array(
			'adapter' => 'Memory'
		)
	),
	'modules' => array(
		    'portal' => array(
					'className'=>'VMail\Portal\Module',
					'path'=>'../app/modules/portal/Module.php',
					'type'=>'http'
				     ),
		    'api'    => array(
					'className'=>'VMail\Api\Module',
					'path' => '../app/modules/api/Module.php',
					'type' => 'rest'
				     )
	),
	'cache' => array(
		'frontend' => array(
			'name' => 'Data',
			'lifetime' => 172800,
		),
		'backend' => array(
			'name' => 'Apc',
			'cacheDir' => '../app/cache/'
		)
	),
	'error' => array(
	    'logger' => new \Phalcon\Logger\Adapter\File( __DIR__ . '/../../var/logs/' . APPLICATION_ENV . '.log'),
    	    'controller' => 'error',
    	    'action' => 'index',
	)

));
