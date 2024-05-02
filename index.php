<?php  

require_once __DIR__ . "/Model/movie.php";

$parasite= new Movie('Parasite','2019','Bong Joon-ho',['drama','thriller','comedy'],'korean');
$worst= new Movie('The worst person in the world','2021','Joachim Trier',['drama','romance','comedy'],'norvegian');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container ">
    <h2 class="text-center">Movie List</h2>
    <div class="row">
      <ul>
        <li><?php echo $parasite->GetInfo()?>
          <ul>Genres:
            <?php foreach ($parasite->genres as $genre): ?>
            <li>
              <?php echo $genre?>
            </li>
            <?php endforeach?>
          </ul>
        </li>
        <li><?php echo $worst->GetInfo()?>
        <ul>
          Genres:
          <?php foreach($worst->genres as $genre): ?>
          <li><?php echo $genre ?></li>
          <?php endforeach?>
        </ul>
        </li>
        
      </ul>   
    </div>

  </div>
  
</body>
</html>