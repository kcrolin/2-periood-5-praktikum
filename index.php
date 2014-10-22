<?php
require('validation.php');
?>

<!DOCTYPE HTML>
<html>
  <head>
  <title>Praktikum 5</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  </head>
  
  <body>
  <div class="content">
<?php
  if ($isSubmitted) {
    echo '<div class="form-message">' . $usernameMessage . '</div>';
  }
?>
<p>
<form name="login" action="index.php" method="post">
<span>Kasutajanimi:</span> <input type="text" name="username"><br>
<span>Salasõna:</span> <input type="password" class="passw" name="password"></br>
<input type="submit" name="submit">
</form> 
</div>
   </body>
</html>
