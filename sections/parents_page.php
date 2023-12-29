<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['parent_name'])){
   header('location:login_page.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Parents Dashboard</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Salut <span>Parents</span></h3>
      <h1>Bienvenue <span><?php echo $_SESSION['parent_name'] ?></span></h1>
      <p>Ceci est le centre des Parents</p>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>