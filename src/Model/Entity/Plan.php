<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Plan extends Entity
{
    public function getFirstSpotImagePath()
    {
        if ($this->spots) {
            $spot = $this->spots[0];

            return $spot->_properties['photo'];
        } else {
            return "https://b-rise.jp/wp-content/themes/b-rise/images/sample_img.gif";
        }
    }
}