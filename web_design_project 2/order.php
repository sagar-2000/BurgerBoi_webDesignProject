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
    <?php include 'header.php';?>

<h2 style="text-align:center">select you burger</h2>


<div class="ordergrid" >

<div class="A" >
<button class="photo" id="b1" value="0" onclick="myFunction(0)" ><img class="photo" src="burger1.png" width="100%" title="beef n cheese"></button>

</div>
<div class="B">
<button class="photo" id="b1" value="1" onclick="myFunction(1)"><img class="photo"src="burger2.png" width="100%" title="fishyboy"></button>
</div>
<div class="C">
<button class="photo" id="b1" value="2" onclick="myFunction(2)"><img class="photo"src="burger3.png" width="100%" title="triple threat"></button>
</div>
<div class="D">
<button class="photo" id="b1" value="3" onclick="myFunction(3)"><img class="photo"src="burger4.png" width="100%" title="classic"></button>
</div>

<div class="E">
<table id="t01" width="98%"><br>


<tr>
  <th>burger</th>
  <th>pieces</th>
</tr>
<tr>
   <td><p id="demo"></p></td>
<td><p id="demo_c"></p><input class="button_order" type="button" value="remove x1" id="moins" onclick="minus(0)"></td>
   
</tr>
<tr>
<td><p id="demo1"></p></td>
   <td><p id="demo_c1"></p><input class="button_order" type="button" value="remove x1" id="moins" onclick="minus(1)"</td>
</tr>
<tr>
   <td><p id="demo2"></p></td>
   <td><p id="demo_c2"></p><input class="button_order" type="button" value="remove x1" id="moins" onclick="minus(2)"</td>
</tr>
<tr>
   <td><p id="demo3"></p></td>
   <td><p id="demo_c3"></p><input class="button_order" type="button" value="remove x1" id="moins" onclick="minus(3)"</td>
</tr>
<tr>
   <td><p id="demo4"></p></td>
   <td><p id="demo_c4"></p><input class="button_order" type="button" value="remove x1" id="moins" onclick="minus(4)"</td>
</tr>
<tr>
   <td><p id="demo5"></p></td>
   <td><p id="demo_c5"></p><input class="button_order" type="button" value="remove x1" id="moins" onclick="minus(5)"</td>
</tr>
<tr>
   <td><p id="demo6"></p></td>
   <td><p id="demo_c6"></p><input class="button_order" type="button" value="remove x1" id="moins" onclick="minus(6)"</td>
</tr>
<tr>
   <td><p id="demo7"></p></td>
   <td><p id="demo_c7"></p><input class="button_order" type="button" value="remove x1" id="moins" onclick="minus(7)"</td>
</tr>
</table><br>

<table id="t01" width="98%" >
<form action="sides.php" method="get" >
<tr>
   <th>total amount($) = <p id="tot"></p><input class="button_main" style="float:right" type="submit" value="checkout"></input>
</tr>
</table>
</form>
</div>
<div class="G">
<button class="photo" id="b5" value="4" onclick="myFunction(4)"><img class="photo" src="fries.png" width="100%" title="fries"></button>
</div>
<div class="H">
<button class="photo" id="b6" value="5" onclick="myFunction(5)"><img class="photo" src="twisty.png" width="100%" title="twisted fries"></button>
</div>
<div class="I">
<button class="photo" id="b7" value="6" onclick="myFunction(6)"><img class="photo" src="wings.png" width="100%" title="chicken wings"></button>
</div>
<div class="J">
<button class="photo" id="b8" value="7" onclick="myFunction(7)"><img class="photo" src="colddrink.png" width="100%" title="cold drink"></button>
</div>
</div>
<script>

var total = 0;

    var price = [8,10,12,5,3,5,7,2];
    var count = [0,0,0,0,0,0,0,0];
    var nam = ["beef n cheese","fishyboy","triple threat","classic","fries","twisted fries","chicken wings","cold drink"];
                                        
function  myFunction(counting) {
    

    var a = counting;
    
    count[a]++;
    
    
    switch(a){
        case 0:{
            document.getElementById("demo").innerHTML = nam[a] + "-" + price[a] + "$";
            document.getElementById("demo_c").innerHTML = count[a];
            break;
        }
        case 1:{
            document.getElementById("demo1").innerHTML = nam[a] + "-" + price[a] + "$";
            document.getElementById("demo_c1").innerHTML = count[a];
            break;
        }
        case 2:{
            document.getElementById("demo2").innerHTML = nam[a] + "-" + price[a] + "$";
            document.getElementById("demo_c2").innerHTML = count[a];
            break;
        }
        case 3:{
            document.getElementById("demo3").innerHTML = nam[a] + "-" + price[a] + "$";
            document.getElementById("demo_c3").innerHTML = count[a];
            break;
        }
        case 4:{
            document.getElementById("demo4").innerHTML = nam[a] + "-" + price[a] + "$";
            document.getElementById("demo_c4").innerHTML = count[a];
            break;
        }
        case 5:{
            document.getElementById("demo5").innerHTML = nam[a] + "-" + price[a] + "$";
            document.getElementById("demo_c5").innerHTML = count[a];
            break;
        }
        case 6:{
            document.getElementById("demo6").innerHTML = nam[a] + "-" + price[a] + "$";
            document.getElementById("demo_c6").innerHTML = count[a];
            break;
        }
        case 7:{
            document.getElementById("demo7").innerHTML = nam[a] + "-" + price[a] + "$";
            document.getElementById("demo_c7").innerHTML = count[a];
            break;
        }
        
    }
    
    total = total + price[a];
    document.getElementById("tot").innerHTML = total;
}

function minus(counting){
    
    var a = counting;
    
    if(count[a] > 0){
        count[a]--;
        
        switch(a){
        case 0:{
            document.getElementById("demo_c").innerHTML = count[a];
            break;
        }
        case 1:{
            document.getElementById("demo_c1").innerHTML = count[a];
            break;
        }
        case 2:{
            document.getElementById("demo_c2").innerHTML = count[a];
            break;
        }
        case 3:{
            document.getElementById("demo_c3").innerHTML = count[a];
            break;
        }
        case 4:{
            document.getElementById("demo_c4").innerHTML = count[a];
            break;
        }
        case 5:{
            document.getElementById("demo_c5").innerHTML = count[a];
            break;
        }
        case 6:{
            document.getElementById("demo_c6").innerHTML = count[a];
            break;
        }
        case 7:{
            document.getElementById("demo_c7").innerHTML = count[a];
            break;
        }
        
        }
        total = total - price[a];
        document.getElementById("tot").innerHTML = total;
    }
   }

</script>

    
    
