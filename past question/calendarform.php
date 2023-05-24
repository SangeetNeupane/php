<html>

<head>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    if (!empty($_POST)) {
    $month = $_POST['month'];
    $year = $_POST['year'];

    $numOfDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $firstDayOfMonth = date("w", mktime(0, 0, 0, $month, 1, $year));
    ?>
    <table>
            <tr>
                <td>Sun</td>
                <td>Mon</td>
                <td>Tue</td>
                <td>Wed</td>
                <td>Thu</td>
                <td>Fri</td>
                <td>Sat</td>
            </tr>
            <tr>
    <?php
    for ($i = 0; $i < $firstDayOfMonth; $i++) {
    echo "<td></td>";
    }
    for ($day = 1; $day <= $numOfDays; $day++) {
    if (($day + $firstDayOfMonth - 1) % 7 == 0) {
    echo "</tr><tr>";
    }
    echo "<td>$day</td>";
    }
    }
    ?>
    </tr>
    </table>
</body>

</html>