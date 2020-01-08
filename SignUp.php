
<?php

session_start();

include './includes/layout.php';

include './includes/functions.php';


/**if users have session redirect him to main page */
if(isset($_SESSION['blaxkUser'])){
header('Location:index.php');
}



/**if they got post request save new user in db */
if(isset($_POST['submit'])){

    $firstNameI=$_POST['FirstNameI'];
    $lastNameI=$_POST['LastNameI'];
    $userNameI=$_POST['UserNameI'];
    $emailI=$_POST['EmailI'];
    $passwordI=$_POST['PasswordI'];
    $password2I=$_POST['Password2I'];
    $gender=$_POST['GenderI'];
    $birth=$_POST['BirthI'];


if($passwordI == $password2I){
    $insertUser= insertUser($firstNameI,$lastNameI,$userNameI,$emailI,$passwordI,$gender,$birth);

    if( $insertUser == true){
    $_SESSION['BlaxkUser'] = $emailI;

    header('Location:index.php');

    }
    




    
}


}




?>
















<div class="container">
<br>
<br>
 <div class="col-sm-10 col-sm-offset-1">
  <form class='form-horizontal'  method="post">
   <div class="form-group">
    <div class="col-sm-2"><label for="FirstNameI" class="form-label">First Name:</label></div>
    <div class="col-sm-4"><input type="text" name="FirstNameI"   class="form-control" required></div>
    <!-- Second Name -->
    <div class="col-sm-2"><label for="LastNameI" class="form-label">Last Name:</label></div>
    <div class="col-sm-4"><input type="text" name="LastNameI"  class="form-control" required></div>
   </div> 

   <div class="form-group">
    <div class="col-sm-2"><label for="EmailI" class="form-label">Email:</label></div>
    <div class="col-sm-10"><input type="emai" name="EmailI"   class="form-control" required></div>
   </div>
 
   <div class="form-group">
    <div class="col-sm-2"><label for="UserNameI" class="form-label">UserName:</label></div>
    <div class="col-sm-10"><input type="text" name="UserNameI"   class="form-control" required></div>
   </div>


   <div class="form-group">
    <div class="col-sm-2"><label for="PasswordI" class="form-label">Password:</label></div>
    <div class="col-sm-10"><input type="password" name="PasswordI"   class="form-control" required></div>
   </div>
 

   <div class="form-group">
    <div class="col-sm-2"><label for="Password2I" class="form-label">Repeat Password:</label></div>
    <div class="col-sm-10"><input type="password" name="Password2I"   class="form-control" required></div>
   </div>
 
 
   <div class="form-group">
    <div class="col-sm-2"><label for="GenderI" class="form-label">Gender:</label></div>
    <label class="radio-inline"><input type="radio" value='male' name="GenderI">Male</label>
    <label class="radio-inline"><input type="radio" value='female' name="GenderI">Female</label>
    <label class="radio-inline"><input type="radio" value='other' name="GenderI">other</label>
   </div>

   <div class="form-group">
    <div class="col-sm-2"><label for="BirthI" class="form-label">Birth:</label></div>
    <div class="col-sm-10"><input type="date" name="BirthI"   class="form-control" required></div>
   </div>

   <div class="form-group">
    <div class="col-sm-4 col-sm-offset-2"><input type="submit" name='submit'   class="btn btn-success"></div>
   </div>
 
 
 
 
 
  </form>

 </div>

</div>




<?php
include './includes/footer.php';
?>