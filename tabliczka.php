<HTML lang="en">
<head>
    <title>Tabliczka</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            font-family: Verdana, sans-serif;
            font-size: large;
        }
        th, td {
            border: 1px dashed black;
            padding: 5px;
        }
        th {
            background-color: burlywood;
        }
        td {
            background-color: beige;
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>
<table>
    <caption>Tabliczka mnożenia</caption>
    <tr>
        <th>&times;</th>
        <?php
        for ($col = 1; $col <= 10; $col++) {
            echo '<th>' . $col . '</th>';
        }
        ?>
    </tr>
    <?php
    for ($row =1; $row <= 10; $row++) {
        echo '<tr><th>' . $row . '</th>';
        for ($col = 1; $col <= 10; $col++) {
            if ($row == $col) {
                echo '<td style="background-color: bisque">' . $col * $row . '</td>';
            } else {
                echo '<td>' . $col * $row . '</td>';
            }
        }
        echo "</tr>\n";
    }
    ?>
</table>
</body>
</HTML>