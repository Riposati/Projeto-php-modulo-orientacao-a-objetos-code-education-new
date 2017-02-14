<?php
/**
 * Created by PhpStorm.
 * User: Gustavo
 * Date: 10/02/2017
 * Time: 18:39
 */

namespace GMR\classes;

use GMR\classes;

class ClienteJuridico extends classes\Cliente
{
    public function toString()
    {
        $str = "Tipo de cliente: PESSOA JURÍDICA <hr>" . parent::toString();
        return $str;
    }

}