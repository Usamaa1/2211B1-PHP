<?php include "connection.php" ?>
<?php 

    $prodId = $_GET['id'];

    $delete_query = "DELETE FROM `pdo_crud` WHERE prod_id = :prodId";
    $delete_prepare = $connection->prepare($delete_query);
    $delete_prepare->bindParam(':prodId',$prodId);
    $delete_prepare->execute();
    header("location:view.php");
?>