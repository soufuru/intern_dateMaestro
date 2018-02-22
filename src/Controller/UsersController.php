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
    /**
     * view
     * users/view/idで詳細画面を表示
     * @author Rtakaha
     * @param $id
     */
    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set('plan', $user);
    }
}
