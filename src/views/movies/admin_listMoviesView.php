<?php get_header('Liste des films', 'admin'); ?>

<h2 class="mb-10">Liste des films</h2>

<a href="<?= $router->generate('addMovie'); ?>" class="btn btn-success">Ajouter un film</a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <!-- <th scope="col">Affiche</th> -->
            <th scope="col">Films</th>
            <th scope="col">Année de sortie</th>
            <th scope="col">Durée</th>
            <th scope="col">Description</th>
            <th scope="col">Casting</th>
            <th scope="col">Réalisation</th>
            <th scope="col">Note Presse</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($movies as $movie) { ?>
            <tr>
                <!-- <td class="align-middle"><?= $movie->poster; ?></td> -->
                <td class="align-middle"><?= $movie->title; ?></td>
                <td class="align-middle"><?= $movie->release_date; ?></td>
                <td class="align-middle"><?= $movie->duration; ?></td>
                <td class="align-middle"><?= $movie->synopsis; ?></td>
                <td class="align-middle"><?= $movie->casting; ?></td>
                <td class="align-middle"><?= $movie->director; ?></td>
                <td class="align-middle"><?= $movie->note_press; ?> / 10</td>
                <td class="text-center align-middle">
                    <a class="btn btn-warning mb-3" href="<?= $router->generate('editMovie', ['id' =>  $movie->id]); ?>">Editer</a>
                    <a class="btn btn-danger" href="<?= $router->generate('deleteMovie', ['id' =>  $movie->id]); ?>">Supprimer</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php get_footer('admin'); ?>