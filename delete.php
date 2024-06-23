<?php 

    require_once('connection.php'); 
    $id=$_GET['id'];
    $sql="delete from manufacturer where id=$id";
    $rs=$mysqli->query($sql);
    header('location: manuf.php');
    