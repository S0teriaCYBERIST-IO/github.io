<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Final Project</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet"> 
  </head>

<body><center>

<header><center>
  
  <img src="deal.jpg" width="100%" height="1000">

</header>

<main id="account"><center>

<h2>
<?php

    $db=new PDO('mysql:host=mysql1-p2.ezhostingserver.com; dbname=citdemo','citelms','CIT4ever!');

    $stmt=$db->prepare("SELECT password FROM raulpokerfinal WHERE email=:email");

    $stmt->bindParam(':email',$_POST['email']);

    $stmt->execute();

    while($row=$stmt->fetch())
      {
        $password=$row["password"];
        print("Your Password is: $password.<br>");
      }
   
?>
</h2>

</main>
  
<footer><center>
  
  <img src="deck.jpg" width="100%" height="1000">

</footer>

</body>