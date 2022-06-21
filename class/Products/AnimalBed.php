<?php

require_once __DIR__."/../BaseProduct.php";

class AnimalBed extends BaseProduct{
  private $size;
  private $type;

  public function __construct($_productId,
                              $_brand,
                              $_price,
                              $_description,
                              $_animalType,
                              $_size,
                              $_type){
    parent::__construct($_productId, $_brand, $_price, $_description, $_animalType);
    $this->size = $_size;
    $this->type = $_type;
  }

  // SETTERS

  public function setSize($_size){
    $this->size = $_size;
  }

  public function setType($_type){
    $this->type = $_type;
  }

  // GETTERS

  public function getSize(){
    return $this->size;
  }

  public function getType(){
    return $this->type;
  }
}
 ?>