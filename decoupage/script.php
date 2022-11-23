<?php
   session_start();

 include("cnx.php");
  include("uploadimages.php");


  if(isset($_POST['check']))
{
  setcookie('email_cookie',$_POST['email'],time()+60*60,'/');
  setcookie('password_cookie',$_POST['password'],time()+60*60,'/');
}


// validaion sign up
if(isset($_POST['ajouter']))
{
    if(isset($_POST['email2']) && isset($_POST['password2']) && isset($_POST['name2']) && isset($_POST['confirm_password2']))
    {
        if (empty($_POST['email2']) && empty($_POST['password2']) && empty($_POST['name2']) && empty($_POST['confirm_password2']) )
        {
            header('Location:../signup.php?error2= All Credential are empty !!');
            exit();
        }
        else if(empty($_POST['name2']))
        {
            header('Location:../signup.php?error2=Name is empty !!');
            exit();
        }
        else if(empty($_POST['email2']))
        {
            header('Location:../signup.php?error2=Email is empty !!');
            exit();
        }
        else if(empty($_POST['password2']))
        {
            header('Location:../signup.php?error2=Password is empty !!');
            exit();
        }
        else if(empty($_POST['confirm_password2']))
        {
            header('Location:../signup.php?error2=Confirm Password is empty !!');
            exit();
        }
        else if($_POST['password2']!=$_POST['confirm_password2'])
        {
            header('Location:../signup.php?error2=Password and Confirm Password are not the same !!');
            exit();
        }
    } 
}
if(!empty($_POST['email2']) && !empty($_POST['password2']) && !empty($_POST['name2']) && !empty($_POST['confirm_password2']))
{
    $name2=($_POST['name2']);
    $email2=($_POST['email2']);
    $password2=($_POST['password2']);
    $req="INSERT INTO admin (`name`, `email`, `password`) VALUES ('$name2', '$email2', '$password2')";
    $query=mysqli_query($conn,$req);  
}


//validation sign in
if(isset($_POST['signin']))
{
    if (empty($_POST['email']) && empty($_POST['password']))
    {
        header('Location:../index.php?error=Email and Password both are empty !!');
        exit();
    }
    else if(empty($_POST['email']))
    {
        header('Location:../index.php?error=Email is empty !!');
        exit();
    }
    else if(empty($_POST['password']))
    {
        header('Location:../index.php?error=Password is empty !!');
        exit();
    }
}






if(isset($_POST['email']) && isset($_POST['password']))
{
    if (!empty($_POST['email']) && !empty($_POST['password']))
    {
       
        $email=($_POST['email']);
        $password=($_POST['password']);
        $req="SELECT * from admin where email='$email' and `password`='$password'";
        $query=mysqli_query($conn,$req);
        $row=mysqli_num_rows($query);
        if($row>0)
            {
                $query_res=mysqli_fetch_assoc($query);
                $_SESSION['name']=$query_res['name'];
               
                header("Location:../home.php");
            }
            else
            header('Location:../index.php?error=Email Or Password incorrect !!');

        
    }
}






// $file=$_FILES['file'];
// $file_name=$_FILES['file']['name'];
// $file_tmp_name=$_FILES['file']['tmp_name'];
// $file_type=$_FILES['file']['type'];
// $file_error=$_FILES['file']['error'];
// $file_size=$_FILES['file']['size'];

// $file_ext=explode('.',$file_name);
// $file_act_ext=strtolower(end($file_ext));
// $allowed=array('jpg','png','jpeg','pdf');

// if(in_array($file_act_ext,$allowed))
// {
//         $file_new_name=uniqid('',true).".".$file_act_ext;
//         $file_destination="uploads/".$file_new_name;
//         move_uploaded_file($file_tmp_name,$file_destination);
//         header("Location:index.php?uploadSeccess");
// }
// else
// {
//     echo "you can not upload files of this type !!";
// }









if(isset($_POST['save']))
{
   addProduct(); 

}
    function addProduct()
    {
        include("cnx.php");

      $file_name=$_FILES['file']['name'];
      $file_tmp_name=$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $file_error=$_FILES['file']['error'];
      $file_size=$_FILES['file']['size'];
      $name=$_POST['name'];
      $type=$_POST['type'];
      $price=$_POST['price'];
      $quantite=$_POST['quantite'];
      $owner=$_POST['owner'];
      $description=$_POST['description'];

$file_ext=explode('.',$file_name);
$file_act_ext=strtolower(end($file_ext));
$allowed=array('jpg','png','jpeg','pdf');

if(in_array($file_act_ext,$allowed))
{
        $file_new_name=uniqid('',true).".".$file_act_ext;
        $file_destination="uploads/".$file_new_name;
        move_uploaded_file($file_tmp_name,$file_destination);
        $img=$file_destination;  
}
else
$img="uploads/pic.jpg";
$req="INSERT INTO `product` (`name`,`type`,`img`,`price`, `quantite`,`id_admin`,`description`) VALUES ('$name','$type','$img','$price','$quantite', '$owner','$description')";
mysqli_query($conn,$req);
header("Location: home.php");


    }

    if(isset($_POST['edit']))
    {
       editProduct(); 
    
    }
        function editProduct()
        {
            include("cnx.php");
            $file_name=$_FILES['file']['name'];
            $file_tmp_name=$_FILES['file']['tmp_name'];
            $file_type=$_FILES['file']['type'];
            $file_error=$_FILES['file']['error'];
            $file_size=$_FILES['file']['size'];

            $id=$_POST['id'];
            $name=$_POST['name'];
            $type=$_POST['type'];
            $price=$_POST['price'];
            $quantite=$_POST['quantite'];
            $owner=$_POST['owner'];
            $description=$_POST['description'];
            $file_ext=explode('.',$file_name);
            $file_act_ext=strtolower(end($file_ext));
            $allowed=array('jpg','png','jpeg','pdf');
            if(in_array($file_act_ext,$allowed))
              {
                $file_new_name=uniqid('',true).".".$file_act_ext;
                $file_destination="uploads/".$file_new_name;
                move_uploaded_file($file_tmp_name,$file_destination);
                $img=$file_destination;
                $req="UPDATE `product` SET `name` = '$name', `type` = '$type', `description` = '$description', `price` = '$price', `quantite` = '$quantite', `id_admin` = '$owner',`img` = '$img' WHERE `id` = '$id' ";
                mysqli_query($conn,$req);
                header("Location: products.php");

             }
             else

                $req="UPDATE `product` SET `name` = '$name', `type` = '$type', `description` = '$description', `price` = '$price', `quantite` = '$quantite', `id_admin` = '$owner' WHERE `id` = '$id' ";
                mysqli_query($conn,$req);
                header("Location: products.php");

        }   

        if(isset($_POST['delete']))
        {
           deleteProduct(); 
        
        }
            function deleteProduct()
            {
                include("cnx.php");
                $id=$_POST['id'];
            
            $req="DELETE from product where id='$id'";
            mysqli_query($conn,$req);
            header("Location: products.php");
    
            } 






 echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
  <input type="text" hidden  class="form-control" id="id" name="id" >
    <label class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" required >
    <small  id="nameinvalid" class="text-danger">Enter Name !!</small>

  </div>
  <div class="mb-3">
    <label class="form-label">type</label>
    <select id="type"  name="type" class="form-select" aria-label="Default select example">
  <option value="1">bowed strings</option>
  <option value="2">woodwind</option>
  <option value="3">brass</option>
  <option value="4">percussion</option>
  <option value="5">keyboard</option>
</select>
  </div>
  <div class="mb-3">
    <label  class="form-label">Image</label>
    <input type="file"  class="form-control"  id="file" name="file" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Price</label>
    <input type="number" class="form-control" id="price" name="price" required >
    <small  id="priceinvalid" class="text-danger">Enter Price !! </small>

  </div>
  <div class="mb-3">
    <label  class="form-label">Quantite</label>
    <input type="number" class="form-control" id="quantite" name="quantite" required  >
    <small  id="quantiteinvalid" class="text-danger">Enter Quantite !!</small>

  </div>
  <div class="mb-3">
    <label  class="form-label">Owner</label>
    <select class="form-select" id="owner" name="owner" aria-label="Default select example">';
    
    $req="SELECT id,name from admin";
    $query=mysqli_query($conn,$req);
    while($rows=mysqli_fetch_assoc($query)) 
    { 
        echo "<option value='{$rows["id"]}'>{$rows['name']}</option>";
    } 
     
 echo '</select>
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <textarea class="form-control" rows="4"  name="description"  id="description" required ></textarea>
    <small  id="descriptioninvalid" class="text-danger">Enter Description !!</small>
  </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success " name="save" id="save">Save</button>
        <button type="submit" class="btn btn-primary " name="edit" id="edit">Update</button>
        <button type="submit" class="btn btn-danger " name="delete" id="delete">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>';
   

    

   





