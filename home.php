<?php
include_once("decoupage/cnx.php");
include_once("decoupage/script.php");
if(!isset($_SESSION['name']))
{
   header("Location:index.php");
}



$req="SELECT count(*) from product";
$query=mysqli_query($conn,$req);
$products=mysqli_fetch_assoc($query);

$req="SELECT count(*) from admin";
$query=mysqli_query($conn,$req);
$admin=mysqli_fetch_assoc($query);

$req="SELECT sum(price) from product";
$query=mysqli_query($conn,$req);
$products_n=mysqli_fetch_assoc($query);

$req="SELECT max(price) from product";
$query=mysqli_query($conn,$req);
$max_price=mysqli_fetch_assoc($query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/mystyle.css">
    <title>HomePage</title>
</head>
<body>
    <?php include_once("decoupage/sidebar.php") ; ?>
    <section>

        <div class="container">
        <button type="button" class="btn btn-info btn-lg text-capitalize text-white d-block mt-3 me-3 mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btn-add" >add new </button>
        </div>

           <div class="card-items row container">
            <div class="card-item card-1 col-12 col-md-6  col-lg-2">
                <i class=" icon fas fa-music mt-0 text-info"></i>
                <h2 class="text-capitalize   pt-1">Products</h2>
                <span class="text-Secondary fw-bold fs-3 "><?php echo $products['count(*)'] ?></span>
            </div>
            <div class="card-item card-2  col-lg-2">
                <i class=" icon fas fa-money-check-alt text-info"></i>
                <h2 class="text-capitalize   pt-1">Total Price</h2>
                <span class=" fw-bold text-Secondary fs-3"><?php echo $products_n['sum(price)'].' '.'DH' ?></span>
            </div>

            <div class="card-item card-4  col-lg-2">
            <i class=" icon fas fa-chart-line text-info"></i>
                <h2 class="text-capitalize  pt-1">Max Price</h2>
                <span class="text-Secondary fw-bold fs-3"><?php echo $max_price['max(price)'].' '.'DH' ?></span>
            </div>

            <div class="card-item card-3  col-lg-2">
                <i class=" icon fas fa-user-alt text-info"></i>
                <h2 class="text-capitalize   pt-1">admin</h2>
                <span class=" fw-bold fs-3 text-Secondary text-uppercase"><?php echo $admin['count(*)'] ?></span>
            </div>
        </div>
        

    </section>
 


    <script src="https://kit.fontawesome.com/24dbd9ce21.js" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.js"></script> 
<script src="assets/myscript.js"></script> 

</body>
</html>