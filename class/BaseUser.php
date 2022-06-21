<?php

class BaseUser{
  protected $userId;
  protected $name;
  protected $surname;
  protected $fullName;
  protected $discount;
  protected $isCCactive;

  public function __construct($_userId,
                              $_name,
                              $_surname,
                              $_isCCactive){
    $this->userId = $_userId;
    $this->name = $_name;
    $this->surname = $_surname;
    $this->setFullName();
    $this->setDiscount();
    $this->isCCactive = $_isCCactive;
  }

  // SETTERS

  public function setUserId($_userId){
    $this->userId = $_userId;
  }

  public function setName($_name){
    $this->name = $_name;
    $this->setFullName();
  }

  public function setSurname($_surname){
    $this->surname = $_surname;
    $this->setFullName();
  }

  private function setFullName(){
    $this->fullName = $this->name." ".$this->surname;
  }

  private function setDiscount(){
    $this->discount = 0;
  }

  public function setIsCCactive($_isCCactive){
    $this->isCCactive = $_isCCactive;
  }

  // GETTERS

  public function getUserId(){
    return $this->userId;
  }

  public function getName(){
    return $this->name;
  }

  public function getSurname(){
    return $this->surname;
  }

  public function getFullName(){
    return $this->fullName;
  }

  public function getDiscount(){
    return $this->discount;
  }

  public function getIsCCactive(){
    return $this->isCCactive;
  }
}
 ?>