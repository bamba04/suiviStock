<?php
    if(isset($_POST['btnAjoutUser'])){
        extract($_POST);
        require_once '../model/crud/user/create_user.php';
        header("location:/suivistock/src/view/user/userList.php");
    }
