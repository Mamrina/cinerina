<?php get_header('Ajouter un film', 'admin'); ?>

<div>
    <form action="" method="post" class="form-signin w-100 m-auto" enctype="multipart/form-data">
        <h1 class="mb-5 fw-normal text-center">Ajouter un film</h1>
        <div class="form-floating mb-3">
            <?php $error = checkEmptyFields('title'); ?>
            <input type="text" name="title" value="<?= getValue('title'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
            <label for="title">Titre du film *</label>
            <?= $error['message']; ?>
        </div>
        <div class="form-floating mb-3">
            <?php $error = checkEmptyFields('release_date'); ?>
            <input type="date" name="release_date" value="<?= getValue('release_date'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
            <label for="date">Année de sortie *</label>
            <?= $error['message']; ?>
        </div>
        <div class="form-floating mb-3">
            <?php $error = checkEmptyFields('duration'); ?>
            <input type="text" name="duration" value="<?= getValue('duration'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
            <label for="cast">Durée *</label>
            <?= $error['message']; ?>
        </div>
        <div class="form-floating mb-3">
            <?php $error = checkEmptyFields('synopsis'); ?>
            <textarea class="form-control <?= $error['class']; ?>" value="<?= getValue('synopsis'); ?>" name="synopsis" placeholder="Description du film" style="height: 100px" fixed></textarea>
            <label for="floatingTextarea2">Description *</label>
            <?= $error['message']; ?>
        </div>
        <div class="form-floating mb-3">
            <?php $error = checkEmptyFields('casting'); ?>
            <input type="text" name="casting" value="<?= getValue('casting'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
            <label for="cast">Casting *</label>
            <?= $error['message']; ?>
        </div>
        <div class="form-floating mb-3">
            <?php $error = checkEmptyFields('director'); ?>
            <input type="text" name="director" value="<?= getValue('director'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
            <label for="poster">Réalisation *</label>
            <?= $error['message']; ?>
        </div>
        <div class="form-floating mb-3">
            <?php $error = checkEmptyFields('note_press'); ?>
            <input type="number" name="note_press" value="<?= getValue('note_press'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
            <label for="notepress">Note *</label>
            <?= $error['message']; ?>
        </div>
        <!-- <div class="form-floating">
            <?php $error = checkEmptyFields('categories'); ?>
            <select class="form-select" name="categories" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Choisir une catégorie *</option>
                <option value="1">Drame</option>
                <option value="2">Comédie</option>
                <option value="3">Fantastique</option>
                <?= $error['message']; ?>
            </select>
        </div> -->
        <div>
            <button class="btn btn-success w-100 py-2 mt-3" type="submit">Soumettre</button>
        </div>
    </form>
</div>

<?php get_footer('admin'); ?>