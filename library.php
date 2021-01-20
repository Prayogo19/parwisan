<?php

function rupiah($angka)
{
    $hasilrupiah = "Rp " . number_format($angka,2,',','.');
    return $hasilrupiah;
}

?>