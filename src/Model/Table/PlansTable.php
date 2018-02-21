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
  public function initialize(array $config)
  {
    $this->addBehavior('Timestamp');
  }

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
