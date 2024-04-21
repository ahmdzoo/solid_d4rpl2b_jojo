<?php

class PenghitungPersegi {
    function hitungLuas(Persegi $persegi) {
        $sisi = $persegi->getSisi();
        return $sisi * $sisi;
    }
}
?>