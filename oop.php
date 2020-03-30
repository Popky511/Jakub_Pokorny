<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//abstraktní trida ustredny a v ni protected $napetí
abstract class  ustredny_Pokorny_Jakub{
    
    protected $napeti_Pokorny_Jakub;
    //nastavení napeti
    public function setNapeti_Pokorny_Jakub($napeti_Pokorny_Jakub){
        $this->napeti_Pokorny_Jakub = $napeti_Pokorny_Jakub;
    }
    //precteni napeti
    public function getNapeti_Pokorny_Jakub() {
        return $this-> napeti_Pokorny_Jakub;
    }
}
// class ustredna se dedi do abs. class ustredny
class  ustredna_Pokorny_Jakub extends ustredny_Pokorny_Jakub{
   public $Napeti_Pokorny_Jakub= 15;
   //nastaveni konstanty type
   const TYPE ="12";
}
//class iustredna dedi interface od abs. class ustredny
interface iustredna_Pokorny_Jakub extends ustredny_Pokorny_Jakub{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Pokorny_Jakub);
}

//pres vardummp vypise hodnotu v type a hodnotu napeti na ustredne
 var_dump (ustredna_Pokorny_Jakub::TYPE);
 var_dump ($Napeti_Pokorny_Jakub);
?> 