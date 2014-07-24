<?php

App::uses('AppController', 'Controller');

class GroupsController extends AppController {

    public $components = array('Paginator');

    public function index() {
        $this->Group->recursive = 0;
        $this->set('groups', $this->Paginator->paginate());
    }

    
    public function view($id = null) {
        if (!$this->Group->exists($id)) {
            throw new NotFoundException(__('Invalid group'));
        }
        $options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
        $this->set('group', $this->Group->find('first', $options));
    }

    
    public function add() {
        if ($this->request->is('post')) {
            $this->Group->create();
            if ($this->Group->save($this->request->data)) {
                $this->Session->setFlash(__('The group has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The group could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Group->exists($id)) {
            throw new NotFoundException(__('Invalid group'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Group->save($this->request->data)) {
                $this->Session->setFlash(__('The group has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The group could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
            $this->request->data = $this->Group->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Group->id = $id;
        if (!$this->Group->exists()) {
            throw new NotFoundException(__('Invalid group'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Group->delete()) {
            $this->Session->setFlash(__('The group has been deleted.'));
        } else {
            $this->Session->setFlash(__('The group could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function permissions(){
        $group=  $this->Group;
        
        //permissions for admin
        $group->id=$group->field('id',array('name'=>'Administradores'));
        $this->Acl->allow($group, 'controllers');
        
        //permissions for moderadores
        $group->id=$group->field('id',array('name'=>'Moderadores'));
        $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/News/index');
        $this->Acl->allow($group, 'controllers/News/view');
        $this->Acl->allow($group, 'controllers/News/edit');
        $this->Acl->allow($group, 'controllers/News/add');
        
        $this->Session->setFlash("Permissões atualizadas!!!");
        $this->redirect(array('controller'=>'users', 'action'=>'index'));
        
        
    }
}
