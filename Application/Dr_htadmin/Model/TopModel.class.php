<?php

namespace Dr_htadmin\Model;
use Think\Model;
use Think\Model\RelationModel;
class TopModel extends RelationModel{
    protected $_link = array(
        'pid'  =>  array(
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'Product',
			'foreign_key' => 'pid',
			'mapping_fields' => 'title',
		),
    );
}


