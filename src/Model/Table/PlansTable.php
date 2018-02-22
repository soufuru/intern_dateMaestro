<?php
/**
 * Created by PhpStorm.
 * User: soufuru
 * Date: 2018/02/20
 * Time: 18:20
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PlansTable extends Table
{

    /**
     * @author soufuru
     * @param array $config
     */
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);

         $this->hasMany('Spots', [
        'foreignKey' => 'plan_id',
      ]);
    }

    /**
     * @author soufuru
     * @param Validator $validator
     * @return Validator
     *
     */
  public function validationDefault(Validator $validator)
  {
      $validator
          ->notEmpty('title')
          ->requirePresence('title')
          ->notEmpty('body')
          ->requirePresence('body');
      return $validator;
  }
}
?>
