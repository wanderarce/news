<?php

App::uses('AppController', 'Controller');


class NewsController extends AppController {


    public $components = array('Paginator');

    
    public function index() {
        $this->News->recursive = 0;
        $this->set('news', $this->Paginator->paginate());
        
    }

    public function view($id = null) {
        if (!$this->News->exists($id)) {
            throw new NotFoundException(__('Invalid news'));
        }
        $options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
        $this->set('news', $this->News->find('first', $options));
    }

    
    public function add() {
        if ($this->request->is('post')) {
            $this->News->create();
            if ($this->News->save($this->request->data)) {
                $this->Session->setFlash(__('The news has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The news could not be saved. Please, try again.'));
            }
        }
        $users = $this->News->User->find('list',array('fields'=>'username'));
        $this->set(compact('users'));
        $categories = $this->News->Category->find('list',array('fields'=>'category'));
        $this->set(compact('categories'));
    }

    
    public function edit($id = null) {
        if (!$this->News->exists($id)) {
            throw new NotFoundException(__('Invalid news'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->News->save($this->request->data)) {
                $this->Session->setFlash(__('The news has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The news could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
            $this->request->data = $this->News->find('first', $options);
        }
        $users = $this->News->User->find('list');
        $this->set(compact('users'));
        $categories = $this->News->Category->find('list',array('fields'=>'category'));
        $this->set(compact('categories'));
    }

    public function delete($id = null) {
        $this->News->id = $id;
        if (!$this->News->exists()) {
            throw new NotFoundException(__('Invalid news'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->News->delete()) {
            $this->Session->setFlash(__('The news has been deleted.'));
        } else {
            $this->Session->setFlash(__('The news could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
