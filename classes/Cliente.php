<?php
require 'Conexao.php';
class Cliente {
    private $conexao;
    public function __construct() {
        $this->conexao = Conexao::getConexao();
    }
    public function listar() {
        $sql = 'select * from cliente;';
        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;
    }
    public function listarFiltro($codCli) {
        $sql = 'select * from cliente where codCli =?;';
        $q = $this->conexao->prepare($sql);
        $q->bindParam(1, $codCli);
        $q->execute();
        $cliente = [];
        foreach ($q as $cli) {
            $cliente = $cli;
        }
        return $cliente;
    }
    public function adicionar($nomCli, $enCli, $telCli) {
        $sql = 'INSERT INTO cliente (nomCli, endCli, telCli) VALUES (?, ?, ?);';
        $q = $this->conexao->prepare($sql);
        $q->bindParam(1, $nomCli);
        $q->bindParam(2, $enCli);
        $q->bindParam(3, $telCli);
        $q->execute();
    }
    public function editar($codCli, $nomCli, $endCli, $telCli) {
        $sql = 'UPDATE cliente SET nomCli= ?, endCli = ?, telCli = ? WHERE codCli = ?;';
        $q = $this->conexao->prepare($sql);
        $q->bindParam(1, $nomCli);
        $q->bindParam(2, $endCli);
        $q->bindParam(3, $telCli);
        $q->bindParam(4, $codCli);
        $q->execute();
    }
    public function eliminar($codCli) {
        $sql = 'DELETE FROM cliente WHERE codCli = ?;';
        $q = $this->conexao->prepare($sql);
        $q->bindParam(1, $codCli);
        $q->execute();
    }
}