<?php

App::uses('AppModel', 'Model');


class Group extends AppModel {

    public $actsAs=array('Acl'=>array('type'=>'requester'));
    
    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here'
            ),
        ),
    );

   
    public $hasMany = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'group_id',
            'dependent' => false
        )
    );
    
  public function parentNode(){
        return null;
  }
}
