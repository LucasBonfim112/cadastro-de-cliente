<?php

namespace src\models;

use \core\Model;
use core\Database;
use PDO;

class Login extends Model
{

    public function verificarLogin($login, $senha)
    {
        //verificar
        $sql = Database::getInstance()->prepare("SELECT * FROM gazin.usuario WHERE login = :login AND senha = :senha");
        $sql->bindValue(':login', $login);
        $sql->bindValue(':senha', $senha);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);

        if ($result != false) {
            $_SESSION['idusuario'] = $result['idusuario'];
            $_SESSION['token'] = 'TOKEN';
            
            header('Location: ./cadastro');
        } else {
            header('Location: ./');
        }
    }
}
