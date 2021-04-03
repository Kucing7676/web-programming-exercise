<?php

    function hitungDenda($tglHarusKembali, $tglKembali)
    {
        $tgl1 = explode("-", $tglHarusKembali);
        $tgl2 = explode("-", $tglKembali);

        $y1 = $tgl1[0];
        $m1 = $tgl1[1];
        $d1 = $tgl1[2];

        $y2 = $tgl2[0];
        $m2 = $tgl2[1];
        $d2 = $tgl2[2];

        $convert1 = gregoriantojd($m1,$d1,$y1);
        $convert2 = gregoriantojd($m2,$d2,$y2);

        $selisih = $convert2 - $convert1;

        $denda = 3000;
        return $selisih * $denda;
    }

    echo "jadi hasilnya Rp.", hitungDenda("2021-01-03", "2021-01-05");

?>