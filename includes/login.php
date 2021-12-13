<?php

    
?>
  

<div class = "wrapper">
<div class="body-section">
<form action="./handle/handlelogin.php" class="login-box" method="POST">
<input type="text" name="email" placeholder="Username or Email">
<input type="text" name="password" placeholder="Password">

<input type="submit" name="login" class="login-btn" value="log in">
<a class="login-link" href="#">Forgot password?</a>
</div>
  </div>
    <?php 
    
    if(isset($_SESSION['errors'])) {
          foreach ($_SESSION['errors'] as $error) {
          echo ' <li class="error-li">
          <div class="span-fp-error">'.$error.'</div>
          </li>';
          
          }
          unset($_SESSION['errors']);  

         
          
    } 
        
      ?>
    </div>
    </form>

    
 
	
	