<!doctype html>
<html lang="zxx">
<?php include('common/navbar.php') ?>


<section id="intro">
<div class="carousel-item active">
<div class="carousel-background"><img src="imags/slider/slider1.jpg" alt=""></div>
<div class="carousel-container">
<div class="carousel-content text-left">
<div class="container">
<h2 class="font-color-white">Registration</h2>
<p class="font-color-white margin">Lovistiq pue velit phasellus sed auctor leo eros luctus nibh fermentum, ad imperdiet rhoncus dolorhabitant purus velit aliquet dolorhabitant purus velit aliquet donecurna ut in turpis donecurna ut in turpis</p>
</div>
</div>
</div>
</div>
</section>
<form action="" method="post">
  <div class="form-group">
    <label for="name"> name:</label>
    <input type="text" class="form-control" id="name" name="username">
  </div>
  <div class="form-group">
    <label for="phone"> phone:</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
  <div class="form-group">
    <label for="email">email:</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <div class="form-group">
    <label for="pwd">confirm password:</label>
    <input type="password" class="form-control" id="pwd" name="cpassword">
  </div>
  <button type="submit" class="btn btn-success" name="click">Register</button>
  </form>
  </div>

  </body>
  </html>
<?php
 include('dbcon.php');
 if (isset($_POST['click'])) {
   if(empty($_POST["username"]) || empty($_POST["phone"]) || empty($_POST["email"]) || empty($_POST["password"]))
      {
           echo '<script>alert("All Fields are required")</script>';
      }
       else {


   $name=$_POST['username'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $confirm_password=$_POST['cpassword'];
   if ($confirm_password==$password){
    $password=md5($password);
    $query="INSERT INTO details(name, phone, email, password) VALUES ('$name','$phone','$email','$password')";
    $sql=mysqli_query($conn,$query);
    if ($sql) {
       echo ("<script>location.href='login.php'</script>");
   // $_SESSION['success']='Register successfully';
   }else {
     echo "<script>alert('Login first')</script>";
   }
  }
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include('common/footer.php');?>
  </body>
</html>

}
}
 ?>
