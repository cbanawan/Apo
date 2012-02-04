<?php
/* Variation Test cases generated on: 2012-02-04 11:44:37 : 1328381077*/
App::uses('Variation', 'Model');

/**
 * Variation Test Case
 *
 */
class VariationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.variation', 'app.card', 'app.set', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.user', 'app.user_card', 'app.ards_qualifier', 'app.user_cards_qualifier', 'app.ards_theme', 'app.user_cards_theme', 'app.card_variation');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Variation = ClassRegistry::init('Variation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Variation);

		parent::tearDown();
	}

}
