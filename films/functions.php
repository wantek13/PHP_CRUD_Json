<?php

function afficherfilms()
{
    //retourne le tableau json
    return json_decode(file_get_contents('films/films.json'), true);
}

function afficherFilmParId($id)
{
    $films = afficherFilms();
    foreach ($films as $film)
    {
        if($film['id'] == $id)
        {
            return $film;
        }
    }
    return null;
}

function creerFilm($data)
{
    $films =  afficherfilms();

    $data['id'] = rand(1000000, 2000000);

    $films[] = $data;

    putJson($films);

    return $data;
}

function modifierFilm($data, $id)
{

    $filmModifier = [];
    $films = afficherFilms();
    foreach($films as $i => $film)
    {
        if($film['id'] == $id)
        {
            //remplace le tableau film par le tableau data
            //data = $_POST
            $films[$i] = $filmModifier = array_merge($film, $data);
        }
    }
    putJson($films);

    return $filmModifier;
}

function supprimerFilm($id)
{
    $films = afficherfilms();

    foreach ($films as $i => $film) {
        if ($film['id'] == $id) {
            array_splice($films, $i, 1);
        }
    }
    putJson($films);
}

function telechargerImage($file, $film)
{
    if(isset($_FILES['image']) && $_FILES['image']['name'])
    {
        //si le dossier image n'existe pas
        if(!is_dir(__DIR__ . "/images"))
        {
            //creer le fichier image
            mkdir(__DIR__ . "/images");
        }
        //obtenir le l'extension par le nom du fichier
        $nomDuFichier = $file['name'];
        //chercher le point dans le fichier
        $positionDuPoint = strpos($nomDuFichier, '.');
        //prendre l'extension apres le point
        $extension = substr($nomDuFichier, $positionDuPoint + 1);
        //telecharge l'image
        //puis la place dans le dossier image en modifiant son nom en userid.jpg 
        move_uploaded_file($file['tmp_name'], __DIR__ . "/images/${film['id']}.$extension");

        $film['extension'] = $extension;
        modifierFilm($film, $film['id']);
    }
}

function putJson($films)
{
    //ecrire toutes les modifications dans le json
    file_put_contents('films/films.json', json_encode($films, JSON_PRETTY_PRINT));
}