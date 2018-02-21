<?php
/**
 * Created by PhpStorm.
 * User: soufuru
 * Date: 2018/02/20
 * Time: 17:32
 */

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class PlansController extends AppController {
    public $helpers = ['Html', 'Form'];

    public function index() {
        $this->set('plans', $this->Plans->find('all'));
        $this->loadModel('Spots');
        $this->set('spots', $this->Spots->find('all'));
    }


}