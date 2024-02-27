<?php 
  $fruits = [ 
    ["number" => 1, 
    "name" => "kiwi", 
    "color" => "hijau", 
    "stock" => 15, 
    "price" => 17000, 
    "description" => "buah asam berwarna hijau"], 
    ["number" => 2, 
    "name" => "naga", 
    "color" => "ungu", 
    "stock" => 20, 
    "price" => 20000, 
    "description" => "buah manis berwarna ungu"], 
    ["number" => 3, 
    "name" => "mangga", 
    "color" => "oren", 
    "stock" => 12, 
    "price" => 15000, 
    "description" => "buah manis berwarna oren"], 
    ["number" => 4, 
    "name" => "manggis", 
    "color" => "putih", 
    "stock" => 25, 
    "price" => 10000, 
    "description" => "buah manis berwarna putih"], 
    ["number" => 5, 
    "name" => "rambutan", 
    "color" => "putih", 
    "stock" => 12, 
    "price" => 32000, 
    "description" => "buah manis berwarna putih"] 
  ]; 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
  <title>Array Table Buah</title> 
</head> 
<body> 
  <div class="container"> 
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1> 
    <table class="text-center table table-striped table-hover"> 
      <thead class="thead-dark"> 
        <tr> 
          <th>NO</th> 
          <th>Nama</th> 
          <th>Warna</th> 
          <th>Stok</th> 
          <th>Harga</th> 
          <th>Deskripsi</th> 
        </tr> 
      </thead> 
 
      <tbody class=text-center> 
        <?php 
        foreach($fruits as $fruit) { 
            echo '<td>'. $fruit["number"].'</td>'; 
            echo '<td>'. $fruit["name"].'</td>'; 
            echo '<td>'. $fruit["color"].'</td>'; 
            echo '<td>'. $fruit["stock"].'</td>'; 
            echo '<td>'. $fruit["price"].'</td>'; 
            echo '<td>'. $fruit["description"].'</td>'; 
            echo '<tr>'; 
        } 
        ?> 
      </tbody> 
    </table> 
  </div> 
</body> 
</html>
