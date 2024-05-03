<?php 

class Food extends Shop {

  public $ingredients;

  function __construct(string $_name, float $_price, string $_img, string $_catecories, string $_ingredients)
  {
    parent::__construct( $_name, $_price, $_img, $_catecories);

    $this->ingredients = $_ingredients;
  }

  public function getIngredients(){
    return "$this->ingredients";
  }

}

?>