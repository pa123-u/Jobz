<!doctype html>
<html lang="zxx">
<?php include('common/navbar.php') ?>
<?php

 if (!isset($_SESSION['activeuser'])) {
   $user="abc";

  echo ("<script>location.href='login.php'</script>");
}else {
    $user=$_SESSION['activeuser'];
}

 ?>

<section id="intro">
<div class="carousel-item active">
<div class="carousel-background"><img src="imags/slider/slider1.jpg" alt=""></div>
<div class="carousel-container">
<div class="carousel-content text-left">
<div class="container">
<h2 class="font-color-white">About Jobtend</h2>
<p class="font-color-white margin">Lovistiq pue velit phasellus sed auctor leo eros luctus nibh fermentum, ad imperdiet rhoncus dolorhabitant purus velit aliquet dolorhabitant purus velit aliquet donecurna ut in turpis donecurna ut in turpis</p>
<a class="Explore-Jobs">Explore Jobs</a>
</div>
</div>
</div>
</div>
</section>


<section id="Best-Place-to-Find-Jobs">
<img src="imags/Best-Place-to-Find-Jobs.jpg" class="Best-Place-to-Find-Jobsimages" alt="">
<div class="Best-Place-to-Find-Jobs-image">
<div class="container ">
<div class="row">
<div class="col-lg-6 col-md-12">
<h3 class="title">Best Place to Find Jobs</h3>
<?php
echo "$user"; ?>
<div class="vertical-space-20"></div>
<p>The honcs fusce aliqm non dictmst dapib alorem accman pellenl tesque in temor ultrices etiams fusce aliqm non dictmst dapib alorem</p>
<div class="vertical-space-30"></div>
<div class="Title-text-here-one-box">
<div class="media">
<div class="mr-3 rounded-circle imges orange align-self-center">
<img src="imags/Best-Place-to-Find-Jobs-icone1.png" alt="" class="">
</div>
<div class="media-body">
<h6>Mobile friendly</h6>
<p>The honcs fusce aliqm non dictmst dapib alorem accman pellenl tesque in temor</p>
</div>
</div>
</div>
<div class="vertical-space-20"></div>
<div class="Title-text-here-one-box">
<div class="media">
<div class="mr-3 rounded-circle imges blue align-self-center">
<img src="imags/Best-Place-to-Find-Jobs-icone2.png" alt="" class="">
</div>
<div class="media-body">
<h6>Cookie cotton candy</h6>
<p>The honcs fusce aliqm non dictmst dapib alorem accman pellenl tesque in temor</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
</div>
</div>
</div>
</div>
</section>


<section id="v2-Jobtend" class="v2-Jobtend-none-roted">
<div class="container">
<div class="vertical-space-100"></div>
<div class="row">
<div class="col-lg-9 col-md-12 ">
<h3 class="title-jobted title font-color-white">Why Choose Jobtend</h3>
<div class="vertical-space-20"></div>
<p class="max-width font-color-white">Tristique velit phasellus sed auctor leo eros luctus nibh fermentum, ad imperdiet rhoncus dolorhabitant purus velit aliquet donecurna ut in turpis
</p>
<div class="vertical-space-40"></div>
<ul class="max-width font-color-white">
<li class="list-item1 ">Tristique velit phasellus sed auctor leo eros luctus nibh fermentum, ad imperdiet rhoncus dolorhabitant purus velit aliquet donecurna ut in turpis
</li>
<li class="list-item1 ">Rivastic stique velit phasellus sed auctor leo eros luctus nibh fermentum, ad imperdiet rhoncus dolorhabitant purus </li>
<li class="list-item1 ">Lovistiq pue velit phasellus sed auctor leo eros luctus nibh fermentum, ad imperdiet rhoncus dolorhabitant purus velit aliquet dolorhabitant purus velit aliquet donecurna ut in turpis donecurna ut in turpis</li>
<li class="list-item1 ">Tristique velit phasellus sed auctor leo eros luctus nibh fermentum, ad imperdiet rhoncus dolorhabitant purus velit aliquet donecurna ut in turpis</li>
</ul>
</div>
<div class="col-lg-3 col-md-12 align-self-center">
<a href="#" data-toggle="modal" data-target="#myModal" class="display-flex">
<span class="fa fa-play-circle font-color-white font-size-48"></span>
<h4 class="font-color-white title align-self-center">Watch Video</h4>
</a>
</div>
<div class="vertical-space-100"></div>
</div>
</div>
</section>


<section id="Meet-With-Our-Team">
<div class="container">
<div class="vertical-space-100"></div>
<h3 class="text-center">Meet With Our Team</h3>
<div class="vertical-space-30"></div>
<p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod
</p>

<div class="vertical-space-60"></div>
<div class="row">
  <?php
  include('dbcon.php');

  $sql="select * FROM team";
  $query=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_assoc($query)) {
     $image="admin/".$row['image'];
     $name=$row['name'];
     $designation=$row['designation'];?>

  <div class="col-lg-3 col-md-6">
  <div class="Meet-With-Our-Team-box">
  <div class="media">
  <img src="<?php echo $image; ?>" alt="" class="mr-3 rounded" height="80px" width="80px">
  <div class="media-body align-self-center">
  <h6><?php echo $name; ?></h6>
  <p><?php echo $designation; ?></p>
  </div>
  </div>
  </div>
  </div>
<?php }
   ?>
<!--

<div class="col-lg-3 col-md-6">
<div class="Meet-With-Our-Team-box">
<div class="media">
<img src="imags/Meet-With-Our-Team/Meet-With-Our-Team2.png" alt="" class="mr-3 rounded">
<div class="media-body align-self-center">
<h6>Rohan Kapoor</h6>
<p>CEO</p>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="Meet-With-Our-Team-box">
<div class="media">
<img src="imags/Meet-With-Our-Team/Meet-With-Our-Team3.png" alt="" class="mr-3 rounded">
<div class="media-body align-self-center">
<h6>Rubi Islam</h6>
<p>Senior Developer</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="Meet-With-Our-Team-box">
<div class="media">
<img src="imags/Meet-With-Our-Team/Meet-With-Our-Team4.png" alt="" class="mr-3 rounded">
<div class="media-body align-self-center">
<h6> John Smith</h6>
 <p>Product Designer</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="Meet-With-Our-Team-box">
<div class="media">
<img src="imags/Meet-With-Our-Team/Meet-With-Our-Team5.png" alt="" class="mr-3 rounded">
<div class="media-body align-self-center">
<h6> Mary Brown </h6>
<p>Marketer</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="Meet-With-Our-Team-box">
<div class="media">
<img src="imags/Meet-With-Our-Team/Meet-With-Our-Team6.png" alt="" class="mr-3 rounded">
<div class="media-body align-self-center">
<h6>Catherine Wilson</h6>
<p>UI/UX Designer</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="Meet-With-Our-Team-box">
<div class="media">
<img src="imags/Meet-With-Our-Team/Meet-With-Our-Team7.png" alt="" class="mr-3 rounded">
<div class="media-body align-self-center">
<h6>Dorothy Davies</h6>
<p>Programer</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="Meet-With-Our-Team-box">
<div class="media">
<img src="imags/Meet-With-Our-Team/Meet-With-Our-Team8.png" alt="" class="mr-3 rounded">
<div class="media-body align-self-center">
<h6>Hannah Hall</h6>
<p>Article Writer</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="Meet-With-Our-Team-box">
<div class="media">
<img src="imags/Meet-With-Our-Team/Meet-With-Our-Team9.png" alt="" class="mr-3 rounded">
<div class="media-body align-self-center">
<h6>Ada Roberts</h6>
<p>Back-End Dev</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="Meet-With-Our-Team-box">
<div class="media">
<img src="imags/Meet-With-Our-Team/Meet-With-Our-Team10.png" alt="" class="mr-3 rounded">
<div class="media-body align-self-center">
<h6>Harry Lewis</h6>
<p>Graphic Designer</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="Meet-With-Our-Team-box">
<div class="media">
<img src="imags/Meet-With-Our-Team/Meet-With-Our-Team11.png" alt="" class="mr-3 rounded">
<div class="media-body align-self-center">
<h6>Ellen Frances</h6>
<p>UI/UX Designer</p>
</div>
 </div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="Meet-With-Our-Team-box">
<div class="media">
<img src="imags/Meet-With-Our-Team/Meet-With-Our-Team12.png" alt="" class="mr-3 rounded">
<div class="media-body align-self-center">
<h6>Eliza Thompson</h6>
<p>Developer</p>
</div>
</div>
</div>
</div>
-->
</div>
<div class="vertical-space-85"></div>
</div>
</section>


<?php include('common/footer.php') ?>
</body>

</html>
