<?php
/**
 * Created by PhpStorm.
 * User: soufuru
 * Date: 2018/02/20
 * Time: 17:32
 */

namespace App\Controller;

class PlansController extends AppController {

    /**
     * view
     * plans/view/idで詳細画面を表示
     * @author soufuru
     * @param $id
     */
    public function view($id) {
        $plan = $this->Plans->get($id,['contain' => ['Spots']]);
        $this->set('plan', $plan);
    }

    public function index() {

    }

}