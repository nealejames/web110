<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Neale Simpkins Web Developer Examples and Resources</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
     <link rel="stylesheet" href="css/forms.css" />
     
     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="js/script.js"></script>
 </head>
 <body>
     
   <main>
     <header>
     <h1><a href="index.html">Neale Simpkins: Web Developer Examples and Resources</a></h1>
         
  <nav id="cssmenu">
   <ul>
     <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
     <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG</a></li>
     <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
     <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
     <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i>Gallery</a></li>
     <li><a href="#"><i class="fa fa-fw fa-bars"></i> Google</a>
        <ul>
           <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
           <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
           <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
        </ul>
     </li>
     <li><a href="contact.php"><i class="fa fa-check-square-o" aria-hidden="true"></i>
 Contact Neale</a></li>
   </ul>
  </nav>
         
    </header>
       
    <section class=fullwidth>
        <h2>Contact Neale</h2>
        
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
    </section>

     <footer>
      <p><small>&copy; 2020 by <a href="contact.php">Contact Neale</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
     </footer>
  </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
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