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
 
    <section>
    <div class="container m-auto ">
        <h1 class="text-info">Details Information</h1>
    </div>
    <table class=" container ms-5 table table-striped table-hover mt-3 my-table ">
            <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantite</th>
            <th>Description</th>
            <th>Owner</th>
            <th>Image</th>
            </tr>
            <?php  if(isset($_GET['id']))
    { 
        
        $id=$_GET['id'];
        $req="select p.name as productName,category.name as categoryName,p.price,p.quantite,p.description,admin.name as owner from product p ,admin,category where p.id_admin=admin.id and p.type=category.id and p.id='$id'";
        $query=mysqli_query($conn,$req);
        $row=(mysqli_fetch_assoc($query));

         echo "  <tr>
        <td class='fs-2'> {$row['productName']} </td>
        <td class='fs-2'> {$row['categoryName']}</td>
        <td class='fs-2'> {$row['price']}</td>
        <td class='fs-2'> {$row['quantite']}</td>
        <td class='fs-2'> {$row['description']}</td>
        <td class='fs-2'> {$row['owner'] }</td>
        <td class='fs-2'><img src='./assets/imgs/pic.jpg' width='100px'/></td>

    </tr> ";

    } 
else
header('Location:product.php'); ?>

           
            
            <!-- <tr>
                <td>hello</td>
                <td>202 DH</td>
                <td>43</td>
                <td>Lorem ipsum dolor sit.</td>
                <td>admin1</td>
                <td><img src="assets/imgs/pic.jpg" width="100px" /></td>
             </tr>
             <tr>
                <td>hello</td>
                <td>202 DH</td>
                <td>43</td>
                <td>Lorem ipsum dolor sit amet consectetur</td>
                <td>admin1</td>
                <td><img src="assets/imgs/pic.jpg" width="100px" /></td>
             </tr> -->
 
    </table>

    </section>
 
    




    <script src="https://kit.fontawesome.com/24dbd9ce21.js" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.js"></script> 
</body>
</html>