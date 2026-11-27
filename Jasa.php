<?php

namespace PBO\Marketplace;
require_once('./PropertyConstant.php');
use PBO\Marketplace\Product;

class Jasa{
    use Product;
    public function payment($tipe) {
        return match ($tipe) {
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            default => "Hanya Bisa Virtual Account and QRIS"
        };

    }
}