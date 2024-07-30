<?php 
  $realUser = "user";
  $realPass = "1234";

  if( isset($_POST["username"]) && isset($_POST["password"])) {
    // Do I have the username and passwords set?
    // If yes, check their validity.
    
    if( $_POST["username"] === $realUser && $_POST["password"] === $realPass ) {
      // Credentials are correct so let's redirect our user to the home page
      // The "Location" header tells the browser exactly this: to change the location of the page to a new one
      
      header("Location: ./about.html");
    } else { 
      // Oups, credentials are wrong so let's redirect the user back to the login page
      
      header("Location: ./index.html");
    }
 } else {
    // If not, well it means somebody made a broken request.
    
    echo "Bad Request";
  }
?>
