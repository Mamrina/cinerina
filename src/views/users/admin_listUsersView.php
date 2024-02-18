<?php get_header('Liste des utilisateurs', 'admin'); ?>

<div>
  <h2>Liste des utilisateurs</h2>

  <a href="<?= $router->generate('addUser'); ?>" class="btn btn-success">Ajouter un nouvel administrateur</a>
</div>


<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Pseudo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user) { ?>
      <tr>
        <td class="align-middle"><?= htmlentities($user->email); ?></td>
        <td class="align-middle"><?= htmlentities($user->pseudo); ?></td>
        <td class="text-center align-middle">
          <a class="btn btn-warning mb-3" href="<?= $router->generate('editUser', ['id' =>  htmlentities($user->id)]); ?>">Editer</a>
          <a class="btn btn-danger" href="<?= $router->generate('deleteUser', ['id' =>  htmlentities($user->id)]); ?>">Supprimer</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<?php get_footer('admin'); ?>