<main>
  <div class="container">
    <? 
    if (isset($message)) {
    ?>
      <span class="text-success">
        <?= $message ?>
      </span>
    <? } ?>
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">
        <?php
        if(empty($data['users'])) {
        ?>
          <span>Nenhum usuário cadastrado</span>
        <?php
        } else {
        ?>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data['users'] as $user) { ?>
              <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
              </tr>
              <?php }?>
            </tbody>
          </table>
        <?php } ?>
      </div>
    </div>
  </div>
</main>