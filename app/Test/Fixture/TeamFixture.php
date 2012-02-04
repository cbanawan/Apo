<?php
/* Team Fixture generated on: 2012-02-04 13:54:31 : 1328388871 */

/**
 * TeamFixture
 *
 */
class TeamFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'franchise' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'ballpark' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'year_started' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'year_finished' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'team_id', 'unique' => 1), 'name_UNIQUE' => array('column' => 'name', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'team_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'franchise' => 'Lorem ipsum dolor sit amet',
			'ballpark' => 'Lorem ipsum dolor sit amet',
			'year_started' => 1,
			'year_finished' => 1
		),
	);
}
