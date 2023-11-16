<?php include '../connection.php' ?>

<?php


$view_query = "SELECT * FROM `pdo_crud_ajax`";
$view_prepare = $connection->prepare($view_query);
$view_prepare->execute();

$cards_data = $view_prepare->fetchAll(PDO::FETCH_ASSOC);



foreach($cards_data as $card){

?>




<div class="card m-3" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $card['prod_name'] ?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $card['prod_price'] ?></h6>
        <p class="card-text"><?php echo $card['prod_desc'] ?></p>

        <a href="update.php?id=" class="btn btn-info">Update</a>
        <a href="delete.php?id=" class="btn btn-danger">Delete</a>
    </div>
</div>


<?php } ?>