<?php
App::uses('Jobtype', 'Model');

/**
 * Jobtype Test Case
 *
 */
class JobtypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jobtype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Jobtype = ClassRegistry::init('Jobtype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jobtype);

		parent::tearDown();
	}

}
