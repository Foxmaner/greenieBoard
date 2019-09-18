

<div id="loginBackground"></div>
<div id="wrapperLogin" class="wrapper">

    <div id="loginTitleIcon"></div>
    <h1 class="title">GreenieBoard</h1>

    <form id="loginForm" method="post" action="">
      <input id="inputPassword" type="password" placeholder="Lösenord" name="passwordData">
      <br>
        <!-- <a href="lool.php" class="col-s-12 col-12">Glömt lösenord?</a>-->
      <br>
      <input id="submitLogin" class="col-s-12 col-12" type="submit" value="Logga in">
    </form>



      <?php
      if (isset($_SESSION["error"])) {
        // code...
        // code...

        echo "<script> alertify.error('Misslyckat: " . $_SESSION["error"] . "'); </script>";
        unset($_SESSION["error"]);
        echo "</p>";
      }
       ?>

  </div>
