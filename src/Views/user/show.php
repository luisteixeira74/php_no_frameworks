<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">
        <form method="POST" action="/user/update">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?= $data['user'][0]['id'] ?></td>
                <td><input type="text" name="name" value="<?= $data['user'][0]['name'] ?>" required></td>
                <input type="hidden" name="id" value="<?= $data['user'][0]['id'] ?>">
              </tr>
            </tbody>
          </table>
        <br><br>
        <input type="submit" value="Atualizar" id="atualizar" name="atualizar">
        </form>
      </div>
    </div>
  </div>
</main>