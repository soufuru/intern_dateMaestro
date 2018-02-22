<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Spot extends Entity
{

    /**
     * 仮想プロパティ
     *
     * @return string
     */
    protected function _getSpecialPlace(){

        if ($this->_properties['place'] == 'Tenjin') {
            return $this->_properties['place'] .'(学内限定)';
        } else {
            return $this->_properties['place'];
        }


    }

}