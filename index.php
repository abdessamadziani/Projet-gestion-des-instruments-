<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/mystyle.css">
      <!-- <meta http-equiv="refresh" content="3"> -->

    <title>Sign in</title>
</head>
<body>


    <main class="hero">

<div class=" col-12 col-sm-8 col-md-6 col-lg-5 my-card card p-4 mt-5  ">
  <div class="card-body">
    <h5 class="card-title fw-bold  fs-2 ps-2">Sign in</h5>
    <h6 class="card-subtitle mb-2 text-muted text-capitalize text-center p-2 sb-title "><span class="text-dark fs-3 text-uppercase m-1 text-white">login to your account</span></h6>
    <?php if(!empty($_GET['error'])) {?>
    <div class="alert alert-danger" role="alert">
       <?php echo $_GET['error'];  ?>
    </div>
    <?php  }?>

    <form action="./decoupage/script.php" method="POST" id="form1">
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="email"  placeholder="Enter your Email">
      </div>
      <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter your password" >
      </div>
      <div class="mb-3 form-check form-switch ">
      <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1" >
      <label class="form-check-label" for="exampleCheck1" >Remember me</label>
       </div>
      <input class="btn btn-info w-100 text-white text-capitalize" name="signin" type="submit" value="sign in">
    </form>
    <div class="link text-center">
      <span class="text-white fs-6">forgot your password ?<a href="#" class="card-link text-capitalize ">reset password</a>
      </span>
    </div>
    <a href="signup.php"><input class="btn btn-warning w-100 text-white text-capitalize" value="sign up"></a>
  </div>
</div>


   
       
    </main>
  

    <script src="assets/js/bootstrap.bundle.js"></script> 
</body>
</html>
