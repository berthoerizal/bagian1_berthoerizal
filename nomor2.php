<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 2</title>
</head>

<body>
    <?php
    function lowercase_func($str)
    {
        $x = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] >= 'a' && $str[$i] <= 'z') {
                $x++;
            }
        }
        echo 'Jumlah huruf kecil = ' . $x;
    }
    $str = "TranSISI";
    lowercase_func($str);
    ?>
</body>

</html>