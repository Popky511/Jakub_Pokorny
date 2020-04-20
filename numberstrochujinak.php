<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class numbersPokorny{
    static public function roundPokorny($zaokrouhli) {
        return round($zaokrouhli);
        
    }
   static public function ceilPokorny($zaokrouhlinahoru) {
       return ceil($zaokrouhlinahoru);
   }
   static public function floorPokorny($zaokrouhlidolu) {
       return floor($zaokrouhlidolu);
   }
   static public function sqrtPokorny($druhaodmocnina) {
       return sqrt($druhaodmocnina);
   }
   static public function powPokorny($mocnina,$mocnitel) {
       return pow($mocnina, $mocnitel);
   }
   static public function sinPokorny($uhel) {
       return sin($uhel);
   }
   static public function cosPokorny($uhel) {
       return cos($uhel);
}
static public function tanPokorny($uhel) {
       return tan($uhel);
}
static public function asinPokorny($zcislanauhel) {
       return asin($zcislanauhel);
   }
   static public function acosPokorny($zcislanauhel) {
       return acos($zcislanauhel);
}
static public function atanPokorny($zcislanauhel) {
       return atan($zcislanauhel);
}
static public function fmodPokorny($zaklad,$delitel) {
    return fmod($zaklad, $delitel);
}
static public function maxPokorny($pole) {
    return max($pole);
}
static public function minPokorny($pole) {
    return min($pole);
}
static public function absPokorny($abscislo) {
    return abs($abscislo);
}
static public function odecitaniPokorny($a,$b) {
    return $a-$b;
}
static public function scitaniPokorny($a,$b) {
    return $a+$b;
}
static public function deleniPokorny($a,$b) {
    return $a/$b;
}
static public function nasobeniPokorny($a,$b) {
    return $a*$b;
}
static public function number_formatPokorny($formatuje) {
    return number_format($formatuje);
}
}
$zaokrouhli = 3.55;
$zaokrouhlinahoru = 7.55;
$zaokrouhlidolu = 6.75;
$druhaodmocnina = 4;
$mocnina = 5;
$mocnitel = 2;
$uhel = 45;
$zcislanauhel = 50;
$zaklad = 15 ;
$delitel = 3;
$pole  = array ('1','2','3','4','5','12','16','25','69');
$abscislo = 57.12;
$a = 8;
$b = 2;
$formatuje = 10;
var_dump(numbersPokorny::roundPokorny($zaokrouhli)); 
var_dump(numbersPokorny::ceilPokorny($zaokrouhlinahoru));
var_dump(numbersPokorny::floorPokorny($zaokrouhlidolu));
var_dump(numbersPokorny::sqrtPokorny($druhaodmocnina));
var_dump(numbersPokorny::powPokorny($mocnina, $mocnitel));
var_dump(numbersPokorny::sinPokorny($uhel));
var_dump(numbersPokorny::cosPokorny($uhel));
var_dump(numbersPokorny::tanPokorny($uhel));
var_dump(numbersPokorny::asinPokorny($zcislanauhel));
var_dump(numbersPokorny::acosPokorny($zcislanauhel));
var_dump(numbersPokorny::atanPokorny($zcislanauhel));
var_dump(numbersPokorny::fmodPokorny($zaklad, $delitel));
var_dump(numbersPokorny::maxPokorny($pole));
var_dump(numbersPokorny::minPokorny($pole));
var_dump(numbersPokorny::absPokorny($abscislo));
var_dump(numbersPokorny::odecitaniPokorny($a, $b));
var_dump(numbersPokorny::scitaniPokorny($a, $b));
var_dump(numbersPokorny::deleniPokorny($a, $b));
var_dump(numbersPokorny::nasobeniPokorny($a, $b));
var_dump(numbersPokorny::number_formatPokorny($formatuje));

// * floor ($mensi)
 //* sqrt(2odmocnina)
 //* pow(cislo, mocnina)
 //* sin(cislo), cos(cislo), tan(cislo)
 //* asin(cislo), acos(cislo), atan(cislo)
// * fmod(základ, dělitel) //vrátí zbytek
// * max(pole), min(pole) // vrátí maximální a minimální hodnotu pole zadaného v parametru.
// * abs(cislo) //absolutní hodnota zadaného čísla
 //* odečítání
// * sčítání
// * dělení
// * násobení
// * number format
?>
