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
            //verificar
            $sql = Database::getInstance()->prepare("
            SELECT
                nome,
                cpf_cnpj,
                idade,
                nascimento
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
}
