<?php include "connection.php" ?>
<?php 

$prodId = $_GET['id'];
echo $prodId;

// view products
    $view_query = "SELECT * FROM `pdo_crud` WHERE prod_id = :prodId";
    $view_prepare = $connection->prepare($view_query);
    $view_prepare->bindParam(':prodId',$prodId);
    $view_prepare->execute();

    $prod_data = $view_prepare->fetch(PDO::FETCH_ASSOC);
    print_r($prod_data);

// update products
    if(isset($_POST['updateBtn']))
    {
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productDescription = $_POST['productDescription'];
        $productRatting = $_POST['productRatting'];

        $update_query = "UPDATE `pdo_crud` SET `prod_name`=:prodName,`prod_desc`= :prodDesc,`prod_price`=:prodPrice,`prod_rating`=:prodRatting WHERE prod_id = :prodId";

        $update_prepare = $connection->prepare($update_query);

        $update_prepare->bindParam(':prodId',$prodId);
        $update_prepare->bindParam(':prodName',$productName);
        $update_prepare->bindParam(':prodDesc',$productDescription);
        $update_prepare->bindParam(':prodPrice',$productPrice);
        $update_prepare->bindParam(':prodRatting',$productRatting);
        $update_prepare->execute();

        header("location:view.php");
    }

?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center my-3">Update Products</h1>

    <div class="container">
        <div class="row">

            <form class="row g-3" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="col-md-12">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" value="<?php echo $prod_data['prod_name'] ?>" id="productName" name="productName">
                </div>
               
                <div class="col-md-12">
                    <label for="productPrice" class="form-label">Product Price</label>
                    <input type="text" class="form-control" value="<?php echo $prod_data['prod_price'] ?>" id="productPrice" name="productPrice">
                </div>
                <div class="col-md-12">
                    <label for="productDescription" class="form-label">Product Description</label>
                    <input class="form-control" value="<?php echo $prod_data['prod_desc'] ?>" id="productDescription" name="productDescription">
                </div>
                <div class="col-md-12">
                    <label for="productRatting" class="form-label">Product Rating</label>
                    <input type="text" class="form-control" value="<?php echo $prod_data['prod_rating'] ?>" id="productRatting" name="productRatting">
                </div>
               
               
           
                <div class="col-12">
                    <button type="submit" name="updateBtn" class="btn btn-primary">Update Product</button>
                </div>
            </form>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>