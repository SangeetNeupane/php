<?php  
	$i = 2;
	$last = 500;
	echo"<ul>";
	while(TRUE)
	{
		$j = 2;
		if($i > $last) 
		{
			break;
		}
		while(TRUE)
		{
			if($j > sqrt($i))
			{
				echo "<li>".$i."</li>";
				break;
			}
			if($i % $j == 0) 
			{
				break;
			}
			$j++;
		}
		$i++;
	}
    echo"</ul>";
?>