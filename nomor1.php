<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 1</title>
</head>

<body>
    <?php
    $nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
    $nilai_array = explode(" ", $nilai);
    echo '(1) Nilai Rata-rata = ' . array_sum($nilai_array) / count($nilai_array) . "<br />";
    echo '(2) Nilai Tertiinggi = ' . max($nilai_array) . "<br />";
    echo '(3) Nilai Terendah = ' . min($nilai_array);
    ?>
</body>

</html>