<html>
    <head>
        <title>Multiplier query string</title>
    </head>
    <body>
        <h1>Multiplier : <a href="multiplier.php?num=15">Click</a></h1>
    </body>
</html>
<?php
   $num=isset($_GET['num'])?$_GET['num']:15;
   $i=1;
   echo "Multiples Of ".$num." are:<br/>";
    while($i<=10)
   {
    $m=$num*$i;
    echo  $num." X ".$i." = ".$m."<br/>";
    $i++;
   }
?>