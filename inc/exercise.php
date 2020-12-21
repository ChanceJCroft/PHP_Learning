<?php
//store each exercise in a variable
$exercise1 = 'Display "Hello World!"';
$exercise2 = 'Work with Node.js';
$exercise3 = 'Work with Express.js';
$exercise4 = 'Time for CSS I think?';
$exercise5 = 'Bro do u even semantic markup your HTML?';
$exercise6 = 'Display "Hello World in a new language"';
$exercise7 = 'Hah, GameDev cant be that hard!';

//create variable for day of the week
  //uses the built in PHP date function and returns in numeric value
$day = date('N');

//if statement to test for the day of the week
if ($day == 1) {
 echo $exercise1; 
}
elseif ($day == 2) {
 echo $exercise2; 
}
elseif ($day == 3) {
 echo $exercise3; 
}
elseif ($day == 4) {
 echo $exercise4; 
}
elseif ($day == 5) {
 echo $exercise5; 
}
elseif ($day == 6) {
 echo $exercise6; 
}
elseif ($day == 7) {
 echo $exercise7; 
}

?>