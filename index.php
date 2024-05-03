<?php
require_once __DIR__ . '/Model/Shop.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/data/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
<div class="container my-5">

  <h2 class="text-center mb-3">Food</h2>
  <div class="row row-cols-3">
    <?php foreach($foods as $food): ?>
      <div class="col">

        <div class="card" style="width: 18rem;">
          <img src="<?php echo $food->getImg() ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title"><?php echo $food->getName() ?></h3>
            <p class="card-text">Cibo per: <?php echo $food->getCategories() ?></p>
            <p class="card-text">Ingredienti: <?php echo $food->getIngredients() ?></p>
            <p class="card-text">Prezzo: &euro;<?php echo $food->getPrice() ?></p>
            
          </div>
        </div>

      </div>
    <?php endforeach ?>
  </div>
  
</div>

<div class="container my-5">

  <h2 class="text-center mb-3">Toys</h2>
  <div class="row row-cols-3">
    <?php foreach($toys as $toy): ?>
      <div class="col">

        <div class="card" style="width: 18rem;">
          <img src="<?php echo $toy->getImg() ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title"><?php echo $toy->getName() ?></h3>
            <p class="card-text">Cibo per: <?php echo $toy->getCategories() ?></p>
            <p class="card-text">Ingredienti: <?php echo $toy->getMaterials() ?></p>
            <p class="card-text">Prezzo: &euro;<?php echo $toy->getPrice() ?></p>
            
          </div>
        </div>

      </div>
    <?php endforeach ?>
  </div>
  
</div>

</body>
</html>