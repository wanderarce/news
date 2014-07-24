<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

    
    public $components = array(
        'Session',
        'Cookie',
        'Auth',
        'Acl'
    );

    

    //certeza que o problema vai estar aqui, quer ver 
    public function beforeFilter() {
         //ACAO QUE IRA EXECUTAR O LOGIN
            $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
            //AO DESLOGAR SERA REDIRECIONADO PARA..
            $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
            //MENSAGEM CASO TENTEM ACESSAR PAGINAS RESTRITAS
            $this->Auth->authError = '<div class="alert alert-danger"><center>Você não tem acesso a essa página!</center></div>';
            //MENSAGEM AO ERRAR O LOGIN E/OU SENHA
            $this->Auth->loginError = '<div class="alert alert-danger"><center>Usuário e/ou Senha incorretos!</center></div>';
            //FORMULARIO QUE SERA EFETUADO O LOGIN PARA TER ACESSO AS PAGINAS
            $this->Auth->authenticate = array(
                'Form' => array(
                    'userModel' => 'User',
                    'fields' => array('password' => 'password', 'username' => 'username')
            ));
            //AO LOGAR SERA REDIRECIONADO PARA...
            $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
        
        // For CakePHP 2.0

        //$this->Auth->allow();
          //  $this->Auth->allow(array('controller'=>'all', 'action'=>'view'));
            $this->Auth->allow('view', 'listar', 'menu');
        return parent::beforeFilter();
    }

}

