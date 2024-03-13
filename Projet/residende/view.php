<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données entrée</title>
      <!-- Bootstrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<nav class="navbar navbar-ligth justify-content-center fs-3 mb-5" style="background-color: #FFFAE1;" >Liste des messages envoyés</nav>

<div class="container ">
    <a href="index.php" class="btn btn-dark mb-3">Allez sur le site web</a>
    <table class="table table-hover text-center table table-bordered">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Emil</th>
      <th scope="col">Commentaire</th>
    </tr>
  </thead>
  <tbody>
    
    <?php 
    include "connect.php";
    $sql= "SELECT * FROM `presence`";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        ?>

<tr>
      <td> <?php echo $row['id']?></td>
      <td> <?php echo $row['nom']?></td>
      <td> <?php echo $row['email']?></td>
      <td> <?php echo $row['text']?></td>
    </tr>
    
        <?php
    }
    ?>
  </tbody>
</table>
  </div>
</body>
</html>