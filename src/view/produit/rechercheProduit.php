<?php
include_once '../../../header.php';
define('CWD', getcwd());
echo(CWD);
require_once '../../../bootstrap.php';
//require_once '../../model/crud/produit/find_produit.php';

?>
<div class="page-container">
    <div class="main-content">

        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <strong>recherche d'un produit</strong>
                </div>
                <div class="card-body card-block">
                    <form action="../../controller/controllerRechercheProd.php" method="POST">
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <button type="submit" class="btn fas fa-search" name="btnSearch">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="nomProd" placeholder="nom du produit" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
        include_once '../../../footer.php';
        ?>
