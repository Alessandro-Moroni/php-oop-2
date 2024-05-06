<?php


class Shop{

  public $name;
  private $price;
  private $img;
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
    if(!is_numeric($this->price)){
      throw new Exception('Il prezzo deve essere un numero');
    };
    return "$this->price";
  }
  public function getImg(){
    if(empty($this->img)){
      throw new Exception('Immagine non presente');
    }
    return "$this->img";
  }
  public function getCategories(){
    return "$this->categories";
  }

}


?>