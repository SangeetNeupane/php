<?php
/*@author=Sangeet Neupane
    <s2058n@gmail.com>
*/
    $arr=[
        'Asia'=>
        ['Nepal'=>'Kathmandu',
        'India'=>'New Delhi',
        'Sirlanka'=>'Colombo']
    ];
    echo"<pre>";
    print_r ($arr);
    echo"</pre>"."<br>";
    echo"<pre>";
    var_dump($arr);
    echo"</pre>"."<br>";
    

    echo 'We Cannot do this by using for loop'."<br>";

    echo"<br>"."<ul>";
    foreach($arr as $arrs=>$val)
    {
        echo "<br>"."<li>".$arrs."</li>"."<ul>";
        foreach($val as $key=>$value)
        {
            echo "<br>"."<li>".$key."=>".$value."</li>";
        }
    }
    echo"</ul>";
    echo"</ul>";
?>