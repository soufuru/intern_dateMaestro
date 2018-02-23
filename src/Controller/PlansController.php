<?php
/**
 * @author Rtakaha
 */

// src/Controller/PlansController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class PlansController extends AppController
{
    public function index()
    {
        $plans = $this->Plans->find('all')->contain(['Users', 'Spots']);

        $this->set(compact('plans'));
    }

    /**
     * 詳細画面表示
     * @author soufuru
     * @param null $id
     */
    public function view($id) {
        $plan = $this->Plans->get($id,['contain' => ['Spots']]);
        $this->set(compact('plan'));
    }


    /**
     * 新規投稿
     * @author soufuru
     */
    public function input(){

        $plan = $this->Plans->newEntity();
        if ($this->request->is('post')) {
            $plan = $this->Plans->patchEntity($plan, $this->request->getData());

            if ($this->Plans->save($plan)) {
                $this->Flash->success(__('The plans has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The plan could not be saved. Please, try again.'));
            }

        }

        $this->set(compact('plan'));
    }




}