
<?php   include("decoupage/script.php") ;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/mystyle.css">
    <title>Products</title>
</head>
<body>
 <?php include("decoupage/sidebar.php") ;
  include("decoupage/cnx.php") ;

  $req="select * from product";
 $query=mysqli_query($conn,$req);
 
 echo " <section>
 <div class='row  m-auto container mt-3'>";
 while($row=mysqli_fetch_assoc($query))
 {
    $id=$row['id'];
    $name=$row['name'];
    $type=$row['type'];
    $price=$row['price'];
    $quantite=$row['quantite'];
    $description=$row['description'];
    $owner=$row['id_admin'];
    $img=$row['img'];


    echo"
    <div class='col-sm-12 col-md-6  col-lg-4 mb-3 ' data-bs-toggle='modal' data-bs-target='#exampleModal' onclick=showData($id)>
    <div class='card'>
    <div class='d-none'>
    <h6 id='id$id'   data='{$row["id"]}'></h6>
    <h6 id='name$id'   data='{$row["name"]}'></h6>
    <h6 id='type$id'   data='{$row["type"]}'></h6>
    <h6 id='price$id'   data='{$row["price"]}'></h6>
    <h6 id='quantite$id'   data='{$row["quantite"]}'></h6>
    <h6 id='description$id'   data='{$row["description"]}'></h6>
    <h6 id='id_admin$id'   data='{$row["id_admin"]}'></h6>
    <h6 id='img$id'   data='{$row["img"]}'></h6>

    </div>
        <img src='{$row["img"]}'  class='card-img-top ' alt='...'>
        <div class='card-body'>
            <h5 class='card-title text-truncate'title='{$row["name"]}'>{$row['name']}</h5>
            <p class='card-text'>{$row['description']}</p>
            <a href='./info.php?id=$id' class='btn d-block btn-outline-warning me-4'>Check Details</a>

            </div>
        </div>
    </div>
     ";
 }
 echo "</div>     </section> ";
 

 
 
 
 ?>


    <!-- <section> -->
    <!-- <div class="row  m-auto container mt-3">
            <div class=" col-sm-12 col-md-6  col-lg-4 mb-3">
            <div class="card">
                <img src="assets/imgs/pic.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="./info.php?id=1" class="btn btn-primary">Check Details</a>
                </div>
                </div>
            </div> -->
            <!-- <div class="col-sm-12 col-md-6  col-lg-4 mb-3">
                <div class="card">
                    <img src="assets/imgs/pic.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>          
            </div>
           </div>
           <div class="col-sm-12 col-md-6  col-lg-4 mb-3">
                <div class="card">
                    <img src="assets/imgs/pic.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>          
                </div>
              </div> -->
           <!-- </div>
    </section> -->
    <script src="https://kit.fontawesome.com/24dbd9ce21.js" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.js"></script> 
    <script src="assets/myscript.js"></script> 

</body>
</html>