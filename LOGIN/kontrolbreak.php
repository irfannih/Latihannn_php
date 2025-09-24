<?php
$menghitung=0;
while ($menghitung < 100)
{
$menghitung++;
    if ($menghitung==50) {
        break; 
    }
    echo $menghitung;
    echo "<br />";
}