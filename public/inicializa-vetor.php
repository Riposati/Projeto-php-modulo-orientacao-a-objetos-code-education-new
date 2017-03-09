<?php

use GMR\classes;

require_once('src/GMR/classes/DAO/BaseDados.php');
require_once('src/GMR/classes/DAO/MeuPDO.php');

define('CLASS_DIR', 'src/');
set_include_path(get_include_path() . PATH_SEPARATOR . CLASS_DIR);
spl_autoload_register();

$baseDados = new BaseDados(new MeuPDO());
//$baseDados->flush();
$baseDados = $baseDados->buscaDados();

/*
 * Esse vetor abaixo é necessário pra inverção
 * que o javascript faz ordens crescente e decrescente
 *
 */
$v = array();

for ($i = 0;
     $i < sizeof($baseDados);
     $i++) {

    $v[$i] = $baseDados[$i]["nome"] . ",";
}

$aux = implode($v);
