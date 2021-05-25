<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController{

    public function index(){
        $users = $this->Users->find()->all();
        $this->set(compact('users'));
    }

    public function view($id = null){
       $users = $this->Users->get($id);

       $this->set(compact('users'));
    }

    public function add(){
        $user = $this->Users->newEntity();

        if($this->request->is('post')){
            $this->Users->patchEntity($user, $this->request->getData());
            if($this->Users->save($user)){
                $this->Flash->success(__("Usuario Cadastrado"));
                return $this->redirect(['action' => 'index']);
            }
            else{
                $this->Flash->success(__("Usuario Não Cadastrado"));
            }
        }
        $this->set(compact('user'));
    }


}
