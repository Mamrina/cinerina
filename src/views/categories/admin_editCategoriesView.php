<?php get_header('Ajouter une categorie', 'admin'); ?>

<style>
    html,
    body,
    .vertical-center {
        height: 100%;
    }

    .form-signin {
        max-width: 600px;
        padding: 1rem;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="text"] {
        margin-bottom: -1px;
    }

    textarea {
        resize: none;
    }
</style>

<div>
    <form action="" method="post" class="form-signin w-100 m-auto" enctype="multipart/form-data">
        <h1 class="mb-5 fw-normal text-center">Ajouter une catégorie</h1>
        <div class="form-floating mb-3">
            <?php $error = checkEmptyFields('genre'); ?>
            <input type="text" name="genre" value="<?= getValue('genre'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
            <label for="title">Genre *</label>
            <?= $error['message']; ?>
        </div>
        <div>
            <button class="btn btn-success w-100 py-2 mt-3" type="submit">Soumettre</button>
        </div>
    </form>
</div>

<?php get_footer('admin'); ?>