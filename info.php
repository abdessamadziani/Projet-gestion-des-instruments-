 
<?php session_start() ;

    
    include("decoupage/sidebar.php") ; 
    include("decoupage/cnx.php");
// if(isset($_GET['id']))
//     {  $id=$_GET['id'];
//         $req="select p.name as productName,category.name as categoryName,p.price,p.quantite,p.description,admin.name as owner from product p ,admin,category where p.id_admin=admin.id and p.type=category.id and p.id='$id'";
//         $row=mysqli_query($conn,$req);
//     }
// else
// header('Location:product.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/mystyle.css">
    <title>Details Information</title>
</head>
<body>
 
    <section class="mt-5">
            <?php  if(isset($_GET['id']))
    { 
        
        $id=$_GET['id'];
        $req="select p.name as productName,category.name as categoryName,p.price,p.quantite,p.description,admin.name as owner,p.img as img from product p ,admin,category where p.id_admin=admin.id and p.type=category.id and p.id='$id'";
        $query=mysqli_query($conn,$req);
        $row=(mysqli_fetch_assoc($query));

    echo " 
    <div class='card text-center'>
  <div class='card-header text-info fs-4 bg-warning'>
  Details Information
  </div>
  <div class='card-body'>
    <h4 class='card-text'>Product Name : {$row['productName']}</h4>
    <hr>
    <h4 class='card-text'>Category : {$row['categoryName']}</h4>
    <hr>
    <h4 class='card-text'>Price : {$row['price']}</h4></h5>
    <hr>
    <h4 class='card-text'>Quantite : {$row['quantite']}</h4>
    <hr>
    <h4 class='card-text'>Description : {$row['description']}</h4>
    <hr>
    <h4 class='card-text'>Owner : {$row['owner']}</h4>
    <hr>
    <h4 class='card-text'>Image : <img class='rounded-circle' src='{$row["img"]}' width=150px />  </h4> 

  </div>
  <div class='card-footer  bg-dark text-white' >
    we are happy to give you your details 
  </div>
</div>
    
    
    ";

    

    } 
else
header('Location:product.php'); ?>

           
        
 
    </table>

    </section>
 
    




<script src="https://kit.fontawesome.com/24dbd9ce21.js" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.js"></script> 
<script src="assets/myscript.js"></script> 

</body>
</html>