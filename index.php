<?php

    require 'films/functions.php';
    $films = afficherFilms();

    include 'partiels/header.php';
?>

<div class="container-fluid">
    <p>
        <a class="btn btn-success" href="create.php">Ajouter un nouveau film</a>
    </p>

    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>titre</th>
                <th>date de sortie</th>
                <th>durée</th>
                <th>genre</th>
                <th>réalisateur</th>
                <th>synopsis</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($films as $film): ?>
                <tr>
                    <td>
                        <?php if(isset($film['extension'])): ?>
                            <!--${user['id'] = fait deja le film['id'] puis fait la variable-->
                            <a href="view.php?id=<?php echo $film['id'] ?>">
                                <img style="width: 115px" src="<?php echo "films/images/${film['id']}.${film['extension']}"?>" alt="">
                            </a>
                        <?php endif; ?>
                    </td>
                    <td><?php echo $film['titre'] ?></td>
                    <td><?php echo $film['date_de_sortie'] ?></td>
                    <td><?php echo $film['duree'] ?></td>
                    <td><?php echo $film['genre'] ?></td>
                    <td><?php echo $film['realisateur'] ?></td>
                    <td><?php echo $film['synopsis'] ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $film['id'] ?>" class="btn btn-outline-info">En Savoir Plus</a>
                        <a href="update.php?id=<?php echo $film['id'] ?>" class="btn btn-outline-secondary">Modifier</a>
                        <a href="delete.php?id=<?php echo $film['id'] ?>" class="btn btn-outline-danger">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table> 
</div>

<?php 

include 'partiels/footer.php' ?>