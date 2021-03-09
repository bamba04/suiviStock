<?php
include_once '../../../header.php';
?>
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Ajout d'un utilisateur</strong>
                                </div>
                                <form action="../../controller/controllerUser.php" method="POST">
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <input type="text" name="nomU" placeholder="Nom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="prenomU" placeholder="Prenom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" placeholder="Email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Mot de passe"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="etat" placeholder="Etat" class="form-control">
                                        </div>
                                        <button type="submit" name="btnAjoutUser" class="btn btn-primary">Ajouter
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
include_once '../../../footer.php';
?>