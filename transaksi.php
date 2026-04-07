<?php

$namaToko = "Indoiwan";
$lokasiToko = "kudus";

$namaKasir = "Hazira";
$nomorTransaksi = "TRX000001";
$tanggalTransaksi = "03-03-2026";

$namaProduk1 = "Beras 5kg";
$hargaProduk1 = 75000;
$jumlahProduk1 = 1;

$namaProduk2 = "Minyak Goreng 1L";
$hargaProduk2 = 18000;
$jumlahProduk2 = 2;

$namaProduk3 = "Gula 1kg";
$hargaProduk3 = 14000;
$jumlahProduk3 = 3;

$totalProduk1 = $hargaProduk1 * $jumlahProduk1;
$totalProduk2 = $hargaProduk2 * $jumlahProduk2;
$totalProduk3 = $hargaProduk3 * $jumlahProduk3;

$totalBelanja = $totalProduk1 + $totalProduk2 + $totalProduk3;

$diskon = 10000;
$pajakPersen = 11;
$biayaPlastik = 2000;

$pajak = ($totalBelanja * $pajakPersen) / 100;
$setelahDiskon = $totalBelanja - $diskon;
$totalAkhir = $setelahDiskon + $pajak + $biayaPlastik;

$uangBayar = 200000;
$kembalian = $uangBayar - $totalAkhir;

echo "<h2>$namaToko</h2>";
echo "Lokasi: $lokasiToko <br>";
echo "Kasir: $namaKasir <br>";
echo "No Transaksi: $nomorTransaksi <br>";
echo "Tanggal: $tanggalTransaksi <hr>";

echo "$namaProduk1 ($jumlahProduk1 x Rp $hargaProduk1) = Rp $totalProduk1 <br>";
echo "$namaProduk2 ($jumlahProduk2 x Rp $hargaProduk2) = Rp $totalProduk2 <br>";
echo "$namaProduk3 ($jumlahProduk3 x Rp $hargaProduk3) = Rp $totalProduk3 <br>";

echo "<hr>";
echo "Total Belanja: Rp $totalBelanja <br>";
echo "Diskon: Rp $diskon <br>";
echo "Pajak (11%): Rp $pajak <br>";
echo "Biaya Plastik: Rp $biayaPlastik <br>";
echo "<strong>Total Akhir: Rp $totalAkhir</strong><br><br>";

echo "Uang Bayar: Rp $uangBayar <br>";
echo "Kembalian: Rp $kembalian";

?>