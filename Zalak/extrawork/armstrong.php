<?php

$a=$i=1634;
$p=strlen($i);
$sum=0;
while($i>0)
{
	$b=$i%10;
	$sum=$sum + pow($b,$p);
	$i=$i/10;
}
if($sum==$a)
{
echo "$a is an Armstrong number <br>"; 
}
else
{
	echo "$a is not an Armstrong number <br>"; 
}
?>