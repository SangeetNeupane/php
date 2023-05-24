<?php  
	$last = 500;
    $i=2;
    echo"<ul>";
    echo "<li>".$i."</li>";
	for($i=2;$i<$last;$i++)
    {
        for($j=2;$j<$i;$j++)
        {
            if($i%$j==0)
            {
                break;
            } 
            if($j > sqrt($i))
            {
                echo "<li>".$i."</li>";
				break;
            }

        }
    }
	
    echo"</ul>";
?>