<?php

//Klasse Song
class Song{
    //staic array aller vergebenen ids
    static private $ids = [];

    //Variablen
    private $id;
    private $name;
    private $artist;
    private $trackNr;
    private $duration;

    function __construct($name, $artist, $trackNr, $duration){
        $this->id = count(self::$ids);  //ID wird mithilfe der schon vergebenen IDs vergeben   
        
        //Kontrolliert ob die ID schon vergeben ist wenn ja dann wird das Object nicht erstellt
        if (in_array($this->id, self::$ids)) {
            throw new Exception("Object with id $this->id already constructed");
        }     
                                                           
        self::$ids[] = $this->id; //Added die ID ins Array

        //Deklaration blah blah 
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNr = $trackNr;
        $this->duration = $duration;
    }

    public function __toString() {
        return "    {$this->name} from {$this->artist} | Tracknummer: {$this->trackNr} Dauer: {$this->duration} min \n";
    }

    function getAllIds(){
        return implode(" ", self::$ids);
    }

    function getId(){
        return $this->id;
    }
}

//Klasse OST
class OST{
    //staic array aller vergebenen ids
    static private $ids = [];

    //Variablen
    private $id;
    private $name;
    private $videoGameName;
    private $releaseDate;
    private $songList;

    function __construct($name, $videoGameName, $releaseDate, $songList){
        $this->id = count(self::$ids);  //ID wird mithilfe der schon vergebenen IDs vergeben   
        
        //Kontrolliert ob die ID schon vergeben ist wenn ja dann wird das Object nicht erstellt wenn nicht dann exeption
        if (in_array($this->id, self::$ids)) {
            throw new Exception("Object with id $this->id already constructed");
        }     
                                                           
        self::$ids[] = $this->id; //Added die ID ins Array

        //Deklaration blah blah 
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseDate = $releaseDate;
        $this->songList = $songList;
    }

    public function __toString() {
        return "{$this->name} from {$this->videoGameName} | Release Date: {$this->releaseDate} \n Song Liste: \n{$this->getSongList()}\n";
    }

    function getRawList(){
        return $this->songList;
    }
    function getSongList(){
        return implode("", $this->songList);
    }

    function getAllIds(){
        return implode(" ", self::$ids);
    }

    function getId(){
        return $this->id;
    }
}

?>
