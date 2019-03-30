<?
include_once 'libs/iInstrument.php';
include_once 'libs/iBand.php';
include_once 'libs/iMusician.php';

class Musician implements iMusician {

    private $name;
    private $instrument;
    private $role;

    public function __construct() {
        $this->name = '';
        $this->role = '';
        $this->instrument = array();
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name=trim($name);
    }

    public function getInstrument() {
        return $this->instrument;
    }

    public function getMusicianType() {
        return $this->role;
    }

    public function setMusicianType($role) {
        $this->role=trim($role);
    }

    public function addInstrument(iInstrument $obj) {
        if(false === array_search($obj, $this->getInstrument(), true)){
            array_push($this->instrument, $obj);
        }
        else {
            return(false);
        }
    }

    public function assingToBand(iBand $band) {
        $band->addMusician($this);       
    }
}