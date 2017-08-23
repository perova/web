<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="POST">
      <div class="">
        <input type="text" name="name" value="">
      </div>
      <div class="">
        <input type="text" name="surname" value="">
      </div>
      <div class="">
        <input type="submit" value="Send">
      </div>
      <div class="">
        <?php
          if (isset($_COOKIE["lankytojas"])){
                echo "sausianukas issaugotas.";
                  }
          ?>
      </div>
    </form>
  </body>

</html>
      <?php


    if (isset($_POST["username"]) && isset($_POST["surname"]) ){
    setcookie("lankytojas",$_POST["name"]." ".$_POST["surname"],time()+60*60*24 ,"/");# code...
  }


    echo "<a href='zinau.php'>Ieik i kita</a>";
?>
