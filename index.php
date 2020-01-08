

<?php

session_start();

include './includes/layout.php';



if(!isset($_SESSION['BlaxkUser'])){



?>

<div class="container">
<div class="row">
 <div class="col-sm-4 col-sm-offset-4">
  <a href="SignIn.php" class="btn btn-primary btn-lg"> Sign In</a>
  <br>
   <h4 class=''>OR</h4>
  <a href="SignUp.php" class="btn btn-success btn-lg">Create new Account</a>

 </div>
</div>
</div>




<?php
}

?>










<?php



include './includes/footer.php';
?>