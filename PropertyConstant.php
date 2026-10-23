<?php

class Product {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function PAJAK(){
        return self::PAJAK * 100; //11
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

//object
$product = new Product('P0001', 'Laptop', 10000000,5);

// $product->kode = 'P0001';
// $product->nama = 'Laptop';
// $product->harga = 10000000;
// $product->stok = 5;

//hasil
echo "Product: ". $product->nama;
echo "<br>";
echo "Harga: ". $product->harga;
echo "<br>";
echo "Stok: ". $product->stok;
echo "<br>";
echo "Pajak: ". $product->PAJAK()."%";
echo "<br>";
echo "<br>";
echo "Total setelah pajak: Rp.". $product->total();