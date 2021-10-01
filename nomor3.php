<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 3</title>
</head>

<body>
    <?php

    function unigram_func($input)
    {
        $input_array = explode(' ', $input);
        $unigram = '';
        foreach ($input_array as $item) {
            $unigram .= $item . ', ';
        }
        $unigram = substr($unigram, 0, -2);
        return $unigram;
    }

    function bigram_func($input)
    {
        $input_array = explode(' ', $input);
        $x = 0;
        $bigram = '';
        foreach ($input_array as $item) {
            if ($x < 1) {
                $bigram .= $item . ' ';
                $x++;
            } else {
                $bigram .= $item . ', ';
                $x = 0;
            }
        }
        $bigram = substr($bigram, 0, -2);
        return $bigram;
    }

    function trigram_func($input)
    {
        $input_array = explode(' ', $input);
        $x = 0;
        $trigram = '';
        foreach ($input_array as $item) {
            if ($x < 2) {
                $trigram .= $item . ' ';
                $x++;
            } else {
                $trigram .= $item . ', ';
                $x = 0;
            }
        }
        $trigram = substr($trigram, 0, -2);
        return $trigram;
    }

    $input_string = "Jakarta adalah ibukota negara Republik Indonesia";
    echo 'Unigram : ' . unigram_func($input_string) . '<br/>';
    echo 'Bigram : ' . bigram_func($input_string) . '<br/>';
    echo 'Trigram : ' . trigram_func($input_string);
    ?>
</body>

</html>