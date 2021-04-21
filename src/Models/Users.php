<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Users
{
  /**
  * Este método busca todos os usuários armazenados na base de dados
  *
  * @return   array
  */
  public static function findAll()
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM users');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  /**
  * Este método busca um usuário armazenados na base de dados com um
  * determinado ID
  * @param    int     $id   Identificador único do usuário
  *
  * @return   array
  */
  public static function findById(int $id)
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM users WHERE id = :ID LIMIT 1', array(
      ':ID' => $id
    ));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function insert($userName)
  {
    $conn = new Database();
    $result = $conn->executeQuery('INSERT INTO users (name) VALUES (:NOME)', array(
        ':NOME' => $userName
    ));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function update($id, $nome)
  {
    $conn = new Database();
    $result = $conn->executeQuery('UPDATE users SET name=:NOME WHERE ID=:ID', array(
        ':NOME' => $nome,
        ':ID' => $id
    ));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}