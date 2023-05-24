<html >
<head>
    <title>Switch</title>
</head>
<body>
<h1>Choose Case Through Link <br>
1)V=U+AT <br>2)v=sqrt(pow(u,2)+(2*a*s)) <br>3)s=(u*t+(1/2*a*pow(t,2))) <br>4)Exit <br><a href="question9.php?n=5">Click Here</a></h1>
</body>
</html>
<?php
/*@author=Suruchi Kumari Jaisawal
<srchjaiswal@gmail.com>*/
$n=isset($_GET['n'])?$_GET['n']:5;
switch ($n) {
    case '1':
        $u=3;
        $a=96;
        $t=30;
        echo "A= ".$a." T= ".$t." U= ".$u."<br>";
        $v=$u+($a*$t);
        echo "The output of  V=U+AT  is ".$v;
        break;
    case '2':
        $a=98;
        $s=70;
        $u=3;
        echo "A= ".$a." S= ".$s." U= ".$u."<br>";
        $v=sqrt(pow($u,2)+(2*$a*$s));
        echo "The output of  v=sqrt(pow(u,2)+(2*a*s)) is ".$v;
    case '3':
        $u=4;
        $t=65;
        $a=98;
        echo "A= ".$a." T= ".$t." U= ".$u."<br>";
        $s=($u*$t+(1/2*$a*pow($t,2)));
        echo"The output of  s=(u*t+(1/2*a*pow(t,2))) is ".$s;

    case '4':
        exit();
    default:
        echo "<br>"."Wrong Choice.";
        break;
}
?>