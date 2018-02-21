<?php
/**
 * Created by PhpStorm.
 * User: Ryo.Takahashi
 * Date: 2018/02/21
 * Time: 13:48
 */

// src/Controller/PlansController.php

namespace App\Controller;

class PlansController extends AppController
{

    public function index()
    {
        $plans = $this->Plans->find('all');
        $this->set(compact('plans'));
    }
    public function view($id = null)
    {
        $plan = $this->Plans->get($id);
        $this->set(compact('plan'));
    }
}