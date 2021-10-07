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
        $helai = 0;
        $baju = 78;
        for ($duit = 250; $duit > $baju; $duit -= $baju) {
            $helai++;
        
        }
        echo "$helai helai baju. baki duit = $duit";
        ?>
</body>

</html>