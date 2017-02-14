<?php
/**
 * Created by PhpStorm.
 * User: Gustavo
 * Date: 10/02/2017
 * Time: 18:40
 */

namespace GMR\classes;

use GMR\classes;

class ClienteFisico extends classes\Cliente
{

    public function toString()
    {
        $str = "Tipo de cliente: PESSOA FÍSICA <hr>" . parent::toString();
        return $str;
    }

}