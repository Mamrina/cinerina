<?php get_header('Liste des catégories', 'admin'); ?>

<h2 class="mb-10">Liste des catégories</h2>

<a href="<?= $router->generate('addCategorie'); ?>" class="btn btn-success">Ajouter une catégorie</a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Catégories</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $categorie) { ?>
            <tr>
                <td class="align-middle"><?= $categorie->genre; ?></td>
                <td class="text-center align-middle">
                    <a class="btn btn-warning" href="<?= $router->generate('editCategorie', ['id' =>  $categorie->id]); ?>">Editer</a>
                    <a class="btn btn-danger" href="<?= $router->generate('deleteCategorie', ['id' =>  $categorie->id]); ?>">Supprimer</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php get_footer('admin'); ?>