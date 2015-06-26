<?php

require_once('database.php');

if(!empty($_GET['id'])){
  $film_id = $_GET['id'];
}

try {
  $results = $db->query('SELECT * FROM Film WHERE film_id =' . $film_id);
} catch(Exception $e){
  echo $e->getMessage();
  die();
}

$film = $results->fetch(PDO::FETCH_ASSOC);
 

?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <title>PHP Data Objects</title>
  <link rel="stylesheet" href="style.css">

</head>

<body id="home">

  <h1>Sakila Sample Database</h1>

  <h2><?php echo $film['title'] ?></h2>
  
  <p><?php echo $film['description'] ?></p>



</body>

</html>

