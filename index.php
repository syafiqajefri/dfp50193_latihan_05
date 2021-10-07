<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadual Darab</title>
    <style>
        *{font-family : Verdana, Geneva, Tahoma, sans-serif;
        }
        td{padding: 4px;}
    </style>
</head>
<body>
    <h1>Jadual Darab</h1>

    <table>
        <?php
        $darab = 7;
        for ($x =1; $x <= 12; $x++) {
            $hasil = $darab * $x;
            ?>
            <tr>
                <td><?php echo $x; ?></td>
                <td>X</td>
                <td><?php echo $darab; ?></td>
                <td>=</td>
                <td><?php echo $hasil; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <p><a href="jadual.php">Jadual-Jadual Darab</a></p>
</body>
</html>