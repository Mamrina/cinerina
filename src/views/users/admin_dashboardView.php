<?php
get_header('Dashboard', 'admin'); ?>

<h1>Bienvenue , que souhaitez-vous faire ?</h1>
<ul>
    <li><a href="<?= $router->generate('users'); ?>">Se rendre dans l'espace Utilisateur</a></li>
    <li><a href="<?= $router->generate('listMovies'); ?>">Se rendre dans l'espace Films</a></li>
    <li><a href="<?= $router->generate('listCategories'); ?>">Se rendre dans l'espace Catégorie de film</a></li>
</ul>