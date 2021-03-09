<?php
define('CWD', getcwd());
echo(CWD);
require_once "../../../bootstrap.php";
require_once '../../controller/deconnexion.php';

// include_once "../../../model/crud/produit/create_produit.php";
//C:\xampp\htdocs\suivistock\src\view\produit

include_once '../../../header.php';
// require_once '../../model/produit/addProduit.php';
$produit = new Produit();


?>
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Ajout d'un produit</strong>
                                </div>
                                <form action="../../controller/controllerProduit.php" method="POST">
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <input type="text" name="nom" placeholder="Nom produit"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="qte" placeholder="Quantite" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="idU" placeholder="l'id de l'utilisateur"
                                                   class="form-control">
                                        </div>
                                        <button type="submit" name="btnAjout" class="btn btn-primary">Ajouter</button>
                                </form>
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