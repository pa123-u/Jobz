<?php session_start(); ?>
<!doctype html>
<html lang="zxx">
<?php include('common/navbar.php') ?>


<section id="Blog">
<div class="vertical-space-100"> </div>
<div class="vertical-space-101"> </div>
<div class="container">
<h3>Our Latest Blog Posts</h3>
<div class="vertical-space-20"></div>
<p>Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida sodales luctus nulla</p>
<div class="vertical-space-50"></div>
<div class="row">
  <?php
  include('dbcon.php');

  $sql="select * FROM blog";
  $query=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_assoc($query)) {
     $image="admin/".$row['image'];
     $title=$row['title'];
     $today=$row['date'];
     $blog=$row['blog'];
   }?>

<div class="col-lg-4 col-md-6">
<img src="<?php echo $image; ?>" class="blog-image" alt="" height="auto" width="100%">
<div class="blog-box">
<a href="#" class="font-color-black font-size"><?php echo $title; ?></a>
<p class="float-left font-color-black width"><a href="#" class="font-color-black font-size-14"><?php echo $today; ?></a> | <a href="#" class="font-color-black font-size-14"></a></p>
<p class="space10"><?php echo $blog; ?> . </p>
<div class="vertical-space-20"></div>
<a href="#" class="font-color-orange font-bold">Read more<i class="fa fa-long-arrow-right"></i></a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<img src="imags/blog2.jpg" class="blog-image" alt="">
<div class="blog-box">
<a href="#" class="font-color-black font-size">Retina ready graphics</a>
<p class="float-left font-color-black width"><a href="#" class="font-color-black font-size-14">27 Mar, 2018</a> | <a href="#" class="font-color-black font-size-14">11 min read</a></p>
<p class="space10">Fusce aliqm nonlips dictmst dapib alorem accman pellenl tesque in temor aliqm npion dmst dapib honcs fusce aliqm non dictmst . </p>
<div class="vertical-space-20"></div>
<a href="#" class="font-color-orange font-bold">Read more<i class="fa fa-long-arrow-right"></i></a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<img src="imags/blog3.jpg" class="blog-image" alt="">
<div class="blog-box">
<a href="#" class="font-color-black font-size">Simple blog post</a>
<p class="float-left font-color-black width"><a href="#" class="font-color-black font-size-14">27 Mar, 2018</a> | <a href="#" class="font-color-black font-size-14">11 min read</a></p>
<p class="space10">Fusce aliqm nonlips dictmst dapib alorem accman pellenl tesque in temor aliqm npion dmst dapib honcs fusce aliqm non dictmst . </p>
<div class="vertical-space-20"></div>
<a href="#" class="font-color-orange font-bold">Read more<i class="fa fa-long-arrow-right"></i></a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<img src="imags/blog4.jpg" class="blog-image" alt="">
<div class="blog-box">
<a href="#" class="font-color-black font-size">Cookie cotton candy</a>
<p class="float-left font-color-black width"><a href="#" class="font-color-black font-size-14">27 Mar, 2018</a> | <a href="#" class="font-color-black font-size-14">11 min read</a></p>
<p class="space10">Fusce aliqm nonlips dictmst dapib alorem accman pellenl tesque in temor aliqm npion dmst dapib honcs fusce aliqm non dictmst . </p>
<div class="vertical-space-20"></div>
<a href="#" class="font-color-orange font-bold">Read more<i class="fa fa-long-arrow-right"></i></a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<img src="imags/blog5.jpg" class="blog-image" alt="">
<div class="blog-box">
<a href="#" class="font-color-black font-size">Award-winning design</a>
<p class="float-left font-color-black width"><a href="#" class="font-color-black font-size-14">27 Mar, 2018</a> | <a href="#" class="font-color-black font-size-14">11 min read</a></p>
<p class="space10">Fusce aliqm nonlips dictmst dapib alorem accman pellenl tesque in temor aliqm npion dmst dapib honcs fusce aliqm non dictmst . </p>
<div class="vertical-space-20"></div>
<a href="#" class="font-color-orange font-bold">Read more<i class="fa fa-long-arrow-right"></i></a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<img src="imags/blog6.jpg" class="blog-image" alt="">
<div class="blog-box">
<a href="#" class="font-color-black font-size">Mobile friendly</a>
<p class="float-left font-color-black width"><a href="#" class="font-color-black font-size-14">27 Mar, 2018</a> | <a href="#" class="font-color-black font-size-14">11 min read</a></p>
<p class="space10">Fusce aliqm nonlips dictmst dapib alorem accman pellenl tesque in temor aliqm npion dmst dapib honcs fusce aliqm non dictmst . </p>
<div class="vertical-space-20"></div>
<a href="#" class="font-color-orange font-bold">Read more<i class="fa fa-long-arrow-right"></i></a>
</div>
</div>
<div class="vertical-space-25"></div>
<div class="job-list">
<ul class="pagination justify-content-end margin-auto">
<li class="page-item"><a class="page-link pdding-none" href="javascript:void(0);"><i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_left</i></a></li>
<li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
<li class="page-item">
<a class="page-link pdding-none" href="javascript:void(0);"> <i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_right</i></a>
</li>
</ul>
</div>
</div>
</div>
<div class="vertical-space-60"> </div>
</section>


<footer id="footer" class="background-color-white">
<div class="container">
<div class="vertical-space-100"></div>
<div class="row">
<div class="col-lg-4 col-md-6 vertical-space-2">
<h5>About Us</h5>
<p class="paregraf">Tristique velit phasellus sed auctor leo eros luctus nibh fermentu ad impediet rhonus dolor habitant purus velit aliquet donecurna ut in turpis faucibus</p>
<a href="#">
<i class="fa fa-facebook social-icon facebook"></i></a>
<a href="#">
<i class="fa fa-twitter social-icon twitter"></i></a>
<a href="#">
<i class="fa fa-pinterest-p social-icon pinterest-p"></i></a>
<a href="#">
<i class="fa fa-map-marker social-icon map-marker"></i></a>
</div>
<div class="col-lg-2 col-md-6 vertical-space-2">
<h5>Company</h5>
<div class="text">
<a href="#">About</a>
<a href="#">Support</a>
<a href="#">Tems</a>
<a href="#">Privacy</a>
 </div>
</div>
<div class="col-lg-2 col-md-6 vertical-space-2">
<h5>Supports</h5>
<div class="text">
<a href="#">About</a>
<a href="#">Support</a>
<a href="#">Tems</a>
<a href="#">Privacy</a>
</div>
</div>
<div class="col-lg-4 col-md-6 vertical-space-2">
<h5>Subscribe Us</h5>
<p>Get latest update and newsletter</p>
<div class="vertical-space-30"></div>
<form>
<input type="email" class="email " placeholder="Email Address " required="">
<span class="fa fa-envelope email-icone "></span>
<input type="submit" class="Subscribe" value="Subscribe">
</form>
</div>
</div>
<div class="vertical-space-60"></div>
</div>
<div class="container-fluid background-color-orange main-footer">
<div class="container text-center">
<div class="vertical-space-30"></div>
<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
</div>
</div>
</footer>


<script data-cfasync="false" src="js/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<script src="js/custom.js"></script>
</body>

</html>
