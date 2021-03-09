<?php
// list_products.php
//define('CWD', getcwd());
//echo(CWD) ;

require_once "../../../bootstrap.php";

$produitRepository = $entityManager->getRepository('Produit');
$produits = $produitRepository->findAll();
