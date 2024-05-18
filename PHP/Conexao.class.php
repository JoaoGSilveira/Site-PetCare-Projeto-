<?php

class Conexao
{
    protected $db;

    public function __construct($usuario, $senha)
    {
        try {
            $parametros = "mysql:host=localhost;dbname=petcare;";
            $this->db = new PDO($parametros, $usuario, $senha);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexão bem-sucedida!";
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
            exit;
        }
    }

    public function getDB()
    {
        return $this->db;
    }
}

$usuario = "root";
$senha = "";
$conexao = new Conexao($usuario, $senha);

try {
    $pdo = $conexao->getDB();
    $stmt = $pdo->query("SELECT * FROM cliente");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }
} catch (PDOException $e) {
    echo "Erro ao executar consulta: " . $e->getMessage();
}
