<?php

use GMR\classes;

class BaseDados
{
    private $conexao;

    public function __construct(MeuPDO $objetoConexaoPdo){

        $this->conexao = $objetoConexaoPdo;
        $this->conexao->conectaBanco();
    }

    /*
     *
     * Só pra ter um template já pra não ter que digitar tudo na mao denovo
     */
    private function montaClientes(){

        $cliente0 = new classes\ClienteJuridico("Wesley Professor", "23232323", "teste aqui 0", "4545454545455");
        $cliente0->setGrauDeImportancia(4);
        $cliente0->setEnderecoCobranca("rua dos testes 2445");

        $cliente1 = new classes\ClienteFisico("Gustavo", "111115555", "teste aqui 1", "4444778888");
        $cliente1->setGrauDeImportancia(5);
        $cliente1->setEnderecoCobranca("Você é um curioso");

        $cliente2 = new classes\ClienteFisico("Gabriel", "3333555", "teste aqui 2", "41111");
        $cliente2->setGrauDeImportancia(5);

        $cliente3 = new classes\ClienteFisico("Maria", "111115555", "teste aqui 3", "8888");
        $cliente3->setGrauDeImportancia(3);

        $cliente4 = new classes\ClienteFisico("Wesley", "111115555", "teste aqui 4", "7775555");
        $cliente4->setGrauDeImportancia(2);

        $cliente5 = new classes\ClienteJuridico("Wanderley", "111115555", "teste aqui 5", "4444444444");
        $cliente5->setGrauDeImportancia(4);
        $cliente5->setEnderecoCobranca("rua dos testes 9000");

        $cliente6 = new classes\ClienteFisico("João", "111115555", "teste aqui 6", "3333333");
        $cliente6->setGrauDeImportancia(1);

        $cliente7 = new classes\ClienteJuridico("Perterson", "111115555", "teste aqui 7", "1111111");
        $cliente7->setGrauDeImportancia(4);
        $cliente7->setEnderecoCobranca("rua dos testes 7500");

        $cliente8 = new classes\ClienteFisico("Gandalf", "111115555", "teste aqui 8", "454545545");
        $cliente8->setGrauDeImportancia(0);

        $cliente9 = new classes\ClienteFisico("Frodo", "111115555", "teste aqui 9", "122222222244");
        $cliente9->setGrauDeImportancia(2);

        $clientes = array($cliente0, $cliente1, $cliente2, $cliente3, $cliente4
        , $cliente5, $cliente6, $cliente7, $cliente8,
            $cliente9);

        return $clientes;
    }

    public function flush(){

        $clientes = $this->montaClientes();

        $i = 0;

        while($i < sizeof($clientes)){
            $this->conexao->persist($clientes[$i]);
            $i++;
        }
    }

    public function buscaDados(){

        $result = $this->conexao->selectData();
        return $result;
    }
}