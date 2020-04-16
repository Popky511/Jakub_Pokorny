<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


abstract class stringPokorny {

    public static function substrPokorny($slovoKterýmNahrazuji = 'pes', $slovoKterýNahrazuji = 'kočka') {
        return substr($slovoKterýNahrazuji, $slovoKterýmNahrazuji);
    }

    public static function substr_replacePokorny($slovoKterýmNahrazuji1 = 'pes', $slovoKterýNahrazuji1 = 'kočka', $začátečníBit = 0) {
        return substr_replace($slovoKterýNahrazuji1, $slovoKterýmNahrazuji1, $začátečníBit);
    }

    public static function strtrPokorny($slovoKterýmNahrazuji = 'pes', $slovoKterýNahrazuji = 'kočka', $věta = 'Přejel jsem omylem kočka') {
        return strtr($věta, $slovoKterýNahrazuji, $slovoKterýmNahrazuji);
    }

    public static function stroupperPokorny($velkéPísmeno = 'ABCDEFGHIJKLMNPQRSTUVWXYZ') {
        return strtoupper($velkéPísmeno);
    }

    public static function strtlowerPokorny($maléPísmeno = 'abcdefghijklmnopqrstuvwxyz') {
        return strtolower($maléPísmeno);
    }

    public static function strrposPokorny($bit1 = 8, $bit2 = 7) {
        return strrpos($bit1, $bit2, $offset = 0);
    }

    public static function strriposPokorny($přesněNajdi, $bit = '2B') {
        return strripos($přesněNajdi, $bit, $offset = 0);
    }

    public static function strlenPokorny($délkaŘetězce = 20) {
        return strlen($délkaŘetězce);
    }

    public static function str_replacePokorny($odstraníPísmeno = 'a', $nahradíPísmenem = 'b', $veVětě = 'Mám rád hřeaík') {
        return str_replace($odstraníPísmeno, $nahradíPísmenem, $veVětě, $count = NULL);
    }

    public static function md5Pokorny($zakódujeHeslo = 'yfuu55446hgd') {
        return md5($zakódujeHeslo);
    }

    public static function implodePokorny($čárka = ',') {
        return implode('...věděl', $čárka, 'ale...');
    }

    public static function explodePokorny($rozdělíString) {
        return explode('', $rozdělíString);
    }
    
    public static function addslashesPokorny($přidejLomeno = '/') {
        return addslashes($přidejLomeno);
    }
    
    public static function trimPokorny($vynechKusŘetězce) {
        return trim($vynechKusŘetězce);
    }
    
    public static function ucfirstPokorny ($prvníPísmenoVelké) {
    return ucfirst($prvníPísmenoVelké);
    }
    
    public static function ucwordsPokorny ($každéPrvníPísmenoVeVětěVelké): float {
        return ucwords($každéPrvníPísmenoVeVětěVelké);
       
    }

}

var_dump(substrPokorny);