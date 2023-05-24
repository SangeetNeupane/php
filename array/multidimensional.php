<?php
$a=array(
    'Sangeet'=>array('Address'=>'Birgunj Ranighat','Age'=>'21','Roll'=>'7'),
    'Reeza'=>array('Address'=>'Birgunj Jailroad','Age'=>'20','Roll'=>'5'),
    'Suruchi'=>array('Address'=>'Kolvi Panitanki','Age'=>'22','Roll'=>'32')
);
echo '<table border=2px>'.'<tr>'."<th>Name</th><th>Address</th><th>Age</th><th>Roll</th></tr><tr>";

foreach($a as $b=>$c)
{
    echo "<td>".$b."</td>";
    foreach($c as $d=>$e)
    {
        echo '<td>'.$e."</td>";  
    }
    echo"</tr>";
}
echo '</table>';
?>