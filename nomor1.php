<?php
$nilai = array(72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86);  // Average 
$jumlah = array_sum($nilai); 
$rata = $jumlah / count ( $nilai ); 
// Top 7 Higher 
rsort($nilai); 
$top7 = array_slice($nilai, 0, 7 );
echo "Tertinggi : "; print_r($top7); 
krsort($nilai);
$low7 = array_slice($nilai, 0, 7);
echo "Terendah : "; print_r($low7); 
echo " ";
echo "Rata-Rata : ".$rata; echo " ";
