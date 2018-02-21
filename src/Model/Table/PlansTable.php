<?php
/**
 * @author Rtakaha
 */
// src/Model/Table/PlansTable.php

namespace App\Model\Table;

use Cake\ORM\Table;

class PlansTable extends Table
{

    /**
     * @param array $config
     */
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
    }
}