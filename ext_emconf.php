<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "aw_weather".
 *
 * Auto generated 16-04-2015 17:22
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Weather',
	'description' => 'front-end weather widget based om openweathermap api along with backend module',
	'category' => 'fe',
	'version' => '1.1.2',
	'state' => 'alpha',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearcacheonload' => false,
	'author' => 'alexandros',
	'author_email' => 'websurfer992@gmail.com',
	'author_company' => 'alex-web.gr',
	'constraints' => 
	array (
		'depends' => 
		array (
			'extbase' => '6.0',
			'fluid' => '6.0',
			'typo3' => '6.2.0-6.2.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

