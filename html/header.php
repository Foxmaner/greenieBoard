<header id="indexHeader" class="col-s-12 col-12">
<?php


  if (isset($_SESSION["isLoggedIn"])) {
    if ($_SESSION["isLoggedIn"]==true) {

    }else{
      echo "<button id='toggleLoginBtn'>Login</button>";
    }
  }else{
    echo "<button id='toggleLoginBtn'>Login</button>";
  }
  ?>


<img id="headerIcon" class="col-s-3 col-3" src="./media/pictures/MA-Icon.png"> </img>



</header>
