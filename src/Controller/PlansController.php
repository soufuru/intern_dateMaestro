<?php
/**
 * @author Rtakaha
 */

// src/Controller/PlansController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class PlansController extends AppController
{

    public function index()
    {
        $plans = $this->Plans->find('all')->contain(['Users']);

        $this->set(compact('plans'));
    }

    /**
     * 詳細画面表示
     * @author soufuru
     * @param null $id
     */
    public function view($id = null)
    {
        $plan = $this->Plans->get($id,['contain' => ['Spots']]);
        $this->set(compact('plan'));
    }

}