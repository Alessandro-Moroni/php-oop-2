<?php


class Shop{

  public $name;
  public $price;
  public $img;
  public $categories;

  public function __construct(string $_name, float $_price, string $_img, string $_catecories){
    $this->name = $_name;
    $this->price = $_price;
    $this->img = $_img;
    $this->categories = $_catecories;
    
  }
 
  public function getName(){
    return "$this->name";
  }
  public function getPrice(){
    return "$this->price";
  }
  public function getImg(){
    return "$this->img";
  }
  public function getCategories(){
    return "$this->categories";
  }

}


?>