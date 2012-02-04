<?php
App::uses('AppModel', 'Model');
/**
 * Variation Model
 *
 * @property Card $Card
 */
class Variation extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'variation_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Card' => array(
			'className' => 'Card',
			'joinTable' => 'card_variations',
			'foreignKey' => 'variation_id',
			'associationForeignKey' => 'card_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
