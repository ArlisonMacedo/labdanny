<?php

namespace App\Controller;


class Web
{

  private $view;
  public function __construct()
  {
    $this->view = new \League\Plates\Engine(__DIR__ . "/../themes","php");
  }


  public function home(): void
  {
    echo $this->view->render('home');
  }

  public function dashboard(): void
  {
    echo $this->view->render('dashboard');
  }

  public function login(): void
  {
    if(isset($_POST['user']) && isset($_POST['passwd'])){
      if($_POST['user'] == 'admin' && $_POST['passwd'] == 'admin123'){
        $_SESSION['ADMIN'] = "Danny";
        echo true;
        header("Location: ". url('dashboard'));
      }
    }
  }


  public function error(array $data): void
  {
    echo "<h1>Erro {$data['errcode']}";
  }
}
