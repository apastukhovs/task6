<?php
include_once 'libs/Band.php';
include_once 'libs/Instrument.php';
include_once 'libs/Musician.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

$results = array();

$drum = new Instrument();
$drum->setName('Drums');
$drum->setCategory('Drumming');

$guitar = new Instrument();
$guitar->setName('Guitar');
$guitar->setCategory('Folk');

$piano = new Instrument();
$piano->setName('Piano');
$piano->setCategory('Keyboard');


$electroGuitar = new Instrument();
$electroGuitar->setName('Electo Guitar');
$electroGuitar->setCategory('Folk');

$bassGuitar = new Instrument();
$bassGuitar->setName('Bass Guitar');
$bassGuitar->setCategory('Folk');


//-Band-//

$band = new Band();
$band->setName('Nirvana');
$band->setGenre('Grunge');
//--FrontMan--//
$music = new Musician();
$music->setName('Kurt Cobaine');
$music->setMusicianType('Front Man songwriter'); 
$music->addInstrument($electroGuitar);
$music->assingToBand($band);
//--Guitar--//
$music = new Musician();
$music->setName('Krist Novoselic');
$music->setMusicianType('Musician');    
$music->addInstrument($bassGuitar);
$music->assingToBand($band);
//-Drummer--// 
$music = new Musician();
$music->setName('Dave Grohl');
$music->setMusicianType('Musician');    
$music->addInstrument($drum);
$music->assingToBand($band);
     
array_push($results, $band);
//-Band2-//
 $band = new Band();
 $band->setName('Kiss');
 $band->setGenre('Rock');
 $music = new Musician();
 //--FrontMan--//
 $music->setName('Paul Stanley');
 $music->setMusicianType('Front man, bass guitar');   
 $music->addInstrument($bassGuitar);
 $music->assingToBand($band);
 //--Guitar--//
 $music = new Musician();
 $music->setName('Gene Simmons');
 $music->setMusicianType('Musician, songwriter');    
 $music->addInstrument($bassGuitar);
 $music->assingToBand($band);
 //--Guitar--//
 $music = new Musician();
 $music->setName('Tommy Thayer');
 $music->setMusicianType('Musician, songwriter');    
 $music->addInstrument($electroGuitar);
 $music->assingToBand($band);
 array_push($results, $band);


 include_once 'template/index.php';
 ?>