<?php

session_start();

include './includes/layout.php';

include './includes/functions.php';


/**if users have session redirect him to main page */
if(isset($_SESSION['blaxkUser'])){
header('Location:index.php');
}



if(isset($_POST['submit'])){

    $EmailI=$_POST['EmailI'];
    $PasswordI=$_POST['PasswordI'];

    $where = where('*','blaxksocial_users','Email','=',$EmailI,'Password',$PasswordI,true);
    if($where == 1){
        $_SESSION['blaxkUser'] = $EmailI;
        header('Location:index.php');

    }

}







?>


<div class="container">
<br>
<br>
 <div class="col-sm-10 col-sm-offset-2">
  <form class='form-horizontal'  method="post">
   <div class="form-group">
    <div class="col-sm-2"><label for="EmailI" class="form-label">Email:</label></div>
    <div class="col-sm-6"><input type="text" name="EmailI"   class="form-control" required></div>
   </div> 

   <div class="form-group">
    <div class="col-sm-2"><label for="PasswordI" class="form-label">Password:</label></div>
    <div class="col-sm-6"><input type="password" name="PasswordI"   class="form-control" required></div>
   </div> 

   <div class="form-group">
    <div class="col-sm-4 col-sm-offset-2">
     <input type="submit" name="submit" class="btn btn-primary">
   </div>
 </div>








<?php
include './includes/footer.php';
?>