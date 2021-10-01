<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 6</title>
</head>

<body>
    <?php
    function array1d_func($arr2D)
    {
        $i = 0;
        $j = 0;
        $arr1D = [];
        while (isset($arr2D[$i][0])) {
            while (isset($arr2D[$i][$j])) {
                $arr1D[] = $arr2D[$i][$j];
                $j++;
            }
            $i++;
            $j = 0;
        }
        return $arr1D;
    }

    function search_func($input_arr, $word)
    {
        $y = 0;
        $x = str_split($word, 1);
        $count_x = count($x);
        for ($i = 0; $i < $count_x; $i++) {
            if (in_array($x[$i], $input_arr)) {
                $y++;
            }
        }
        if ($y == $count_x) {
            return "true";
        } else {
            return "false";
        }
    }

    $arr = [
        ['f', 'g', 'h', 'i'],
        ['j', 'k', 'p', 'q'],
        ['r', 's', 't', 'u']
    ];
    $array1d =  array1d_func($arr);
    echo search_func($array1d, 'one');

    ?>
</body>

</html>