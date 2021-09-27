<!DOCTYPE html>
<html lan="en">
    <head>
        <title> burger singh</title>
        <link rel="stylesheet" type="text/css" href="main_css.css" />


 </head>
     <body>
    <?php include 'header.php';?>
       <?php
           $emai = $_GET['email'];
           
          if (!filter_var($emai, FILTER_VALIDATE_EMAIL))
           echo("-> please go back and enter a valid email address.");
           ?>

<div class="timergrid" style="text-align:center">
<h3>Thank you for your feedback</h3>
</div>
</body>
</html>


