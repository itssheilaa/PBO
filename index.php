<?php

require('./PropertyConstant.php');
use PBO\Marketplace\Product;

//object
$product = new Product('P0001', 'Laptop', 10000000,5);

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