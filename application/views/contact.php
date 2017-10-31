<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<title>RFH | Journey</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css">
<link rel='stylesheet' href='<?php echo base_url(); ?>css/roboco.css'>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/contact.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="custom-light-grey">
<!-- Navbar (sit on top) -->
<div class="custom-top">
  <div class="custom-bar custom-white custom-wide custom-padding custom-card-2">
    <a href="<?php echo base_url(); ?>" class="custom-bar-item custom-button"><b>RFH</b> Journey</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="custom-right custom-hide-small">
      <a href="#projects" class="custom-bar-item custom-button">Projects</a>
      <a href="#about" class="custom-bar-item custom-button">About</a>
      <a href="<?php echo site_url('index.php/c_href/contact'); ?>" class="custom-bar-item custom-button">Contact</a>
    </div>
  </div>
</div>

<!-- Page Container -->
<div class="custom-content custom-margin-top" style="max-width:1400px;">

  <div class="row">
    <div class="col-lg-10" style="padding-top: 55px;">
        <div class="col-md-offset-3 col-sm-offset-2 col-md-6 col-sm-8">
             <div class="row">
                <form class="contact-us pattern-bg">
        					  <div class="col-sm-6">
          						<div class="form-group">
          						  <input type="text" id="name" class="form-control" placeholder="Your Name">
          						 </div>
                    </div>
                    <div class="col-sm-6">
            				   <div class="form-group">
            					    <input type="email" id="email" class="form-control" placeholder="Your Email">
            					 </div>
                    </div>
                    <div class="col-sm-6">
        						   <div class="form-group">
        							     <input type="text" id="website" class="form-control" placeholder="Your Website">
        						   </div>
                    </div>

                    <div class="col-sm-6">
          						 <div class="form-group">
          						     <input type="text" id="address" class="form-control" placeholder="Where are You From?">
          						 </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                         <input type="text" id="Subject" class="form-control" placeholder="Subject">
                     </div>
                    </div>

                    <div class="col-sm-12">
        					    <div class="textarea-message form-group">
        					      <textarea id="message" class="textarea-message form-control" placeholder="Your Message" rows="5"></textarea>
        						  </div>
                    </div>

                    <div class="text-center">
	                      <button type="submit" class="button button-style button-style-dark button-style-color-2">Submit</button>
                    </div>

                </form>
              </div>
		    </div>
    </div>
  </div>

  <!-- End Page Container -->
</div>

<footer class="custom-container custom-teal custom-center custom-margin-top">
  <p>Find me on social media.</p>
  <a href="http://www.facebook.com/rfh1933"> <i class="fa fa-facebook-official custom-hover-opacity"></i></a>
  <a href="http://www.instagram.com/restu_fh"><i class="fa fa-instagram custom-hover-opacity"></i></a>
  <a href="http://www.path.com/restu_fh"><i class="fa fa-pinterest-p custom-hover-opacity"></i></a>
  <a href="http://twitter.com/Restu_FHermawan"><i class="fa fa-twitter custom-hover-opacity"></i></a>
  <a href="http://www.linkedin.com/in/restu-fauzy-hermawan-760a76113/"><i class="fa fa-linkedin custom-hover-opacity"></i></a>
  <p></p>
</footer>

</body>
</html>
