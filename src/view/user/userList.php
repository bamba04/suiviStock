<div class="page-container">
    <div class="main-content">
        <?php
        include_once '../../../header.php';
        require_once '../../model/crud/user/list_user.php';
        ?>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <a class="btn btn-primary " href="http://localhost/suivistock/src/view/user/ajoutUser.php"
                   role="button">Ajouter un nouveau Utilisateur</a>

                <div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Email</th>
                                    <th>Mot de passe</th>
                                    <th>etat</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($users as $u) {
                                    ?>
                                    <tr>
                                        <td><?= $u->getId() ?></td>
                                        <td><?= $u->getNom() ?></td>
                                        <td><?= $u->getPrenom() ?></td>
                                        <td><?= $u->getEmail() ?></td>
                                        <td><?= $u->getPassword() ?></td>
                                        <td><?= $u->getEtat() ?></td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once '../../../footer.php';
?>
