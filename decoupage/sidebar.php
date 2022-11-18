

       <nav class="side-bar">
        <h2 class="text-dark text-center mt-3">Menu</h2>
        <div class="image m-auto">
    <img class="rounded-circle" src="./assets/imgs/myimg.jpg" alt="">
 </div>
 <h5 class="text-capitalize fs-6 text-dark text-center"><?php echo $_SESSION['name']; ?></h5>
 <p class="text-capitalize text-info fs-5 text-center">admin</p>
 <div class="list-group text-start my-list mb-5">
    <a href="http://localhost/my%20local/gestion%20instrument/home.php" class="mt-2 p-2 "><i class="icon fas fa-home text-info fs-4 ps-3 pe-3"></i><input type="button" value="home" class=" bg-transparent d-none d-lg-inline-block fs-6"></a>
    <a href="http://localhost/my%20local/gestion%20instrument/products.php" class="mt-2 p-2  "><i class="icon fas fa-headphones-alt  col-md-text-start text-info fs-4 ps-3 pe-3"></i><input type="button" value="products" class=" text-capitalize bg-transparent text-dark  d-none d-md-inline-block fs-6"></a>
    <a href="" class="mt-2 p-2 "><i class="icon fas fa-money-check-alt text-info fs-4 ps-3 pe-3"></i><input type="button" value="paiments" class="text-capitalize bg-transparent text-dark d-none d-lg-inline-block fs-6"></a>
    <a href="" class="mt-2 p-2 "><i class=" icon fas fa-signal text-info fs-4 ps-3 pe-3 "></i><input type="button" value="statistics" class=" text-capitalize bg-transparent text-dark d-none d-lg-inline-block fs-6"></a>
    <div class="  form-check form-switch mt-2  p-2 ms-5 s-bar ">
      <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1" >
      <label class="form-check-label  d-none d-lg-inline-block fs-6" for="exampleCheck1" >Dark mode</label>
   </div>
   <a href="logout.php" class="mt-2 p-2"><i class="icon fas fa-sign-out-alt text-info fs-4 ps-3 pe-3"></i><input type="button" value="log out" class=" text-capitalize bg-transparent text-dark d-none d-lg-inline-block fs-6"></a>
  </div>
    </nav>
