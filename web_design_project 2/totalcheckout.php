
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


        <div class='timergrid'><div class='timer'>Happyness will be delivered in = <span id='timer'></span></div></div>
<script>
   
document.getElementById('timer').innerHTML =
  043 + ":" + 00;
Timer();

function Timer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  //if(m<0){alert('timer completed')}
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  console.log(m)
  setTimeout(Timer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}

</script>
