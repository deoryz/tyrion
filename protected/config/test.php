<?php

require_once dirname(__FILE__).'/../../config.php';
return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			// uncomment the following to provide test database connection
			'db'=>array(
				'connectionString' => 'mysql:host='.$dt_DB['server'].';dbname='.$dt_DB['database'].'',
			),
			
		),
	)
);
