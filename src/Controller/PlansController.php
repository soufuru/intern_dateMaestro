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
    public function view($id = null)
    {
        $plan = $this->Plans->get($id);
        $this->set(compact('plan'));
    }
}