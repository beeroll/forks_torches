<?php

if(!$context_config = include('include.php')) $context_config = array();

$main_config = array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
    'import'=>array(
        'application.models.*',
        'application.components.*',
        'application.controllers.*',
    ),

	'modules'=>array(
	),

	// application components
	'components'=>array(
		'user'=>array(
			'allowAutoLogin'=>true,
		),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                '<action:\w+>'=>'site/<action>',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>'
            )
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
                array(
                    'class'=>'CDbLogRoute',
                    'levels'=>'error, warning, info',
                    'logTableName'=>'logs',
                    'connectionID'=>'db',
                    'autoCreateLogTable'=>true,
                    'categories'=>'app.*',
                ),
			),
		),
        'widgetFactory' => array(
            'widgets' => array(
                'CJuiDialog' => array(
                    'cssFile' => false
                ),
                'CJuiAutoComplete' => array(
                    'cssFile' => false
                )
            )
        ),
	),

    'params'=>array(
	),
);

return array_replace_recursive($main_config,$context_config);