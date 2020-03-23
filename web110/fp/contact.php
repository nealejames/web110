<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Contact Stella Rose Designs</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
<!-- Link CSS Style Sheets -->
     
  <link rel="stylesheet" href="css/fp.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />   
     
 </head>
 <body>
     <main class="wrapper">
     <header>
       <h1><a href="index.html">Stella Rose Designs</a></h1>
         
<div class="topnav" id="myTopnav">
     <nav>
       <a href="index.html">Welcome</a>
       <a href="about.html">About</a>
       <a href="gallery.html">Gallery</a>
       <a href="faq.html">FAQ</a>
       <a href="facebook.html">Facebook</a> 
       <a href="contact.php" class="active">Contact</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">
       <i class="fa fa-bars"></i></a>
    </nav>
    </div>
    
    </header>
     <h2>Contact Stella Rose Designs</h2>
   
    <div class="contact">
          <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "simpkins.neale@gmail.com";  //place your/your client's email address here
        $toName = "Neale"; //place your client's name here
        $website = "Web 110";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
   </div>    
    
    
     <footer>
         <p><small>&copy; 2020 by <a href="contact.php">Stella Rose Designs</a>, All Rights Reserved | <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> | <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> | <a href=disclaimer.html>Disclaimer</a></small></p>
     </footer>
  </main>
     
     <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
     
 </body>
</html>