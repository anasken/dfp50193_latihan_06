<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Baju</title>
</head>

<body>
    <h1>Kedai baju</h1>
        <?php
        $baju = 78;
        $duit = 250;
        for ($baju = 0; $duit < 78; $baju++) {
            $hasil = $duit - $baju;
            $duit -= $baju;
        ?>
            <tr>
                <td><?php echo $duit ?></td>
                <td>-</td>
                <td><?php echo $baju ?></td>
                <td>=</td>
                <td><?php echo $hasil ?></td>
            </tr>
        <?php
        }
        ?>
</body>

</html>