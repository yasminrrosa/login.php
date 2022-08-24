<?php

require ('conection_db.php');

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Negado o acesso');
 }


if (!isset($_POST['name'])|| !isset($_POST['senha'])) {
    header('location:pag.php');

}else{
    header('location:login.php');
}



?>