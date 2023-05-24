<?php
 $data=array('Bachelor in Information','Bachelor in Business Administration','Bachleor in Business Studies');
?>
<html>
    <head></head>
    <body>
    <ol type ="a">
            <?php foreach($data as $value)
            { ?>
           <li> <?php echo $value ?>  </li>
            <?php } ?>
       </ol>
    </body>
</html> 