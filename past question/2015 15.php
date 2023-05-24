<?php
$R=array('R',21,'M');
$A=array('A',20,'F');

?>
<html>
    <head>
        <title>Table</title>
    </head>
    <body>
        <table border=2>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>
            <tr>
                <?php
                foreach($R as $r)
                {
                ?>
                <td><?php echo $r ?></td>
                <?php } ?>
            </tr>
            <tr>
                <?php
                foreach($A as $a)
                {
                ?>
                <td><?php echo $a ?></td>
                <?php } ?>
            </tr>
        </table>
    </body>
</html>