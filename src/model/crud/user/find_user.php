<?php 
require_once '../../bootstrap.php';
//$id = $argv[1];
$user = $entityManager->find('User', $idU);

if ($user === null) {
    echo "No product found.\n";
    exit(1);
}else{
    return $user;
}

//echo sprintf("-%s\n", $user->getNom());

