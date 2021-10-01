<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 4</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 0; $i < 64; $i++) {
        $stack[$i] = $i + 1;
    }
    $split = 8;
    $array = array_chunk($stack, $split);
    ?>
    <table>
        <?php foreach ($array as $arr) { ?>
            <tr>
                <?php for ($j = 0; $j < 8; $j++) { ?>
                    <td><?php echo $arr[$j]; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>