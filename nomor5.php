<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 5</title>
</head>

<body>
    <?php
    function encrypt_func($input)
    {
        $letter = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $input = strtoupper($input);
        $input_array = str_split($input);
        $y = true;
        $result = '';
        $x = 1;
        $tmp = 0;

        for ($i = 0; $i < count($input_array); $i++) {
            $tmp = array_search($input_array[$i], $letter);
            if ($y == true) {
                $result .= $letter[$tmp + $x];
                $y = false;
            } else {
                $val = $tmp - $x;
                if ($val < 0) {
                    $val = count($letter) + ($val);
                }
                $result .= $letter[$val];
                $y = true;
            }
            $x++;
        }

        return $result;
    }

    $input_string = "DFHKNQ";
    echo encrypt_func($input_string);

    ?>
</body>

</html>