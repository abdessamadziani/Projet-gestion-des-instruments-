<?php
session_start();
if(!isset($_SESSION['name']))
{
   header("Location:index.php");
}
include_once("decoupage/cnx.php");
 include_once("decoupage/script.php");


$req="SELECT count(*) from product";
$query=mysqli_query($conn,$req);
$products=mysqli_fetch_assoc($query);

$req="SELECT count(*) from admin";
$query=mysqli_query($conn,$req);
$admin=mysqli_fetch_assoc($query);

$req="SELECT sum(price) from product";
$query=mysqli_query($conn,$req);
$products_n=mysqli_fetch_assoc($query);


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
        <button type="button" class="btn btn-info btn-lg text-capitalize text-white d-block mt-3 me-3 mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" >add new </button>
        </div>

           <div class="card-items row container">
            <div class="card-item card-1 col-12 col-md-6  col-lg-2">
                <i class=" icon fas fa-music mt-0 text-info"></i>
                <h2 class="text-capitalize   pt-1">Products</h2>
                <span class="text-Secondary fw-bold fs-3 "><?php echo $products['count(*)'] ?></span>
            </div>
            <div class="card-item card-2  col-lg-2">
                <i class=" icon fas fa-money-check-alt text-info"></i>
                <h2 class="text-capitalize   pt-1">paiments</h2>
                <span class=" fw-bold text-Secondary fs-3"><?php echo $products_n['sum(price)'].' '.'DH' ?></span>
            </div>

            <div class="card-item card-4  col-lg-2">
            <i class=" icon fas fa-chart-line text-info"></i>
                <h2 class="text-capitalize  pt-1">statistics</h2>
                <span class="text-Secondary fw-bold fs-3"></span>
            </div>

            <div class="card-item card-3  col-lg-2">
                <i class=" icon fas fa-user-alt text-info"></i>
                <h2 class="text-capitalize   pt-1">admin</h2>
                <span class=" fw-bold fs-3 text-Secondary text-uppercase"><?php echo $admin['count(*)'] ?></span>
            </div>
        </div>

    </section>



<!-- Modal -->

<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="./decoupage/script.php" method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">type</label>
    <select name="type" class="form-select" aria-label="Default select example">
  <option value="1">bowed strings</option>
  <option value="2">woodwind</option>
  <option value="3">brass</option>
  <option value="4">percussion</option>
  <option value="5">keyboard</option>
</select>
  </div>
  <div class="mb-3">
    <label  class="form-label">Image</label>
    <input type="file"  class="form-control" id="exampleInputEmail1" name="image" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">Price</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="price" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">Quantite</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="quantite" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">Owner</label>
    <select class="form-select" name="owner" aria-label="Default select example">
      <?php
          $req="SELECT id,name from admin";
          $query=mysqli_query($conn,$req);
          while($rows=mysqli_fetch_assoc($query)) 
          { ?>
              <option value="<?php echo $rows['id']; ?>"> <?php echo $rows['name']; ?></option>
    <?php } ?>
     
</select>
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="description" aria-describedby="emailHelp">
  </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success" name="save">Save</button>
        <button type="submit" class="btn btn-primary" name="edit">Edite</button>
        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div> -->
    


    <script src="https://kit.fontawesome.com/24dbd9ce21.js" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.js"></script> 
</body>
</html>