<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * @autor Jakub Pokorny
 * vyvtoreni class numbers a jejich 
 * statiickych funkci 
 */
//nastaveni tridy numbers
class numbersPokorny{
    //staticka fuknce round
    static public function roundPokorny($zaokrouhli) {
        return round($zaokrouhli);
        
    }
    //staticka fuknce ceil
   static public function ceilPokorny($zaokrouhlinahoru) {
       return ceil($zaokrouhlinahoru);
   }
   //staticka fuknce floor
   static public function floorPokorny($zaokrouhlidolu) {
       return floor($zaokrouhlidolu);
   }
   //staticka fuknce sqrt
   static public function sqrtPokorny($druhaodmocnina) {
       return sqrt($druhaodmocnina);
   }
   //staticka fuknce pow
   static public function powPokorny($mocnina,$mocnitel) {
       return pow($mocnina, $mocnitel);
   }
   //staticka fuknce sin
   static public function sinPokorny($uhel) {
       return sin($uhel);
   }
   //staticka fuknce cos
   static public function cosPokorny($uhel) {
       return cos($uhel);
}
//staticka fuknce tan
static public function tanPokorny($uhel) {
       return tan($uhel);
}
//staticka fuknce asin
static public function asinPokorny($zcislanauhel) {
       return asin($zcislanauhel);
   }
   //staticka fuknce acos
   static public function acosPokorny($zcislanauhel) {
       return acos($zcislanauhel);
}
//staticka fuknce atan
static public function atanPokorny($zcislanauhel) {
       return atan($zcislanauhel);
}
//staticka fuknce fmod
static public function fmodPokorny($zaklad,$delitel) {
    return fmod($zaklad, $delitel);
}
//staticka fuknce max
static public function maxPokorny($pole) {
    return max($pole);
}
//staticka fuknce min
static public function minPokorny($pole) {
    return min($pole);
}
//staticka fuknce abs
static public function absPokorny($abscislo) {
    return abs($abscislo);
}
//staticka fuknce odcitani
static public function odecitaniPokorny($a,$b) {
    return $a-$b;
}
//staticka fuknce scitani
static public function scitaniPokorny($a,$b) {
    return $a+$b;
}
//staticka fuknce deleni
static public function deleniPokorny($a,$b) {
    return $a/$b;
}
//staticka fuknce nasobeni
static public function nasobeniPokorny($a,$b) {
    return $a*$b;
}
//staticka fuknce formatovani
static public function number_formatPokorny($formatuje) {
    return number_format($formatuje);
}
}
//nadefinovani promennych
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
//vypíše informace o stringu a funkci round
var_dump(numbersPokorny::roundPokorny($zaokrouhli)); 
//vypíše informace o stringu a funkci ceil
var_dump(numbersPokorny::ceilPokorny($zaokrouhlinahoru));
//vypíše informace o stringu a funkci floor
var_dump(numbersPokorny::floorPokorny($zaokrouhlidolu));
//vypíše informace o stringu a funkci sqrt
var_dump(numbersPokorny::sqrtPokorny($druhaodmocnina));
//vypíše informace o stringu a funkci pow
var_dump(numbersPokorny::powPokorny($mocnina, $mocnitel));
//vypíše informace o stringu a funkci sininus
var_dump(numbersPokorny::sinPokorny($uhel));
//vypíše informace o stringu a funkci cosinus
var_dump(numbersPokorny::cosPokorny($uhel));
//vypíše informace o stringu a funkci tangens
var_dump(numbersPokorny::tanPokorny($uhel));
//vypíše informace o stringu a funkci asin
var_dump(numbersPokorny::asinPokorny($zcislanauhel));
//vypíše informace o stringu a funkci acos
var_dump(numbersPokorny::acosPokorny($zcislanauhel));
//vypíše informace o stringu a funkci atan
var_dump(numbersPokorny::atanPokorny($zcislanauhel));
//vypíše informace o stringu a funkci fmod
var_dump(numbersPokorny::fmodPokorny($zaklad, $delitel));
//vypíše informace o stringu a funkci max
var_dump(numbersPokorny::maxPokorny($pole));
//vypíše informace o stringu a funkci min
var_dump(numbersPokorny::minPokorny($pole));
//vypíše informace o stringu a funkci abs
var_dump(numbersPokorny::absPokorny($abscislo));
//vypíše informace o stringu a funkci odcitani
var_dump(numbersPokorny::odecitaniPokorny($a, $b));
//vypíše informace o stringu a funkci scitani
var_dump(numbersPokorny::scitaniPokorny($a, $b));
//vypíše informace o stringu a funkci deleni
var_dump(numbersPokorny::deleniPokorny($a, $b));
//vypíše informace o stringu a funkci nasobeni
var_dump(numbersPokorny::nasobeniPokorny($a, $b));
//vypíše informace o stringu a funkci number_format
var_dump(numbersPokorny::number_formatPokorny($formatuje));

?>