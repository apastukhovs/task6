<?
include_once 'libs/iInstrument.php';
include_once 'libs/iBand.php';

  interface iMusician
  {
      public function addInstrument(iInstrument $obj);
      public function getInstrument();
      public function assingToBand(iBand $nameBand);
      public function getMusicianType();
  }
