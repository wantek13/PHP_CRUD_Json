<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
            <?php if($film['id']): ?>
                Modifier film : <strong><?php echo $film['titre']?></strong>
            <?php else: ?>
                Ajouter un nouveau film :
            <?php endif; ?>
            </h3>
        </div>
        <div class="card-body">

            <form action="" method="POST" enctype="multipart/form-data">
                <!-- --------titre--------- -->
                <div class="form-group">
                    <label>Titre</label>
                    <input name="titre" value="<?php echo $film['titre']?>" class="form-control">
                </div>
                <!-- ---Date de sortie----- -->
                <div class="form-group">
                    <label>Date de Sortie</label>
                    <input name="date_de_sortie" value="<?php echo $film['date_de_sortie']?>" class="form-control">
                </div>
                <!-- --------durée--------- -->
                <div class="form-group">
                    <label>Durée</label>
                    <input name="duree" value="<?php echo $film['duree']?>" class="form-control">
                </div>
                <!-- --------genre--------- -->
                <div class="form-group">
                    <label>Genre</label>
                    <input name="genre" value="<?php echo $film['genre']?>" class="form-control">
                </div>
                <!-- -----realisateur------ -->
                <div class="form-group">
                    <label>Réalisateur</label>
                    <input name="realisateur" value="<?php echo $film['realisateur']?>" class="form-control">
                </div>
                <!-- -------synopsis------- -->
                <div class="form-group">
                    <label>Synopsis</label>
                    <input name="synopsis" value="<?php echo $film['synopsis']?>" class="form-control">
                </div>
                <!-- --------image--------- -->
                <div class="form-group">
                    <label>Image</label>
                    <input name="image" type="file" class="form-control-file">
                </div>
                <!-- --------bouton-------- -->
                <button class="btn btn-success">Valider</button>
            </form>

        </div>
    </div>
</div>