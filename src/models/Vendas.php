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


        try {
            $sql = Database::getInstance()->prepare("
            SELECT
                *
            FROM 
                gazin.produtos 
            WHERE
                quantidade > 0
                ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao listar o produto ' . $error->getMessage();
        }
    }

    public function carrinho($idsituacao, $idcliente)
    {
        try {
            $sql = Database::getInstance()->prepare("
            INSERT INTO 
                gazin.vendido (idcliente, idvendido, idsituacao, data ) 
            VALUES 
            (
                '$idcliente',
                '$idsituacao',
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


    //finalizar e atualiza o status situação
    public function finalizar_pedido()
    {
        try {
            $sql = Database::getInstance()->prepare("
            
            ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao cadastrar venda: ' .
                $error->getMessage();
        }
    }

    public function cancelar_pedido()
    {
        try {
            $sql = Database::getInstance()->prepare("
            
            ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao cadastrar venda: ' .
                $error->getMessage();
        }
    }

    public function remover_item()
    {
        try {
            $sql = Database::getInstance()->prepare("
            
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
