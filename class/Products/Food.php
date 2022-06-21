<?php

require_once __DIR__."/../BaseProduct.php";

class Food extends BaseProduct{
  private $kCals;
  private $flavour;

  public function __construct($_productId,
                              $_brand,
                              $_price,
                              $_description,
                              $_animalType,
                              $_kCals,
                              $_flavour){
    parent::__construct($_productId, $_brand, $_price, $_description, $_animalType);
    $this->kCals = $_kCals;
    $this->flavour = $_flavour;
  }

  // SETTERS

  public function setKCals($_kCals){
    $this->kCals = $_kCals;
  }

  public function setFlavour($_flavour){
    $this->flavour = $_flavour;
  }

  // GETTERS

  public function getKCals(){
    return $this->kCals;
  }

  public function getFlavour(){
    return $this->flavour;
  }
}
 ?>