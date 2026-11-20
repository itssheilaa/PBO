<?php

require('./PropertyConstant.php');
use PBO\Marketplace\Product;

//object
$product = new Product();
$product->setKode('P0001')
        ->setNama('Laptop')
        ->setHarga(10000000)
        ->setStok(5);

//hasil
echo "Product: ". $product->getNama();
echo "<br>";
echo "Harga: ". $product->getHarga();
echo "<br>";
echo "Stok: ". $product->getStok();
echo "<br>";
echo "Pajak: ". $product->PAJAK()."%";
echo "<br>";
echo "<br>";
echo "Total setelah pajak: Rp.". $product->total();