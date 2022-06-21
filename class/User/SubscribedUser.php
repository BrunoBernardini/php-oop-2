<?php

require_once __DIR__."/../BaseUser.php";

class SubscribedUser extends BaseUser{
  private $email;
  private $password;

  public function __construct($_userId,
                              $_name,
                              $_surname,
                              $_isCCactive,
                              $_email,
                              $_password){
    parent::__construct($_userId, $_name, $_surname, $_isCCactive);
    $this->email = $_email;
    $this->password = $_password;
  }

  // SETTERS

  public function setEmail($_email){
    $this->email = $_email;
  }

  public function setPassword($_password){
    $this->password = $_password;
  }

  public function setDiscount(){
    $this->discount = 20;
  }

  // GETTERS

  public function getEmail(){
    return $this->email;
  }

  public function getPassword(){
    return $this->password;
  }
}
 ?>