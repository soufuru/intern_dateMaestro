<?php
/**
 * @author Rtakaha
 */

namespace App\Controller;

class PlansController extends AppController {


    public function index()
    {
        $plans = $this->Plans->find('all')->contain(['Users']);

        $this->set(compact('plans'));
    }


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
}