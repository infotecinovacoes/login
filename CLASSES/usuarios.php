<?php

class Usuario
{
    private $pdo;
    public $msgErro = "";
    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        try {
            $pdo = new PDO("mysql: dbname=" . $nome . ";host=" . $host, $usuario, $senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
    }


    public function cadastrar($nome, $telefone, $email, $senha)
    {
        global $pdo;
        //verificar se já está o email cadastrado
        $sql = $pdo->prepare("select id_usuario from usuarios where email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return false; //retorna que ja esta cadastrado
        } else {
            //caso não, vamos cadastrar
            $sql = $pdo->prepare("insert into usuarios (nome, telefone, email, senha)
            Values (:n, :t, :e, :s)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":t", $telefone);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", $senha);
            $sql->execute();
            return true;
        }
    }


    public function logar($email, $senha)
    {
        global $pdo;
    }
}
