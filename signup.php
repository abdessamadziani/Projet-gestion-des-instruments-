<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/mystyle.css">
    <title>Document</title>
</head>
<body>
<main class="hero">
<div class=" col-12 col-sm-8 col-md-6 col-lg-5 my-card card p-2 mt-5   ">
      <div class="card-body">
        <h5 class="card-title fw-bold  fs-2 ps-2">Sign up</h5>
        <h6 class="card-subtitle mb-2 text-muted text-capitalize text-center p-2 sb-title "><br><br>
        <?php if(!empty($_GET['error2'])) {?>
    <div class="alert alert-danger" role="alert">
       <?php echo $_GET['error2'];  ?>
    </div>
    <?php  }?>
        <form action="decoupage/script.php" method="POST" id="form2">
                  
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label text-white">Name</label>
                      <input type="text" name="name2" class="form-control" id="input_name">
                 </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                      <input type="test" name="email2" class="form-control" id="input_email">
                  </div>
                  <div class="mb-3 ">
                      <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                      <input type="password" name="password2" class="form-control" id="input_password">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label text-white">Confirm Password</label>
                      <input type="password" name="confirm_password2" class="form-control" id="input_confirm_password">

                  </div>

                  <div class="mt-5 mb-2">
                  <input type="submit" name="ajouter" class=" form-control btn btn-info text-white fw-3"  value="Creer">

                  </div>

                  
              </form>


      </div>
    </div>

    <script src="assets/js/bootstrap.bundle.js"></script> 

</body>
</html>