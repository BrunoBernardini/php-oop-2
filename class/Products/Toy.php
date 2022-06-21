<?php

require_once __DIR__."/../BaseProduct.php";

class Toy extends BaseProduct{
  private $material;
  private $size;

  public function __construct($_productId,
                              $_brand,
                              $_price,
                              $_description,
                              $_animalType,
                              $_material,
                              $_size){
    parent::__construct($_productId, $_brand, $_price, $_description, $_animalType);
    $this->material = $_material;
    $this->size = $_size;
  }

  // SETTERS

  public function setMaterial($_material){
    $this->material = $_material;
  }

  public function setSize($_size){
    $this->size = $_size;
  }

  // GETTERS

  public function getMaterial(){
    return $this->material;
  }

  public function getSize(){
    return $this->size;
  }
}
 ?>