<!doctype html>
<html lang="zxx">
<?php include('common/navbar.php') ?>
<?php

 if (!isset($_SESSION['aemail'])) {
  }

 ?>

<section id="post_job">
<div class="vertical-space-100"></div>
<div class="vertical-space-101"></div>
<div class="container">
<div class="list-box">
<a href="#" class="font-color-black margin-right">Job </a> > <a href="#" class="font-color-orange margin-left"> Post job</a>
</div>
<a href="#" class="Save">Save</a>
<div class="vertical-space-60"></div>
<div class="job-post-box">
<form>
<div class="form-group">
<label for="exampleInputJobtitle">Job title</label>
<input type="text" class="form-control" id="exampleInputJobtitle" placeholder="Enter your job title" required />
</div>

<div class="row">
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label for="exampleInputCompany">Company</label>
<input type="text" class="form-control" id="exampleInputCompany" placeholder="Full name of company" required />
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label for="exampleInputLoction">Loction</label>
<input type="text" class="form-control" id="exampleInputLoction" placeholder="Company Address" required />
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="form-group ">
<label>Company Logo</label>
<div class="box text-center">
<input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
<label for="file-5">
<i>
<img src="imags/job-post.png" class="imtges" alt="">
</i>
<span>Drop your file here, or <i class="font-color-orange">Browse</i></span>
</label>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>Document</label>
<div class="box text-center">
<input type="file" name="file-7[]" id="file-7" class="inputfile1 inputfile-4" data-multiple-caption="{count} files selected" multiple />
<label for="file-7">
<i>
<img src="imags/job-post.png" class="imtges" alt="">
</i>
<span>Drop your file here, or <i class="font-color-orange">Browse</i></span>
</label>
</div>
</div>
</div>
</div>
<div class="form-group">
<label for="exampleInputShortDescription">Short Description</label>
<textarea class="form-control small" id="exampleInputShortDescription" placeholder="Write short description" rows="3" required></textarea>
</div>
<div class="form-group">
<label for="exampleInputLongDescription">Write full description</label>
<textarea class="form-control large" id="exampleInputLongDescription" placeholder="Write short description" rows="3" required></textarea>
 </div>
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="form-group mybtn" id="Job-Nature">
<label>Job Nature</label>
<div class="row">
<div class="col-lg-4 col-md-4">
<a class="Job-Nature active1">Full Time</a>

<div class="col-lg-4 col-md-4">
<a class="Job-Nature">Part Time</a>
</div>
<div class="col-lg-4 col-md-4">
<a class="Job-Nature">Freelancer</a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group">
<label for="sel1">Salary Range:</label>
<select class="form-control" id="sel1" name="sellist1">
<option>5,000 - 10,000</option>
<option>3,000 - 5,000</option>
<option>2,000 - 1,000</option>
<option>7,000 - 10,000</option>
</select>
</div>
</div>
</div>
<div class="form-group">
<label>Agree with term and conditions</label>
<div class="form-check">
<input type="checkbox" class="form-check-input " id="exampleCheck1" required />
<label class="form-check-label text-left" for="exampleCheck1">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod lorem nulla magna duis nostra sodales luctus nulla</label>
</div>
</div>
<button type="submit" class="btn Post-Job-Offer">Post Job Offer</button>
</form>
</div>
</div>
</section>


<footer id="footer" class="background-color-white">
<div class="container">
<div class="vertical-space-100"></div>
<div class="row">
<div class="col-lg-4 col-md-6 vertical-space-2">
<h5>About Us</h5>
<p class="paregraf">Tristique velit phasellus sed auctor leo eros luctus nibh fermentu ad impediet rhonus dolor habitant purus velit aliquet donecurna ut in turpis faucibus</p>
<a href="#">
<i class="fa fa-facebook social-icon"></i></a>
<a href="#">
<i class="fa fa-twitter social-icon"></i></a>
<a href="#">
<i class="fa fa-pinterest-p social-icon"></i></a>
<a href="#">
<i class="fa fa-map-marker social-icon"></i></a>
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
<script>
        (function(e, t, n) {
            var r = e.querySelectorAll("html")[0];
            r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2");
        })(document, window, 0);
    </script>
</body>

</html>
