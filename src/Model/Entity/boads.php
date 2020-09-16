<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Boads extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false

    ];
}
