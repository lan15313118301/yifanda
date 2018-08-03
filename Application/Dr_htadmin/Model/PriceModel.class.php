<?php

namespace Dr_htadmin\Model;
use Think\Model;
use Think\Model\RelationModel;
class PriceModel extends RelationModel{
    protected $_link = array(
        'type'  =>  array(
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'Type',
			'foreign_key' => 'type',
			'mapping_fields' => 'name',
		),
		'type1'  =>  array(
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'Type',
			'foreign_key' => 'type1',
			'mapping_fields' => 'name',
		),
		'brand'  =>  array(
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'Brand',
			'foreign_key' => 'brand',
			'mapping_fields' => 'name',
		),
		'year'  =>  array(
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'Year',
			'foreign_key' => 'year',
			'mapping_fields' => 'name',
		),
		'technology'  =>  array(
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'Technology',
			'foreign_key' => 'technology',
			'mapping_fields' => 'name',
		),
		'shape'  =>  array(
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'Appearance',
			'foreign_key' => 'shape',
			'mapping_fields' => 'name',
		),
    );
}


