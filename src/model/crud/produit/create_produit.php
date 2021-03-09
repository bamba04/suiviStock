<?php
 
require_once "../../bootstrap.php";
require_once "../model/crud/user/find_user.php";



$produit = new Produit();
$produit->setRef(null);
$produit->setNom($nom);
$produit->setQtStock($qte);
$produit->setId($user);
//var_dump($produit);
$entityManager->persist($produit);
$entityManager->flush();
