<?php

class Product {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;
}

//object
$product = new Product();

$product->kode = 'P0001';
$product->nama = 'Laptop';
$product->harga = 10000000;
$product->stok = 5;

// hitung pajak
$pajak = Product :: PAJAK * 100;
$jumlahPajak = $product->harga * Product::PAJAK; // 1.1 juta

//total
$total = $product->harga + $jumlahPajak; //11.1 juta

//hasil
echo "Product: ". $product->nama;
echo "<br>";
echo "Harga: ". $product->harga;
echo "<br>";
echo "Stok: ". $product->stok;
echo "<br>";
echo "Pajak: ". $pajak."%";
echo "<br>";
echo "<br>";
echo "Total setelah pajak: Rp.". $total;