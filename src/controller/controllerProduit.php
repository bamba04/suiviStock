<?php
    if(isset($_POST['btnAjout'])){
        extract($_POST);
        require_once '../model/crud/produit/create_produit.php';
        header("location:/suivistock/src/view/produit/produitList.php");


    }
       
