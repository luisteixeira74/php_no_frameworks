<?php

namespace App\Core;

// use Application\models\Users;

/**
* Classe responsável por instanciar um model e chamar a view
*/
class Controller
{

  /**
  * Este método é responsável por chamar uma view
  *
  * @param  string  $model   
  */
  public function model($model)
  {
    require '../src/Models/' . $model . '.php';
    $classe = 'App\\Models\\' . $model;
    return new $classe();

  }

  /**
  * Este método é responsável por chamar uuma determinada view (página).
  *
  * @param  string  $view   A view que será chamada (ou requerida)
  * @param  array   $data   São os dados que serão exibido na view
  */
  public function view(string $view, $data = [])
  {
    require '../src/Views/' . $view . '.php';

  }

  /**
  * Este método é herdado para todas as classes filhas que o chamaram quando
  * o método ou classe informada pelo usuário não forem encontrados.
  */
  public function pageNotFound()
  {
    $this->view('erro404');
  }
}