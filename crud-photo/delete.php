<?php 
include("conexao.php");

    $user_delete_id = $_GET['id']?$_GET['id']:false;
    
    if(!$user_delete_id){
        header('location:indexuserl3.php');
    }

    $query_delete_user = "DELETE FROM tbalunos WHERE id='$user_delete_id'";
    
    $mysqli->query($query_delete_user);

    header('location:indexuserl3.php');
    
?>