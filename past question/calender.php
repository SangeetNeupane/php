<?php
function calender($month, $year)
{
    $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $initialDateStamp = mktime(0, 0, 0, $month, 1, $year);
    $firstday = date('w', $initialDateStamp);
    echo "<table border=2>
    <tr>
    <td>Sun</td>
    <td>Mon</td>
    <td>Tue</td>
    <td>Wed</td>
    <td>Thu</td>
    <td>Fri</td>
    <td>Sat</td>
</tr>";
    for ($i = 0; $i < $firstday; $i++) {
        echo "<td></td>";
    }
    for ($day = 1; $day <= $days; $day++) {
        if (($day + $firstday - 1) % 7 == 0) {
            echo "</tr><tr>";
        }
        echo "<td>$day</td>";
    }
}
echo "</table>";

calender(4, 2023);
?>