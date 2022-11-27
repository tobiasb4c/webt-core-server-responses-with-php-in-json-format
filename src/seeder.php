<?php
require './class.php';
//Klasse Seeder zum demonstrieren
class Seeder{
    private $ost1;
    private $ost2;
    private $ost3;
    function __construct($ost1, $ost2, $ost3){#
        //Schaut das die Listen mindestens 4 trecks lang sind
        if(count($ost1->getRawList()) < 4){
            throw new Exception("list1 is to short");
        }
        if(count($ost2->getRawList()) < 4){
            throw new Exception("list2 is to short");
        }
        if(count($ost3->getRawList()) < 4){
            throw new Exception("list3 is to short");
        }

        //Deklarieren
        $this->ost1 = $ost1;
        $this->ost2 = $ost2;
        $this->ost3 = $ost3;
    }

    //To string ruft methode returnData Auff
    public function __toString() {
        return $this->returnData();
    }

    //Returns data
    function returnData(){
        return "OST1: {$this->ost1}\n OST2: {$this->ost2}\n OST3: {$this->ost3}\n";
    }
}

?>