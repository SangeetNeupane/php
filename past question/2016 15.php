<?php

// Create the multidimensional array
$kathmandu_valley_cities = array(
    "Kathmandu" => array("Newroad", "Durbar Marg", "Thamel"),
    "Lalitpur" => array("Patan", "Jawlakhel", "Kupondole"),
    "Bhaktapur" => array("Durbar square", "Suryabinayak")
);
?>
<html>
    <head>
    </head>
    <body>
        <table border =2>
            <?php foreach ($kathmandu_valley_cities as $district => $cities) { ?>
             <tr>
                <th><?php echo $district ?></th>
                <?php  foreach ($cities as $city) { ?>
                <td><?php echo $city ?></td>
                <?php } ?>
             </tr>
                <?php } ?>
        </table>
    </body>
</html>