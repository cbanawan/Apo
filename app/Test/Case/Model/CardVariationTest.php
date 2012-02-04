<?php
/* CardVariation Test cases generated on: 2012-02-04 11:44:29 : 1328381069*/
App::uses('CardVariation', 'Model');

/**
 * CardVariation Test Case
 *
 */
class CardVariationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card_variation', 'app.card', 'app.variation');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CardVariation = ClassRegistry::init('CardVariation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardVariation);

		parent::tearDown();
	}

}
