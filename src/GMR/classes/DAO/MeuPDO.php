<?php

use GMR\classes\Cliente;

class MeuPDO
{
    private $conn;
    private $username;
    private $password;

    public function __construct()
    {
        $this->username = "root";
        $this->password = "";
    }

    public function conectaBanco()
    {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=clientesCode', $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //echo "conexao estabelecida com sucesso!<br>";

            return $this->conn;

        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function persist(Cliente $cliente)
    {
        $nome = $cliente->getNome();
        $cpf = $cliente->getCpf();
        $endereco = $cliente->getEndereco();
        $telefone = $cliente->getTelefone();
        $grauImportancia = $cliente->getGrauImportancia();
        $enderecoCobranca = $cliente->getEnderecoCobranca();

        $stmt = $this->conn->prepare("INSERT INTO clientes (nome,cpf,endereco,telefone,grauImportancia,enderecoCobranca) 
        VALUES (:nome, :cpf, :endereco, :telefone, :grauDeImportancia, :enderecoCobranca)");

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':grauDeImportancia', $grauImportancia);
        $stmt->bindParam(':enderecoCobranca', $enderecoCobranca);

        $stmt->execute();
    }

    public function selectData()
    {
        $result = null;

        $stmt = $this->conn->prepare('select * from clientes');
        $stmt->execute();

        $i = 0;
        foreach($stmt->fetchAll() as $k=>$v) {
            $result[$i] = $v;
            $i++;
        }
        return $result;
    }
}