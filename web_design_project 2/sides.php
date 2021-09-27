<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8"/>
   <title>
     q2
   </title>
<link rel="stylesheet" type="text/css" href="main_css.css" />

 </head>

     <body>

<?php include 'header.php'?>

<div class="flex-container">
<div class="box1">
<button class="button_order" style="width:75px;margin-top:20px;margin-right:40px"; ><a style="color:black;font-size:15px" href="order.php">change order</a></button>
<h3 style="margin:5%"><strong>pay by credit or debit card</strong></h3>


<form class="pay" action="totalcheckout.php" method="get" style="margin:5%">

<label for="name">name on card :</label><br>
    <input type="text" name="name" style="width:100%" placeholder="honey singh" required/>
    
    <label for="num">Credit card number:</label><br>
    <p><input type="number" name="num" style="width:100%" placeholder="1111-2222-3333-4444" maxlength="16" minlength="16" required/></p>

    <p for="email">email ID</p>
    <p><input type="email" name="email" style="width:100%" placeholder="honeysingh@website.com" required/></p>

    <label for="expy">expiry year:</label><br>
<p><input type="number" name="expy" style="width:50%" placeholder="24" maxlength="2" minlength="2" min="20" required/></p>

    <label for="expm">expiry month:</label><br>
    <p><input type="number" name="expm" style="width:50%" placeholder="08" maxlength="2" minlength="2" min="1" max="12"required/></p>

    <label for="cvv"> CVV:</label><br>
    <p><input type="number" name="cvv" style="width:50%" placeholder="999" maxlength="3" minlength="3" required/></p>

    <label for="address">address:</label><br>
    <p><input type="text" name="address" style="width:100%" placeholder="house/flat no., street name, city name a " required/></p>

    <label for="code">iercode:</label><br>
    <p><input type="text" name="code" style="width:50%" placeholder="abcde123"/></p>


    <input class="button_main" type="submit" value="submit">

</form>
</div>
</div>



