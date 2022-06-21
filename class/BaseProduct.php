<?php

class BaseProduct{
  protected $productId;
  protected $brand;
  protected $price;
  protected $description;
  protected $animalType;

  public function __construct($_productId,
                              $_brand,
                              $_price,
                              $_description,
                              $_animalType){
    $this->productId = $_productId;
    $this->brand = $_brand;
    $this->price = $_price;
    $this->description = $_description;
    $this->animalType = $_animalType;
  }

  // SETTERS

  public function setProductId($_productId){
    $this->productId = $_productId;
  }

  public function setPrice($_brand){
    $this->brand = $_brand;
  }

  public function setDiscountedPrice($_discount){
    $this->price -= ($_discount/100)*$this->price;
  }

  public function setDescription($_description){
    $this->description = $_description;
  }

  public function setAnimalType($_animalType){
    $this->animalType = $_animalType;
  }

  // GETTERS

  public function getProductId(){
    return $this->productId;
  }

  public function getBrand(){
    return $this->brand;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getDiscount($_discount){
    return ($_discount/100)*$this->price;
  }

  public function getDescription(){
    return $this->description;
  }

  public function getAnimalType(){
    return $this->animalType;
  }
}
 ?>