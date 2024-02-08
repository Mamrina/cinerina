<?php

unset($_SESSION['user']);
alert('Vous êtes bien déconnecté de votre session !', 'success');
header('Location:' . $router->generate('login'));
die;
