<?php

namespace Dr_htadmin\Model;
use Think\Model;
use Think\Model\RelationModel;
class EntrustModel extends RelationModel{
    protected $_link = array(
        'company'  =>  array(
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'Company',
			'foreign_key' => 'cid',
		),
		'user'  =>  array(
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'User',
			'foreign_key' => 'uid',
		),
		
    );
}


