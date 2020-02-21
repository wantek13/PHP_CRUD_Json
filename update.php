<?php
    require __DIR__ . '/films/functions.php';
    include __DIR__ . '/partiels/header.php';

    if(!isset($_GET['id']))
    {
        include 'partiels/not_found.php';
        exit;
    }

    $filmId = $_GET['id'];

    $film = afficherFilmParId($filmId);
    if(!$film)
    {
        include 'partiels/not_found.php';
        exit;
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
            //$_POST = toutes les donnéesdu film
            //$filmId = $_GET['id'] defini juste au dessus
            $film = modifierFilm($_POST, $filmId);

            telechargerImage($_FILES['image'], $film);

            //permet de retourner sur la page désignée
            //attention a la syntaxe
            header("Location: index.php");
    }

include '_form.php';

include 'partiels/footer.php';