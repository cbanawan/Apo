<?php
/* UserCardsQualifiers Test cases generated on: 2012-02-04 13:28:53 : 1328387333*/
App::uses('UserCardsQualifiersController', 'Controller');

/**
 * TestUserCardsQualifiersController *
 */
class TestUserCardsQualifiersController extends UserCardsQualifiersController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * UserCardsQualifiersController Test Case
 *
 */
class UserCardsQualifiersControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_cards_qualifier', 'app.user_card', 'app.user', 'app.card_variation', 'app.card', 'app.set', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.qualifier', 'app.theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->UserCardsQualifiers = new TestUserCardsQualifiersController();
		$this->UserCardsQualifiers->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserCardsQualifiers);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
