<?php
error_reporting(0);
$result = "";
$error = "";

if (isset($_POST["submit"])) {

      
     if (!$_POST['name']) {

       $error="<br />Please enter your name";

     }
      
     if (!$_POST['email']) {

       $error.="<br />Please enter your email address";

     }
     
      
     if ($_POST['email']!="" AND !filter_var($_POST['email'],
FILTER_VALIDATE_EMAIL)) {
      
     $error.="<br />Please enter a valid email address";

     }


      
     if (!empty($error)) {

 $result='<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>'.$error.'</div>';

     } else {

	     $headers = "From: info@youragencydomain.com" . "\r\n";
         $mailed = mail("info@youragencydomain.com", "Contact Message for Marketing",

                     "Name: ".$_POST['name']."
        Email: ".$_POST['email']."
        Phone: ".$_POST['phone']." 
        Website: ".$_POST['websiteurl']." 
        Your City: ".$_POST['city'],$headers);


         if ($mailed) {

        $result='<div class="alert alert-success" align="center"> <strong> Thanks for contacting us</strong> - We\'ll get back to you shortly.</div>';
        } else {
                $error='<div class="alert alert-danger" align="center">Sorry, there was
                an error sending your message. Please try again later.</div>';
            }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="Web design for dentists."/>
   
    <title>Web Design and Websites for Dentist Practices</title>
    
    	<!--CSS Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="css/style.css" />
  	<link rel="stylesheet" type="text/css" href="css/navbar.css" />

    <!--Font Styles -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">


  </head>
  

  <body>
  
   <div class="container-fluid" id="banner">

    <div class="top-banner">
         
     <br>
       
       <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Free Website Analysis (worth $399)</h4>
      </div>
      <div class="modal-body">
       
    
        <p>We will go through your website and provide you with actionable advice to get more patients.</p>
        

          <form class="modal-form" method="post">
        <label>Website URL</label><input type="text" name="websiteurl" class="form-control" placeholder="eg. www.example.com" value="" />
        
        <br>
        
         <label>Email</label><input type="email" name="email" class="form-control" placeholder="We will send the report to this email address" value="" />
        
        <br>
        
        <label>Name</label><input type="text" name="name" class="form-control" placeholder="Your Name" value="" />
        
        <br>
                   
        <label>Contact</label><input type="number" name="phone" class="form-control" placeholder="Contact Number" value="" />
        
        <br>
                    
        <button type="submit" name="submit" class="btn btn-success modal-button">Continue</button>
        
        <br><br>


          </form>
        
      </div>
      
    </div>

  </div>
</div>
<!-- End of Modal -->
        
        
         
                 <div class="row">
                 
                 	<div class="col-xs-6">
                		 
                		 
                 		 <p class="top-cta"><a href="https://youragencydomain.com/contact.php">Request An Appointment</a> </p>
                 		
                 	</div>
                 	
                 	
                 	<div class="col-xs-6">
                		 
                		 <!-- Trigger/Open The Modal -->
                 		 <p class="top-cta" data-toggle="modal" data-target="#myModal" align="right"><a href="#">Free Website Analysis</a></p>
                 		
                 	</div>
                 	
                 	
                 	                	
                 </div>
                 
                 <br>
                 
                 
                  <div class="center-block" align="center">
                         
          
                            <a href="https://youragencydomain.com"><p class="logo-image" align="center">&nbsp;</p></a>

                       
                  
                              <p class="tagline" align="center">Web Design for Dentist Practices</p>
    
                  </div>


    </div><!--top-banner-->

  </div><!--end of banner-->
  
  <nav class="navbar navbar-default navbar-static-top" role="navigation" id="topnavbar">
  
           <div class="navbar-header">
      
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      
                      <span class="sr-only">Toggle navigation </span>
          
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
          
                 </button>
      
          </div>

    
          <div class="collapse navbar-collapse" align="center">
      
                   <ul class="nav navbar-nav">
          
                    <li> <a href="https://youragencydomain.com/marketing-solutions.php"><span class="center-underline">Marketing Solutions</span></a></li>
                     <li> <a href="https://youragencydomain.com/our-work.php"><span class="center-underline">Our Work</span></a></li>
                     <li> <a href="https://youragencydomain.com/blog.php"><span class="center-underline">Growth Tips</span></a></li>
                     <li> <a href="https://youragencydomain.com/about.php"><span class="center-underline">About Us</span></a></li>
                     <li> <a href="https://youragencydomain.com/contact.php"><span class="center-underline">Contact Us</span></a></li>
                     
              
              
                  </ul>
           </div>  

     
    </nav>
 

   <?php echo $result; ?>
 
  	
  	
  	
  	 <div class="web-design-background">
  	
  	
  	<div class="container question-responsive" align="center">
  	
  	<p class="wd-heading-question" align="center">Web Design and Websites for Dentist Practices</p>  
  	
		 </div>
		 
	  </div>
	  
	<br><br><br>
	  
	
	 <div class="container-fluid" align="center">
	  
	  <div style="max-width: 800px">
	  	
	  	
		  <p class="text-padding">Ever wanted a website that not only looks great, but also gets results?</p>
	  	
	  	<br>
	  	
	  	<p class="text-padding">How about a website created ONLY for Dentists by a team who understands exactly what you're looking for?</p>
	  	

	  	
	  	<div class="col-sm-6">
	  	
		<p class="would-like-to"><span style="font-size: 17px"><strong>A Dentist Would Like To:</strong></span></p>
	  	
	  	<br>
	  	
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>Go On Holiday &#128521;</p>
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>Be Fully Booked</p>
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>Get More Patients</p>	  	
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>Have a Waiting List</p>
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>Not Focus on Marketing</p>
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>Spend More Time Learning</p>
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>Improve Patient Relationships</p>
	  	
	  	
	  	</div>
	  	
	  	
	  	<div class="col-sm-6">
	  	
		<p class="would-like-to float"><span style="font-size: 17px"><strong>A Website Visitor Would Like To:</strong></span></p>
	  	
	  	<br>
	  	
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>Make a Booking</p>
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>See Social Proof</p>
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>Not Be Confused</p>
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>Have The Right Answers</p>
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>Know How You Can Help</p>
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>Know How You Are Unique</p>
	  	<p class="liketodo"><i class="glyphicon glyphicon-ok"></i>See Contact & Location Details</p>
	  	
	  	
	  	
	  	</div>
	  	
	  	
		 </div></div>
		 
		 <br><br><br><br>
	  	
	  <p align="center"><span style="font-size: 17px"><strong>This Is Where We Help You:</strong></span></p>
	  	
	  	<br>
	  	
	  	<p align="center"><img class="img-responsive" src="images/dentist-web-design.jpg" alt="dentist-web-design" /></p>
	  	
	  	<br><br><br>
	  	
	  	<p align="center" class="text-padding">We create effective websites that are perfect for your practice and the website visitor.</p>
	  	
	  	<br><br><br>
	  	
	  	<p align="center" class="text-padding">In order for Dentistry websites to succeed in this competitive industry, they need to have the following:</p>
	  	
	  	<br><br>
	  	
	  	<div align="center">
	  	
	  	<div style="max-width: 1000px">
	  	
	  	<div class="row">
	  	
	  	<div class="col-sm-3">
	  	
	  	<i class="glyph-industry glyphicon glyphicon-lock"></i>
	  		
		<p><span style="color: black font-size: 18px">Secure SSL security</span></p>
				
	  	
	  	</div>
	  	
	  	<div class="col-sm-3">
	  	
	  	<i class="glyph-industry glyphicon glyphicon-list"></i>
	  		
		<p><span style="color: black font-size: 18px">A full list of services</span></p>
	  	
		</div>
  	
  		<div class="col-sm-3">
	  	
	  	<i class="glyph-industry glyphicon glyphicon-flash"></i>
	  		
		<p><span style="color: black font-size: 18px">Clear Call-To-Actions</span></p>
	  	
		</div>
		
		
		<div class="col-sm-3">
			
	  	<i class="glyph-industry glyphicon glyphicon-fast-forward"></i>
	  		
		<p><span style="color: black font-size: 18px">A fast loading website</span></p>
	  	
		</div>
		
		</div>
		
		<div class="row">
		
  	
  		<div class="col-sm-3">
	  	
	  	<i class="glyph-industry glyphicon glyphicon-search"></i>
	  		
		<p><span style="color: black font-size: 18px">Effective on-page and off-page SEO</span></p>
	  	
	  	</div>
	  	
	  	<div class="col-sm-3">
	  	
	  	<i class="glyph-industry glyphicon glyphicon-education"></i>
	  		
		<p><span style="color: black font-size: 18px">A regular blog showcasing expertise</span></p>
	  	
	  	</div>
	  	
	  	<div class="col-sm-3">
	  	
	    <i class="glyph-industry glyphicon glyphicon-check"></i>
	  		
		<p><span style="color: black font-size: 18px">A clear message for the website visitor</span></p>
	    
	    </div>
	    
	    <div class="col-sm-3">
	    
	  	<i class="glyph-industry glyphicon glyphicon-eye-open"></i>
	  		
		<p><span style="color: black font-size: 18px">Multiple case studies and testimonials</span></p>
	  	
	  	</div>
	  	
	  	</div>
	  	
	  	<div class="row">
	  	
	  	<div class="col-sm-3">
	  	
	    <i class="glyph-industry glyphicon glyphicon-heart"></i>
	  		
		<p><span style="color: black font-size: 18px">A professional, well-designed appearance</span></p>
	    
	    </div>
	    
	    <div class="col-sm-3">
	    
	  	<i class="glyph-industry glyphicon glyphicon-fire"></i>
	  		
		<p><span style="color: black font-size: 18px">An effective online marketing campaign</span></p>
	  	
	  	</div>
	  	
	  	<div class="col-sm-3">
			
	  	<i class="glyph-industry glyphicon glyphicon-thumbs-up"></i>
	  		
		<p><span style="color: black font-size: 18px">Social media engagement and growth</span></p>
	  	
		</div>
  	
  		<div class="col-sm-3">
	  	
	  	<i class="glyph-industry glyphicon glyphicon-signal"></i>
	  		
		<p><span style="color: black font-size: 18px">Analyzing the data for improvement</span></p>
	  	
	  	</div>
	  	
	  	</div>
	  	
			</div>
	  	
	  	</div>
	  	
	
	  	<br><br><br><br>
	  	
	  	
	  	
	  	<br>
	  	
	  	<div class="container-fluid center-block" align="center" style="max-width: 900px">
	  	
	  
	  <div class="col-md-6" align="center">
	  	
	  	
	  <p align="center"><strong>If you don't have a website</strong>, complete this short form and we will get back to you:</p>
	  
	  <br>



<form method="post" class="web-design-form">
<br />

            <div align="center" class="form-group center-block">
              
                   <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $_POST['name']; ?>" />
                   
             
           </div>

            <div align="center" class="form-group center-block">
               
                      <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_POST['email']; ?>" />
                      
                
            </div>

            <div align="center" class="form-group center-block">
                
                    <input type="tel" name="phone" class="form-control" placeholder="Contact Number" value="<?php echo $_POST['phone']; ?>" />
                    
                
            </div>



             <div align="center" class="form-group center-block">
                
                    <input type="text" name="city" class="form-control" placeholder="Your City" value="<?php echo $_POST['city']; ?>" />
                    
                
            </div><!--end city-->

                    <p align="center"><input type="submit" name="submit" class="btn btn-success btn-lg submit websitesubmit" value="Submit Form" /> </p><br /><br /><br />

        </form>
        
	</div>

	  	
	  <div class="col-md-6" align="center">
	  	
	  	
	  <p align="center"><strong>If you have a website</strong>, get a free marketing analysis worth $399 (<em>done by people - not software</em>):</p>
	  
	  <!-- Trigger/Open The Modal -->
        <p class="feedback-cta free-analysis" data-toggle="modal" data-target="#myModal"><a href="#">Get My Free Website Analysis</a></p>
	
  
  	
  	</div>
  	
  	</div>
	
	<br>
	<br>
	<br>
	

  
   <div class="analysis-cta" align="center">
	 
	  	
	  	<br>
	  	
	  	<p class="analysis-heading text-padding" align="center">We focus on getting you more patients,<br>while you focus on running your practice</p>
	  	
	  	<br><br><br><br>
	  	
	  	
	  </div>
	  

  
  <footer>
  
  <div class="footer-links" align="center">
<a href="https://youragencydomain.com/marketing-solutions.php">Dentist Marketing Solutions</a>
<a href="https://youragencydomain.com/our-work.php">Our Work</a>
<a href="https://youragencydomain.com/blog.php">Growth Tips</a>
<a href="https://youragencydomain.com/pricing.php">Pricing</a>
<a href="https://youragencydomain.com/about.php">About Us</a>
<a href="https://youragencydomain.com/contact.php">Contact Us</a>



</div>



<div class="social-links" align="center">



<a href="https://linkedin.com" target="_blank"><svg  width="30" height="30" viewBox="0 0 24 24"><path fill="#BDBDBD" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>


<a href="https://www.facebook.com/youragencydomain/" target="_blank"><svg style="width:30px; height:30px" viewBox="0 0 24 24"><path fill="#BDBDBD"  d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" />
</svg></a>

</div> <!--end social-link-->


<div class="policy-links" align="center">

    <a href="https://youragencydomain.com/privacy-policy.php" rel="nofollow">Privacy Policy</a> &nbsp;&nbsp;&nbsp; 
    <a href="https://youragencydomain.com/terms.php" rel="nofollow">Terms &amp; Conditions</a> &nbsp;&nbsp;&nbsp; 


</div>

<br>


<p align="center" id="copyright">&copy; youragencydomain.com</p> 


</footer>



   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


    <!--FIXED NAVBAR SCRIPT-->
     <script> $('#topnavbar').affix({
    offset: {
        top: $('#banner').height()
    }   
}); </script>


  </body>

</html>