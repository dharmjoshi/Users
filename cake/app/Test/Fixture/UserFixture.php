<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_0900_ai_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
