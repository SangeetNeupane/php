<?php

$ree=array('Reeza'=>5,'Sangeet'=>'05','Suruchi'=>32);//associative
// if(array_key_exists('Reeza',$ree))
// {
//     echo 1;
// }
// else{
//     echo 0;
// }

if(array_search('05',$ree))
{
    echo 1;
}
else{
    echo 0;
}
?>
