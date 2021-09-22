<?php
/**
 * Empolye Fixture
 */
class EmpolyeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'empolye';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'role' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8mb4_0900_ai_ci', 'charset' => 'utf8mb4'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'role' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet'
		),
	);

}
