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

    public function adicionar($nomcli, $endcli, $telcli) {

        $sql = 'INSERT INTO cliente (nomcli, endcli, telcli) VALUES(?, ? ,?);';
        $q = $this->conexao->prepare($sql);
        
        $q->bindParam(1, $nomcli); // para não ter manipulação externa no banco de dados.
        $q->bindParam(2, $endcli); //
        $q->bindParam(3, $telcli); //
        
        $q->execute();
        }
    public function eliminar($nomcli, $endcli, $telcli) {

        $sql = 'drop from cliente (nomcli, endcli, telcli) VALUES(?, ? ,?);';
        $q = $this->conexao->prepare($sql);
        
        return $q;
        }
}
