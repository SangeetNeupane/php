<?php
    $arr=['Nepal'=>'Kathmandu','China'=>'Bejing','Japan'=>'Tokiyo'];
    echo"<pre>";
    print_r ($arr);
    echo"</pre>"."<br>";
    echo"<pre>";
    var_dump($arr);
    echo"</pre>"."<br>";
    

    echo 'We Cannot do this by using for loop'."<br>";

    echo"<br>"."<ul>";
    foreach($arr as $arrs=> $val)
    {
        echo"<br>"."<li>".$arrs.'=>'.$val."</li>";
    }
    echo"</ul>";
?>