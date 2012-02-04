<?php
/* Sets Test cases generated on: 2012-02-04 13:40:18 : 1328388018*/
App::uses('SetsController', 'Controller');

/**
 * TestSetsController *
 */
class TestSetsController extends SetsController {
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
 * SetsController Test Case
 *
 */
class SetsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.set', 'app.wiki_info', 'app.brand', 'app.acc_catalog', 'app.card', 'app.team', 'app.user', 'app.user_card', 'app.card_variation');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Sets = new TestSetsController();
		$this->Sets->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sets);

		parent::tearDown();
	}

}
