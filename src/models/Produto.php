<?php

namespace src\models;

use \core\Model;
use core\Database;
use PDO;
use Throwable;

class Produto extends Model
{

    public function cadastrar($codigo, $nome, $cor, $preco, $quantidade)
    {
        try {
            $sql = Database::getInstance()->prepare("
            INSERT INTO 
                gazin.produtos (codigo, nome, cor, preco, quantidade ) 
            VALUES 
            (
                $codigo, 
                '$nome',
                 '$cor', 
                $preco,
                $quantidade
             ) ON CONFLICT ON CONSTRAINT produtos_pk DO NOTHING
    
            ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao cadastrar o produto: ' .
                $error->getMessage();
        }
    }

    public function verificarCod($codigo)
    {
        try {
            $sql = Database::getInstance()->prepare("
            SELECT CASE WHEN EXISTS(select 1 from gazin.produtos where codigo='$codigo') then 1 else 0 end as existcod
           ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao cadastrar o produto: ' .
                $error->getMessage();
        }
    }

    public function listar()
    {
        try {
            $sql = Database::getInstance()->prepare("
            SELECT
                *
            FROM 
                gazin.produtos 
                ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao listar os produtos cadastrados: ' . $error->getMessage();
        }
    }

    public function editar()
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
            return 'Falha ao listar os produto para editar: ' . $error->getMessage();
        }
    }

    public function atualizar($idproduto, $codigo, $nome, $cor, $preco, $quantidade)
    {
        try {
            $sql = Database::getInstance()->prepare("
            UPDATE 
                gazin.produtos
            SET 
                codigo='" . $codigo . "',nome='" . $nome . "',cor='" . $cor . "' ,preco='" . $preco . "', quantidade='" . $quantidade . "'
            WHERE 
                idproduto=" . $idproduto . "
            ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (Throwable $error) {
            return 'Falha ao atualizar o produto: ' . $error->getMessage();
        }
    }

    public function deletar($idproduto)
    {
        try {
            $sql = Database::getInstance()->prepare("
            DELETE FROM
                gazin.produtos
            WHERE 
                idproduto=" . $idproduto . " 
            ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao deletar os cadastros dos produtos: ' .
                $error->getMessage();
        }
    }
}
