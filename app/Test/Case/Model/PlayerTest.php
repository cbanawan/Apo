<?php
/* Player Test cases generated on: 2012-02-04 11:44:32 : 1328381072*/
App::uses('Player', 'Model');

/**
 * Player Test Case
 *
 */
class PlayerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.player', 'app.card', 'app.set', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.user', 'app.user_card', 'app.ards_qualifier', 'app.user_cards_qualifier', 'app.ards_theme', 'app.user_cards_theme', 'app.card_player');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Player = ClassRegistry::init('Player');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Player);

		parent::tearDown();
	}

}
