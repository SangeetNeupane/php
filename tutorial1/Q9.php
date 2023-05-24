<html >
<head>
    <title>Switch</title>
</head>
<body>
<h1>Choose Case<a href="Q9.php?n=1">Click Here</a></h1>
</body>
</html>
<?php
$n=isset($_GET['n'])?$_GET['n']:5;
switch ($n) {
    case '1':
        $u=2;
        $a=98;
        $t=60;
        echo "A= ".$a." T= ".$t." U= ".$u."<br>";
        $v=$u+($a*$t);
        echo "The output of given by using V=U+AT formula is ".$v;
        break;
    case '2':
        $a=99;
        $s=50;
        $u=2;
        echo "A= ".$a." S= ".$s." U= ".$u."<br>";
        $v=sqrt(pow($u,2)+(2*$a*$s));
        echo "The output of given by using v=sqrt(pow(u,2)+(2*a*s)) is ".$v;
    case '3':
        $u=2;
        $t=55;
        $a=88;
        echo "A= ".$a." T= ".$t." U= ".$u."<br>";
        $s=($u*$t+(1/2*$a*pow($t,2)));
        echo"The output of given by using s=(u*t+(1/2*a*pow(t,2))) is ".$s;

    case '4':
        exit();
    default:
        echo "<br>"."Wrong Choice.";
        break;
}
?>