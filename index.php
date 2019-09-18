<!--
Version 0.0.1
-->

<!--
This site is made by Eskil Brännerud aka Foxmaner.
It was created as a schoolproject for my secondary work.
Github: https://github.com/Foxmaner
Gmail: eskil.brann@gmail.com
-->
<?php
require 'html/top.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Masterarms GreenieBoard</title>
    <link rel="stylesheet" type="text/css" href="style/indexStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/indexScript.js"></script>


    <script>
        function startLog() {
          console.log(`%c ________________________________________
          < mooooooooooooooooooooooooooooooooooooo >
           ----------------------------------------
                  \\   ^__^
                   \\  (oo)\\_______
                      (__)\\       )\\/\\
                          ||----w |
                          ||     ||`, "font-family:monospace")
        }
    </script>


  </head>
  <body>
    <noscript id="noscript">Sorry, your browser does not support JavaScript!</noscript>
    <button id="toggleLoginBtn">Login</button>

      <?php
      require 'html/loginPage.php';
      if (isset($_SESSION["isLoggedIn"])) {
        if ($_SESSION["isLoggedIn"]==true) {
          require 'html/masterPage.php';
        }else{
          require 'html/homePage.php';
        }
      }else{
        require 'html/homePage.php';
      }


      ?>

  </body>
</html>
