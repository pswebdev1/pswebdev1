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

        "Name: ".$_POST['name']."\nEmail: ".$_POST['email']."\nPhone: ".$_POST['phone']."\nWebsite: ".$_POST['websiteurl']."\nYour City: ".$_POST['city'],$headers);

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
   
    <meta name="description" content="Content writing for Dentist practices."/>
   
    <title>Content Writing for Dentist Practices</title>
    
     	<!--CSS Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="css/style.css" />
  	<link rel="stylesheet" type="text/css" href="css/navbar.css" />

    <!--Font Styles -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">

    <!--Favicon -->
  <link rel="icon" href="images/dentist-marketing-favicon.jpg">

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

                       
                  
                              <p class="tagline" align="center">Content Writing for Dentist Practices</p>
    
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
 
  	
  	
  	 <div class="content-writing-background">
  	
  	
  	<div class="container question-responsive" align="center">
  	
  	<p class="wd-heading-question" align="center">Content Writing for Dentist Practices</p>  
  	
		 </div>
		 
	  </div>
	  
	<br>
	  
	
	 <div class="container-fluid" align="center">
	  
	  <div style="max-width: 780px">
	  	
	  	<br><br>
	  	
		  <p class="text-padding">Content Writing is an essential marketing strategy to grow your Dentist Practice online and to get more patients.</p>
	  	
	  	
		 </div></div>

	  	
	  	<br><br>
	  	
	  
	  <div class="container-fluid"  style="max-width: 900px">
	  
	  <h3 align="center">Why Is Content Writing Important?</h3>
	  	
	  	<br><br>	
	  	
	  <div class="row">
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/authority.png" alt="authority" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>Shows Authority</strong></p>
			<p class="ppc-text" align="left">Professionals share what they know. It's no different for Dentists.</p>
	  		
	  	</div>
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/credibility.png" alt="credibility" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>Shows Credibility</strong></p>
			<p class="ppc-text" align="left">Credibility positions you as the "go-to" Dentist patients want to see.</p>
	  		
	  	</div>  		
	  		
	  	</div>
	  	
	 
	  	
	  		  <div class="row">
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/seo-graph.png" alt="seo-graph" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>Improves SEO</strong></p>
			<p class="ppc-text" align="left">Content writing helps boost important SEO terms to rank higher in Google.</p>
	  		
	  	</div>
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/trust.png" alt="trust" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>Relays Trust</strong></p>
			<p class="ppc-text" align="left">Trust is earned. To earn trust, content writing is the key. This results in long-term patients.</p>
	  		
	  	</div>  		
	  		
	  	</div>
	  	
	  
	  	
	  		  <div class="row">
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/more-clients.png" alt="more-patients" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>Converts Visitors Into Patients</strong></p>
			<p class="ppc-text" align="left">Website visitors turn into patients after understanding your practice and trusting your expertize.</p>
	  		
	  	</div>
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/education.png" alt="education" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>Educates the Patients</strong></p>
			<p class="ppc-text" align="left">A simple understanding of the process and your expertise goes a long way for patient satisfaction.</p>
	  		
	  	</div>  		
	  		
	  	</div>
	  	
	  	<br><br>
	  	
	  	<h3 align="center">How We Grow Your Practice With Content Writing</h3>
	  	
	  	<br>
	  	
	  	<p align="center"><img class="img-responsive" src="images/content-writing-graphic.jpg" alt="content-writing-dentist" /></p>

	  	
	  	
	  	</div>
	  	
	  	
	  	<br><br><br><br><br>
	  	
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.mins.js"></script>

    <!--FIXED NAVBAR SCRIPT-->
    <script> $('#topnavbar').affix({
    offset: {
        top: $('#banner').height()
    }   
}); </script>

 


  </body>

</html>