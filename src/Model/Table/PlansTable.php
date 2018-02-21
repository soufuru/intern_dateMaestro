<?php
/**
 * Created by PhpStorm.
 * User: Ryo.Takahashi
 * Date: 2018/02/21
 * Time: 13:50
 */
// src/Model/Table/PlansTable.php

namespace App\Model\Table;

use Cake\ORM\Table;

class PlansTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}