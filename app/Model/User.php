<?php

App::uses('AppModel', 'Model');

class User extends AppModel {

    //APOS CRIAR O USUARIO, FAZ A CRIPTOGRAFIA DA SENHA
    public function beforeSave($options = array()) {
        if (isset($this->data['User']['password'])) {
            $password = &$this->data['User']['password'];
            $password = AuthComponent::password($password);
        }
        return parent::beforeSave($options);
    }

    public $actsAs = array(
        'Acl' => array('type' => 'requester'),
        'Upload.Upload' => array(
            'photo' => array(
                'pathMethod' => 'primaryKey',
                'fields' => array(
                    'dir' => 'photo_dir'
                ),
                'thumbnailMethod' => 'php'
            )
        )
    ); //ARO
    public $validate = array(
        'username' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Este campo é obrigatório!!'
            ),
        ),
        'email' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Este campo é obrigatório!!'
            ),
        ),
        'password' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty')
            //'message' => 'Your custom message here'
            ),
        ),
        'locked' => array(
            'notEmpty' => array(
            //'rule' => array('notEmpty')
            //'message' => 'Your custom message here'
            ),
        ),
        'group_id' => array(
            'numeric' => array(
                'rule' => array('numeric')
            //'message' => 'Your custom message here'
            ),
        ),
    );
    public $belongsTo = array(
        'Group' => array(
            'className' => 'Group',
            'foreignKey' => 'group_id'
        )
    );
    public $hasMany = array(
        'News' => array(
            'className' => 'News',
            'foreignKey' => 'user_id',
            'dependent' => false
        )
    );

    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }

        if (isset($this->data[$this->alias]['group_id'])) {
            $groupId = $this->data[$this->alias]['group_id'];
        } else {
            $groupId = $this->field('group_id');
        }
        return $groupId ? array('Group' => array('id' => (int) $groupId)) : null;
    }

    public function bindNode($user) {
        return array(
            'model' => 'Group',
            'foreign_key' => $user[$this->alias]['group_id']
        );
    }

}
