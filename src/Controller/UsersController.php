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


}
