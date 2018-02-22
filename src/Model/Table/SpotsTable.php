<?php
/**
 * Created by PhpStorm.
 * User: soufuru
 * Date: 2018/02/20
 * Time: 21:50
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class SpotsTable extends Table
{
    /**
     * @param array $config
     */
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Plans',[
            'foreignKey' => 'plan_id',
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('place')
            ->requirePresence('place');
        return $validator;
    }
}
?>