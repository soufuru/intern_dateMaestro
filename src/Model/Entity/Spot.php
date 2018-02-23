<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Spot extends Entity
{
    protected function _getPhoto()
    {
        $photoUrl = $this->_properties['photo'];
        return $photoUrl;
    }

}