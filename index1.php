

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<?php
abstract class StringsJakubPokorny {
    protected static function substrJakubPokorny($points){
    define($points, 'paddesat'); 
    }
    protected static function substr_replaceJakubPokorny($nahrada){
    define($nahrada, 'zzzzzz'); 
    }
    protected static function strtrJakubPokorny($oprava){
    define($oprava, 'AHOJ svete tady php'); 
    }
    protected static function strtoupperJakubPokorny($velkepismo){
    define($velkepismo, 'ja nejecim'); 
    }
    protected static function strtolowerJakubPokorny($malepismo){
    define($malepismo, 'AHOJ ja jsem Kuba'); 
    }
    protected static function strrposJakubPokorny($urcizdaje){
    define($urcizdaje, '213465897xcjhewtpaegylkm'); 
    }
    protected static function strriposJakubPokorny($presnenajdi){
    define($presnenajdi, 'A51A23B'); 
    }
    protected static function strposJakubPokorny($najdi){
    define($points, 'paddesat'); 
    }
    protected static function strlenJakubPokorny ($pocet){
    define($pocet, 'ASDFRKAJD'); 
    }
    protected static function strchrJakubPokorny (); //same jak strstr 
    
    protected static function str_replaceJakubPokorny ($smazepismena){
    define($smazepismena, array('a','e','i','o','u')); 
    }
    protected static function md5JakubPokorny($kodujeheslo){
    define($kodujeheslo, 'banan'); 
    }
    protected static function implodeJakubPokorny($vlozicarku){
    define($vlozicarku, array('jmeno','prijmeni','email')); 
    }
    protected static function explodeJakubPokorny($rozrhnestring){
    define($rozrhnestring, 'Ahoj Cau Adios'); 
    }
    protected static function addcslashesJakubPokorny($vypiseoddo){
    define($vypiseoddo, '1,2,3,4,5,6,7,8,9,10'); 
    }
    protected static function addslashesJakubPokorny($vlozilomeno){
    define($vlozilomeno, 'MC´Donald'); 
    }
    protected static function trimJakubPokorny($vynechcast){
    define($vynechcast, '\h\hzed je op\h\h'); 
    }
    protected static function ucfirstJakubPokorny($prvnivelke){
    define($prvnivelke, 'honza a jakub'); 
    }
    protected static function ucwordsJakubPokorny($kazdeprvnivelke){
    define($kazdeprvnivelke, 'jan a jakub'); 
    }
}
class SringJakubPokorny extends StringsJakubPokorny{
    //nahradi sttring jinym stringem
    public static function substrJakubPokorny() {
        parent::substrJakubPokorny();
        return substr($points, null);
    }
    //nahradi dany vyraz od urcenego bitu
    public function substr_replaceJakubPokorny($nahrada) {
        return substr_replace($nahrada, 'aaaa', 0);
        }

   //zmeni urcene slovo na jine
    public function strtrJakubPokorny($oprava) {
       return  strtr($oprava, 'AHOJ', 'ZDAR');
    }
    //zmeni ve vete vsechno na velka pismena
    public function strtoupperJakubPokorny($velkepismo) {
       return  strtoupper($velkepismo);
    }
    //zmeni ve vete vsechno na mala pismena
    public function strtolowerJakubPokorny($malepismo) {
       return  strtolower($malepismo);
    }
    //urci zda je 6 od 5bitu dal
    public function strrposJakubPokorny($urcizdaje) {
       return  strrpos($urcizdaje, '6',5);
    }
    //najde zda takova kombinace v rezeci je
    public function strriposJakubPokorny($presnenajdi) {
       return  strripos($presnenajdi, '2B', 0);
    }
    //rekne jak dlouhy je retezec
    public function strlenJakubPokorny($pocet) {
        return strlen($pocet);
    }
    //smaze pismena vbrana v retezci
    public function str_replaceJakubPokorny($smazepismena) {
       return  str_replace($smazepismena, '', 'ahoj kamaradi jsu tu spravne z Brna?');
    }
    //koduje heslo
    public function md5JakubPokorny($kodujeheslo) {
       return  md5($kodujeheslo, '555dsd55sdgvfv4e');
    }
    // vlozi element z array element do stringu
    public function implodeJakubPokorny($vlozicarku) {
       return  implode(',', $vlozicarku);
    }
    //rozlozi string na jednotlive stringy
    public function explodeJakubPokorny($roztrhnestring) {
       return  explode('', $roztrhnestring);
    }
    //vypise retezec od do
    public function addcslashesJakubPokorny($vypiseoddo) {
        return addcslashes($vypiseoddo, '\1...\7');
    }
    // vloží lomeno
    public function addslashesJakubPokorny($vlozilomenno) {
       return  addslashes($vlozilomenno);
    }
    //vyjme cast retezce a zbytek promitne
    public function trimJakubPokorny($vynechcast) {
       return  trim($vynechcast, '\h.');
    }
    //  první pismeno v celém retezci bude velke
    public function ucfirstJakubPokorny($prvnivelke) {
        return ucfirst($prvnivelke);
    }
    //kazde prvni pismeno v kazdem slove velke
    public function ucwordsJakubPokorny($kazdeprvnivelke) {
       return ucwords($kazdeprvnivelke);
    }
   }
echo 'StringsJakubPokorny';
var_dump(StringJakubPokorny::substrJakubPokorny(points));
?>
