<?php
    $arr=['Momo','Chaumin','Samosa','Chat'];
    echo"<pre>";
    print_r ($arr);
    echo"</pre>"."<br>";
    echo"<pre>";
    var_dump($arr);
    echo"</pre>"."<br>";
    echo"<br>"."<ul>";
    for($i=0;$i<count($arr);$i++)
    {
        echo"<br>"."<li>".$arr[$i]."</li>";
    }
    echo"</ul>";

    echo"<br>"."<ul>";
    foreach($arr as $arrs=> $val)
    {
        echo"<br>"."<li>".$arrs.'=>'.$val."</li>";
    }
    echo"</ul>";
?>