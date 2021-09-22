<?php
App::uses('Empolye', 'Model');

/**
 * Empolye Test Case
 */
class EmpolyeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.empolye'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Empolye = ClassRegistry::init('Empolye');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Empolye);

		parent::tearDown();
	}

}
