<?php
$nama_barang = ["Mio", "Beat", "Supra", "N-Max", "Jupiter",];
$harga_barang = [35000, 25000, 20000, 21000, 22000];

echo "<h2>-- Asririka Mart --</h2>";

$beli = [];
$jumlah = [];
$total = [];
$grandtotal = 0;

$jumlah_item = rand(2, 5);

$pilih_index = array_rand($nama_barang, $jumlah_item);

if (!is_array($pilih_index)) {
    $pilih_index = [$pilih_index];
}

foreach ($pilih_index as $idx) {
    $beli[] = $nama_barang[$idx];
    $jumlah[] = rand(1, 5); 
}
?>