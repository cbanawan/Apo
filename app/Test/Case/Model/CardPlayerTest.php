<?php
/* CardPlayer Test cases generated on: 2012-02-04 11:44:29 : 1328381069*/
App::uses('CardPlayer', 'Model');

/**
 * CardPlayer Test Case
 *
 */
class CardPlayerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card_player', 'app.card', 'app.player');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CardPlayer = ClassRegistry::init('CardPlayer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardPlayer);

		parent::tearDown();
	}

}
