<?php

class Toy extends Shop {

  public $materials;

  function __construct(string $_name, float $_price, string $_img, string $_catecories, string $_materials)
  {
    parent::__construct( $_name, $_price, $_img, $_catecories);

    $this->materials = $_materials;
  }

  public function getMaterials(){
    return "$this->materials";
  }

}

?>