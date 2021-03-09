<?php
include_once '../../header.php';

if (isset($_POST['btnSearch'])) {
    extract($_POST);
    require_once '../model/crud/produit/find_produit.php';

    ?>
    <div class="page-container">
        <div class="main-content">

            <div class="section__content section__content--p30" id="affichage">
                <div class="container-fluid">
                    <a class="btn btn-primary" href="http://localhost/suivistock/src/view/produit/ajoutProduit.php"
                       role="button">Retour</a>
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
                                    </tr>
                                    </thead>

                                    <tbody id="tbody">
                                    <?php
                                    foreach ($rp as $p) {
                                        ?>
                                        <tr>
                                            <td><?= $p->getRef() ?></td>
                                            <td><?= $p->getNom() ?></td>
                                            <td><?= $p->getQtStock() ?></td>
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
    </div>
    </div>
    </div>


    <?php
}
include_once '../../footer.php';
?>