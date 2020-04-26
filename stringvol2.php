<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @author Jakub Pokorny
 */
class stringPokorny {
    // substr - vypise cast retezce
    static public function substrPokorny($retezec,$odkudsezacne) {
        return substr($retezec, $odkudsezacne);
}
//v retezci vlozi na prislusne misto string
static public function substr__replacePokorny($text,$cochcinahradit,$zacatek) {
   return substr_replace($text, $cochcinahradit, $zacatek);
}
//nahradi slovo v retezci
static public function strtrPokorny($veta,$conahrazuji,$cimnahrazuji) {
    return strtr($veta, $conahrazuji, $cimnahrazuji);
}
//vsechny pismena v rezezci pujdou velka
static public function strtoupperPokorny($vsechnovelke) {
    return strtoupper($vsechnovelke);
}
//vsechny pismena budou malym
static public function strtolowerPokorny($vsechnomale) {
    return strtolower($vsechnomale);
}
//v retezci najde pozadovany retezec posledni moznost
static public function strrposPokorny($odkudhledam,$cohledam) {
    return strrpos($odkudhledam, $cohledam);
}
//hleda presne zadany string v retezci
static public function strriposPokorny($odkudhledam,$presnecohledam) {
   return strripos($odkudhledam, $presnecohledam); 
}
//najde v retezci prvni shodu toho co hledam
static public function strposPokorny($odkudhledam,$cohledam) {
    return strpos($odkudhledam, $cohledam);
}
//vypise delku retezce
static public function strlenPokorny($reknidelku) {
    return strlen($reknidelku);
}
//najde co hledam
static public function strchrPokorny($odkudhledam,$cohledam) {
    return strchr($odkudhledam, $cohledam);
}
// vyjme/nahradi proměné v poli
static public function str_replace($samohlasky,$vtomhlerozmezi,$here) {
   return str_replace($samohlasky, $vtomhlerozmezi, $here);
}
// zasifruje slovo
static public function md5Pokorny($zprava) {
    return md5($zprava);
}
//vlozi do pole neco
static public function implodePokkorny($co,$kam) {
    return implode($co, $kam);
}
//rozdeli na substringy
static public function explodePokorny($hranice,$stringveta) {
    return explode($hranice, $stringveta);
}
//pridaslash pred charaktery
static public function addcslashesPokorny($vtomhleretezci,$rozmezi) {
    return addcslashes($vtomhleretezci, $rozmezi);
}
//vlozi backslah do vety
static public function addslashPokorny($stringveta) {
    return addslashes($stringveta);
}
// odebere nevhodne vei z retezce
static public function trimPpokorny($odsud,$topryc) {
    return trim($odsud, $topryc);
}
//prvni pismeno ve vete velke
static public function ucfirstPokorny($veta) {
    return ucfirst($veta);
}
//vsechny slova zacnou velkym pismenem
static public function ucwordsPokorny($veta) {
    return ucwords($veta);
}

}
$retezec = "sdvkjbsvjsbaflsdvkj";
$odkudsezacne =5;
$text="Petr chtel domu, ale srazilo ho auto";
$cochcinahradit="ryhle";
$zacatek= 10;
$veta="normalni opice zerou maso";
$conahrazuji ="opice";
$cimnahrazuji="lide";
$vsechnovelke="pepa rad hraje fotbal";
$vsechnomale="TOMAS RAD PIJE PIVO";
$odkudhledam ="1A23s456d789s";
$cohledam= "1a2";
$presnecohledam="a23S";
$reknidelku= "Uz me nebavi sedet porad za kompem, chci hrat fotbal";
$samohlasky= array ('a','e','i','o','u','y');
$vtomhlerozmezi="";
$here="To je ale krasny den asi pujdu behat";
$zprava= "mango";
$co=",";
$kam= array ('orientace','pohlavi','narodnost','nabozenstvi');
$hranice = '""';
$stringveta="opice simpanz orangutan";
$vtomhleretezci="Ahoj ja jsem Jakub";
$rozmezi= 'A..z';
$odsud="\a\aAhoj svete tady Odocaki\a\a";
$topryc="\a";

var_dump(stringPokorny::substrPokorny($retezec, $odkudsezacne));
var_dump(stringPokorny::substr__replacePokorny($text, $cochcinahradit, $zacatek));
var_dump(stringPokorny::strtrPokorny($veta, $conahrazuji, $cimnahrazuji));
var_dump(stringPokorny::strtoupperPokorny($vsechnovelke));
var_dump(stringPokorny::strtolowerPokorny($vsechnomale));
var_dump(stringPokorny::strrposPokorny($odkudhledam, $cohledam));
var_dump(stringPokorny::strriposPokorny($odkudhledam, $presnecohledam));
var_dump(stringPokorny::strposPokorny($odkudhledam, $cohledam));
var_dump(stringPokorny::strlenPokorny($reknidelku));
var_dump(stringPokorny::strchrPokorny($odkudhledam, $cohledam));
var_dump(stringPokorny::str_replace($samohlasky, $vtomhlerozmezi, $here));
var_dump(stringPokorny::md5Pokorny($zprava));
var_dump(stringPokorny::implodePokkorny($co, $kam));
var_dump(stringPokorny::explodePokorny($hranice, $stringveta));
var_dump(stringPokorny::addcslashesPokorny($vtomhleretezci, $rozmezi));
var_dump(stringPokorny::addslashPokorny($stringveta));
var_dump(stringPokorny::trimPpokorny($odsud, $topryc));
var_dump(stringPokorny::ucfirstPokorny($veta));
var_dump(stringPokorny::ucwordsPokorny($veta));




?>

