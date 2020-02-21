<?php
    require __DIR__ . '/films/functions.php';
    include __DIR__ . '/partiels/header.php';

    if(!isset($_GET['id']))
    {
        include 'partiels/not_found.php';
        exit;
    }

    $filmId = $_GET['id'];

    supprimerFilm($filmId);

    // $film = afficherFilmParId($filmId);
    // if(!$film)
    // {
    //     include 'partiels/not_found.php';
    //     exit;
    // }
    //permet de retourner sur la page désignée
    //attention a la syntaxe
    header("Location: index.php");

include 'partiels/footer.php';