<?php
/* Offers Test cases generated on: 2012-02-04 13:28:53 : 1328387333*/
App::uses('OffersController', 'Controller');

/**
 * TestOffersController *
 */
class TestOffersController extends OffersController {
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
 * OffersController Test Case
 *
 */
class OffersControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.offer', 'app.user', 'app.user_card', 'app.card_variation', 'app.card', 'app.set', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.team', 'app.qualifier', 'app.user_cards_qualifier', 'app.theme', 'app.user_cards_theme');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Offers = new TestOffersController();
		$this->Offers->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Offers);

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
