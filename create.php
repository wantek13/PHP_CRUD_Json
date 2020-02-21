<?php

    require __DIR__ . '/films/functions.php';
    include __DIR__ . '/partiels/header.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {

        $film = creerFilm($_POST);

        telechargerImage($_FILES['image'], $film);

        //permet de retourner sur la page désignée
        //attention a la syntaxe
        header("Location: index.php");
    }

    $film = 
    [
        'id' => '',
        'titre' => '',
        'date_de_sortie' => '',
        'duree' => '',
        'genre' => '',
        'realisateur' => '',
        'synopsis' => ''
    ];

    include '_form.php';
    include __DIR__ . '/partiels/footer.php';