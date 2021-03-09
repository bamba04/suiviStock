<?php
require_once '../../bootstrap.php';
$produitRepository = $entityManager->getRepository('Produit');
$produits = $produitRepository->findAll();

$rp = $entityManager->getRepository('Produit')
    ->findBy(array('nom' => $nomProd));