<?php
/**
 * @author Rtakaha
 * @return array
 */

// src/Controller/PlansController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class PlansController extends AppController
{

    public function index()  // index page
    {
        $plans = $this->Plans->find('all')->contain(['Users']);  // find all the plans

        $this->set(compact('plans'));  // set plans as Plans
    }
    public function view($id = null)  // view page
    {
        $plan = $this->Plans->get($id);  // get data of gotten id
        $this->set(compact('plan'));  // set plans as Plans
    }
}