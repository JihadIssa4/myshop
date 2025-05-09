<?php 
    $serverName = "localhost:3307";
    $userName = "root";
    $password = "";
    $database = "myshop";

    $connection = new mysqli($serverName, $userName, $password, $database);

    $id = "";
    if(isset($_GET["id"])){
        $id = $_GET['id'];
        $sql = "DELETE FROM clients WHERE id=$id";
        $connection->query($sql);
    }
    header("location: /myshop/index.php");
    exit;
?>