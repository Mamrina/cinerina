<?php get_header('Se connecter', 'login'); ?>

<div class='d-flex align-items-center'>
    <form action="" method="POST" class="form-signin m-auto">
        <img src="" alt="Cinérina">
        <h1 class="mb-3 text-center">Se connecter</h1>
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo">
            <label for="floatingInput">Pseudo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="pwd" class="form-control" placeholder="Mot de passe">
            <label for="floatingInput">Mot de passe</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Connexion</button>
        <p class="mt-4 mb-3 text-body-secondary text-center">
            <a href="">Mot de passe oublié ?</a>
        </p>
    </form>
</div>

<?php get_footer('login'); ?>