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

    /**
     * @author soufuru
     * @param $id
     */
    public function view($id) {
        $this->loadModel('Spots');
        $spots = $this->Spots->find('all')->contain(['Plans']);
        $plans = [];

        foreach ($spots as $spot) {
            if ($spot->plan_id == $id) {
                $plans[] = $spot;
            }
        }
        $this->set('plans', $plans);
    }


}