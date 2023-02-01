<?php

namespace src\models;

use \core\Model;
use core\Database;
use PDO;
use Throwable;

class Clientes extends Model
{

    public function ListaCliente()
    {
        try {
            $sql = Database::getInstance()->prepare("
            SELECT
                *
            FROM 
                gazin.clientes 
                ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao listar os clientes cadastrados: ' . $error->getMessage();
        }
    }

    public function deletar($idcliente)
    {
        try {
            $sql = Database::getInstance()->prepare("
            DELETE FROM
                gazin.clientes
            WHERE 
                idcliente=" . $idcliente . " 
            ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao deletar os cadastros: ' .
                $error->getMessage();
        }
    }

    public function editar()
    {
        $idcliente = $_GET["id"];

        try {
            $sql = Database::getInstance()->prepare("
            SELECT
                *
            FROM 
                gazin.clientes 
            WHERE 
                idcliente=" . $idcliente . " 
                ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao listar os clientes cadastrados: ' . $error->getMessage();
        }
    }

    public function atualizar($idcliente, $nome, $cpf_cnpj, $idade, $data)
    {

        try {
            $sql = Database::getInstance()->prepare("
            UPDATE 
                gazin.clientes
            SET 
                nome='".$nome."',cpf_cnpj='".$cpf_cnpj."',idade='".$idade."', nascimento='".$data ."'
            WHERE 
                idcliente=".$idcliente."
            ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (Throwable $error) {
            return 'Falha ao atualizar o cadastro do cliente: ' . $error->getMessage();
        }
    }
}
