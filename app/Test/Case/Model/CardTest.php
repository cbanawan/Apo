<?php
/* Card Test cases generated on: 2012-02-04 13:12:27 : 1328386347*/
App::uses('Card', 'Model');

/**
 * Card Test Case
 *
 */
class CardTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card', 'app.set', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.user', 'app.user_card', 'app.ards_qualifier', 'app.user_cards_qualifier', 'app.ards_theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Card = ClassRegistry::init('Card');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Card);

		parent::tearDown();
	}

}
