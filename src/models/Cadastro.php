<?php

namespace src\models;

use \core\Model;
use core\Database;
use PDO;
use Throwable;

class Cadastro extends Model
{

    public function cadastrar($nome, $cpf_cnpj, $idade, $data)
    {
        try {
            $sql = Database::getInstance()->prepare("
            INSERT INTO gazin.clientes  (
                nome, cpf_cnpj, idade, nascimento) 

            VALUES 
            (
                '$nome', 
                '$cpf_cnpj',
                 $idade, 
                '$data'
            ) ON CONFLICT ON CONSTRAINT clientes_pk DO NOTHING
           ");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Throwable $error) {
            return 'Falha ao cadastrar o cliente: ' .
                $error->getMessage();
        }
    }
}
