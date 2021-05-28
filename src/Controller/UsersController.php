<?php

namespace App\Controller;

use App\Controller\AppController;


class UsersController extends AppController{

    public function index(){
        $users = $this->Users->find()->all();
        $this->set(compact('users'));
    }

    public function view($id = null){
       $head = $this->Users->get($id);
       $users = $this->Users->find()->all();
       $this->set(compact('head', 'users'));
       $this->render('index');
    }

    public function add(){
        $user = $this->Users->newEntity();
        if($this->request->getData()['id']){
            $head = $this->Users->get($this->request->getData()['id']);
            $head->name = $this->request->getData()['name'];
            $head->username = $this->request->getData()['username'];
            $head->email = $this->request->getData()['email'];
            $head->password = $this->request->getData()['password'];
            $this->Users->save($head);
            $this->Flash->success(__("Usuario Alterado"));
            return $this->redirect(['action' => 'index']);
        }
        else{
            $this->Users->patchEntity($user, $this->request->getData());
            if($this->Users->save($user)){
                $this->Flash->success(__("Usuario Cadastrado"));
                return $this->redirect(['action' => 'index']);
            }
            else{
                $this->Flash->success(__("Usuario Não Cadastrado"));
            }
        }

        return $this->redirect(['action' => 'index']);
    }

    public function delete($id = null){
        $entity = $this->Users->get($id);
        $this->Users->delete($entity);
        $this->Flash->success(__("Usuario Deletado"));
        return $this->redirect(['action' => 'index']);
    }


}
