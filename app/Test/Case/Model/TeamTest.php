<?php
/* Team Test cases generated on: 2012-02-04 13:54:31 : 1328388871*/
App::uses('Team', 'Model');

/**
 * Team Test Case
 *
 */
class TeamTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.team');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Team = ClassRegistry::init('Team');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Team);

		parent::tearDown();
	}

}
