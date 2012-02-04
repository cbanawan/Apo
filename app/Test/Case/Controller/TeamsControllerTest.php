<?php
/* Teams Test cases generated on: 2012-02-04 13:54:41 : 1328388881*/
App::uses('TeamsController', 'Controller');

/**
 * TestTeamsController *
 */
class TestTeamsController extends TeamsController {
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
 * TeamsController Test Case
 *
 */
class TeamsControllerTestCase extends CakeTestCase {
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

		$this->Teams = new TestTeamsController();
		$this->Teams->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Teams);

		parent::tearDown();
	}

}
