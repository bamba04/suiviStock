<div class="page-container">
    <div class="main-content">
        <?php
        include_once '../../../header.php';
        require_once '../../model/crud/produit/list_produit.php';
        ?>

        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <a class="btn btn-primary" href="http://localhost/suivistock/src/view/produit/ajoutProduit.php"
                   role="button">Ajouter un nouveau produit</a>

                <div class="row m-t-30">
                    <div class="col-md-12">

                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>Reference</th>
                                    <th>Nom</th>
                                    <th>Quantite en stock</th>
                                    <th>Utilisateur</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($produits as $p) {
                                    ?>
                                    <tr>
                                        <td><?= $p->getRef() ?></td>
                                        <td><?= $p->getNom() ?></td>
                                        <td><?= $p->getQtStock() ?></td>
                                        <td><?= $p->getid()->getPrenom() . " " . $p->getid()->getNom() ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>

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
