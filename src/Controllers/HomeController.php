<?php

namespace App\Controllers;

class HomeController extends \App\Core\Controller
{
  public function index()
  {
    $this->view('home/index');
  }

}