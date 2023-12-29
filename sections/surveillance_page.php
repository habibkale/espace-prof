<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['direction_name'])){
   header('location:login_page.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Direction Dashboard</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Salut <span>Emloyées</span></h3>
      <h1>Bienvenue <span><?php echo $_SESSION['direction_name'] ?></span></h1>
      <p>Ceci est le centre des Employées</p>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>