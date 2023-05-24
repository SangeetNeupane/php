<?php
$X1=$_GET['x1'];
$X2=$_GET['x2'];
$Y1=$_GET['y1'];
$Y2=$_GET['y2'];
$s=sqrt(pow(($X2-$X1),2)+pow(($Y2-$Y1),2));
echo"the ditance of given by using formula 2".$s;
?>