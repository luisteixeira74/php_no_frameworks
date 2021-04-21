<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Crud de Usuários</title>
  </head>
  <body>

  <?php

    require_once dirname(__DIR__) . '/vendor/autoload.php';

    use App\Core\App;

    $app = (new App())->index();

  ?>
  </body>
</html>