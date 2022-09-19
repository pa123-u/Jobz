<!doctype html>
<html lang="zxx">
<?php include('common/navbar.php') ?>


<section id="intro">
<div class="carousel-item active">
<div class="carousel-background"><img src="imags/slider/slider1.jpg" alt=""></div>
<div class="carousel-container">
<div class="carousel-content text-left">
<div class="container">
<h2 class="font-color-white">Log In Here</h2>
<p class="font-color-white margin">Lovistiq pue velit phasellus sed auctor leo eros luctus nibh fermentum, ad imperdiet rhoncus dolorhabitant purus velit aliquet dolorhabitant purus velit aliquet donecurna ut in turpis donecurna ut in turpis</p>
</div>
</div>
</div>
</div>
</section>
<div class="container">
  <h2 class="section-heading">Log In Here</h3>
<hr>
<form action="" method="post">


  <div class="form-group">
    <label for="email">email:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>



  <button type="submit" class="btn btn-success" name="add">Log in</button>
</form>
<a href="register.php">New User? Register here</a>
</div>

</body>
</html>
<?php

include('dbcon.php');
if (isset($_POST['add'])) {
  $useremail=$_POST['email'];
  $password=$_POST['password'];
    // echo "$useremail.$password";
   // exit();
   $password=md5($password);
   $query="select * from details where email='$useremail' and password='$password'";
   $sql=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($sql);

  if (is_array($row)) {
   $_SESSION["activeuser"]=$row['email'];
      $_SESSION["sname"]=$row['name'];
    // $_SESSION['success']='log in successfully';
    echo ("<script>location.href='about.php'</script>");

   }else {
  echo "Insert invalid";
   }
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

    <meta charset="utf-8">


  <body>
    <?php include('common/footer.php') ?>
  </body>
</html>

 ?>
