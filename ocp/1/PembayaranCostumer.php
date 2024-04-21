<?php

include_once("TipePembayaran.php");

class PembayaranCostumer {
    public function menerimaPembayaran(TipePembayaran $tipe): void {
        $tipe->memprosesPembayaran();
    }
}

?>
