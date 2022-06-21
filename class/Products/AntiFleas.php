<?php

require_once __DIR__."/../BaseProduct.php";

class AntiFleas extends BaseProduct{
  private $weight;
  private $activePrinciple;
  private $availabilityStart;
  private $availabilityEnd;

  public function __construct($_productId,
                              $_brand,
                              $_price,
                              $_description,
                              $_animalType,
                              $_weight,
                              $_activePrinciple,
                              $_availabilityStart,
                              $_availabilityEnd){
    parent::__construct($_productId, $_brand, $_price, $_description, $_animalType);
    $this->weight = $_weight;
    $this->activePrinciple = $_activePrinciple;
    $this->availabilityStart = $_availabilityStart;
    $this->availabilityEnd = $_availabilityEnd;
  }

  // SETTERS

  public function setWeight($_weight){
    $this->weight = $_weight;
  }

  public function setActivePrinciple($_activePrinciple){
    $this->activePrinciple = $_activePrinciple;
  }

  public function setAvailabilityStart($_availabilityStart){
    $this->availabilityStart = $_availabilityStart;
  }

  public function setAvailabilityEnd($_availabilityEnd){
    $this->availabilityEnd = $_availabilityEnd;
  }

  // GETTERS

  public function getWeight(){
    return $this->weight;
  }

  public function getActivePrinciple(){
    return $this->activePrinciple;
  }

  public function getAvailabilityStart(){
    return $this->availabilityStart;
  }

  public function getAvailabilityEnd(){
    return $this->availabilityEnd;
  }
}
 ?>