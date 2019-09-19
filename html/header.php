<header id="indexHeader">
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


<img id="headerIcon" src="./media/pictures/MA-Icon.png"> </img>



</header>
