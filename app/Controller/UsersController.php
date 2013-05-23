<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
    public function login() {
        if($this->request->is('post')) {
            //echo debug($this->request->data,true,true);

        }

    }
}