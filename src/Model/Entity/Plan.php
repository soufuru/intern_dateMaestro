<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Plan extends Entity
{
    protected function _getPhoto()
    {
        $photoUrl = "https://uicookies.com/demo/theme/aside/images/img_" . $this->_properties['id'] . ".jpg";
        return $photoUrl;
    }
}