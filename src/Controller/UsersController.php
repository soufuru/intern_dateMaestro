<?php
/**
 * @auther Rtakaha
 */
namespace App\Controller;

class UsersController extends AppController {


    public function index()
    {
        $users = $this->Users->find('all');
        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, ['contain' => ['Plans']]);
        $this->set(compact('user'));
    }
}
