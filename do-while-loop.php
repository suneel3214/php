<?php

$num =2;
do {
 	$num +=2;
 	echo $num,"\n";
 } while ( $num<= 12); 
 ?>

 <?php 

//php code to illustrate the difference of two loops
$num = 2;

// in case of while
while ($num != 2) {
	echo "in case of while the code is skipped"; 

	echo $num,"\n";
}

//in case of do...while

do{
	$num++;
	echo "the do...while code is executed atlest once";
} while($num == 2);
  
  echo $num,"\n";

  ?>