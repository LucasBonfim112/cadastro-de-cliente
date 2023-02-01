<?php

namespace src\models;

use \core\Model;
use core\Database;
use PDO;
use Throwable;

class Vendas extends Model
{
    public function ProdutoVenda()
    {
        $idproduto = $_GET["id"];

        try {
            $sql = Database::getInstance()->prepare("
            SELECT
                *
            FROM 
                gazin.produtos 
            WHERE 
                idproduto=" . $idproduto . " 
                ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao listar o produto ' . $error->getMessage();
        }
    }

    public function vendido( $quantidade, $preco, $idcliente, $codigo)
    {
        try {
            $sql = Database::getInstance()->prepare("
            INSERT INTO 
                gazin.vendido (quantidade, preco, idcliente, idproduto ) 
            VALUES 
            (
                '$quantidade',
                '$preco',
                '$idcliente',
                '$codigo'
             ) 
                returning *
            ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao cadastrar venda: ' .
                $error->getMessage();
        }
    }
}
