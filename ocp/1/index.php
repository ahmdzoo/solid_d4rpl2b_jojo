<?php

// Include semua file kelas
include_once("TipePembayaran.php");
include_once("Cash.php");
include_once("Debit.php");
include_once("Kredit.php");
include_once("PembayaranCostumer.php"); // Corrected class name

$pembayaranCustomer = new PembayaranCostumer(); // Corrected object name

echo "Transaksi 1:\n";
$pembayaranCustomer->menerimaPembayaran(new Cash());

echo "Transaksi 2:\n";
$pembayaranCustomer->menerimaPembayaran(new Debit());

echo "Transaksi 3:\n";
$pembayaranCustomer->menerimaPembayaran(new Kredit());

?>
