<?php
    require 'films/functions.php';
    include 'partiels/header.php';

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

?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Info Film : <strong><?php echo $film['titre'] ?></strong></h3>
        </div>

        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $film['id'] ?>">Modifier</a>
            <a class="btn btn-danger" href="delete.php?id=<?php echo $film['id'] ?>">Supprimer</a>
        </div>

        <table class="table">
            <tbody>
                <tr>
                    <?php if(isset($film['extension'])): ?>
                        <!--${user['id'] = fait deja le film['id'] puis fait la variable-->
                        <img style="width: 200px" src="<?php echo "films/images/${film['id']}.${film['extension']}"?>" alt="">
                    <?php endif; ?>
                </tr>
                <tr>
                    <th>Titre : </th>
                    <td><?php echo $film['titre'] ?></td>
                </tr>
                <tr>
                    <th>Date de sortie : </th>
                    <td><?php echo $film['date_de_sortie'] ?></td>
                </tr>
                <tr>
                    <th>Durée : </th>
                    <td><?php echo $film['duree'] ?></td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td><?php echo $film['genre'] ?></td>
                </tr>
                <tr>
                    <th>Réalisateur : </th>
                    <td><?php echo $film['realisateur'] ?></td>
                </tr>
                <tr>
                    <th>Synopsis</th>
                    <td><?php echo $film['synopsis'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'partiels/footer.php' ?>