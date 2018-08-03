<?php

namespace Admin\Model;
use Think\Model\RelationModel;
class ManagerModel extends RelationModel{
    protected $_link = array( 
        'Manager_group'  =>  array(
                'mapping_type' => self::BELONGS_TO,
                'class_name' => 'Manager_group',
                'foreign_key' => 'ugid',
            ),
        );
}