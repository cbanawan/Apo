<?php
/* Offer Test cases generated on: 2012-02-04 11:44:31 : 1328381071*/
App::uses('Offer', 'Model');

/**
 * Offer Test Case
 *
 */
class OfferTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.offer', 'app.buyer', 'app.user_card');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Offer = ClassRegistry::init('Offer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Offer);

		parent::tearDown();
	}

}
