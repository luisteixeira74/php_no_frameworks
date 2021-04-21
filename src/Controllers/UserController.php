<?php

namespace App\Controllers;

class UserController extends \App\Core\Controller
{
  /**
  * chama a view index.php da seguinte forma /user/index   ou somente   /user
  * e retorna para a view todos os usuários no banco de dados.
  */
  public function index()
  {
    $users = $this->model('Users'); 
    $data = $users::findAll();
    $this->view('user/index', ['users' => $data]);
  }

  /**
  * chama a view show.php da seguinte forma /user/show passando um parâmetro 
  * via URL /user/show/id e é retornado um array contendo (ou não) um determinado
  * usuário. Além disso é verificado se foi passado ou não um id pela url, caso
  * não seja informado, é chamado a view de página não encontrada.
  * @param  int   $id   Identificado do usuário.
  */
  public function show($id = null)
  {
    if (is_numeric($id)) {
      $Users = $this->model('Users');
      $data = $Users::findById($id);
      $this->view('user/show', ['user' => $data]);
    } else {
      $this->pageNotFound();
    }
  }

  public function create()
  {
      $this->view('user/create');
  }

  public function insert()
  {
      if ($_POST['name']) {
        $Users = $this->model('Users');
        $data = $Users::insert($_POST['name']);
        header("Location: http://localhost:8080/user/index");
        die();
      }
  }
}