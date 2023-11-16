<?php include '../connection.php' ?>
<?php 


   $prodName = $_POST['prodName'];
   $prodDescription = $_POST['prodDescription'];
   $prodPrice = $_POST['prodPrice'];


    $insert_query = "INSERT INTO `pdo_crud_ajax`(`prod_name`, `prod_desc`, `prod_price`) VALUES (:prod_name, :prod_desc, :prod_price)";

    $insert_prepare = $connection->prepare($insert_query);

    $insert_prepare->bindParam(':prod_name',$prodName);
    $insert_prepare->bindParam(':prod_desc',$prodDescription);
    $insert_prepare->bindParam(':prod_price',$prodPrice);

    $insert_prepare->execute();







?>