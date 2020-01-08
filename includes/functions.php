<?php 

include "blaxkSocial.php";



 function selectAll($col,$table)
{

global $blaxkSocialConn;

$query='SELECT'. $col. ' FROM  ' . $table ;

$stmt=$blaxkSocialConn->prepare($query);
$stmt->execute();
$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
return $result;

}



function where($col,$table,$Key1,$rel,$value,$key2,$value2,$count)
{ 
    global $blaxkSocialConn;


    if(!empty($key2)){
        $query='SELECT' .$col. ' FROM ' .$table. ' WHERE ' . $Key1  . $rel  ." '$value' ".' AND '. $key2  . $rel ." '$value2 ' ";
    }
    else{
        $query=' SELECT ' .$col. ' FROM ' .$table. ' WHERE ' .$Key1 .$rel ."' . $value .'" ;
        echo $query;
    }
    
    $stmt=$blaxkSocialConn->prepare($query);
    $stmt->execute();
   
    if($count == true){
        $countRes=$stmt->rowCount();
        return $countRes;
    }
    else{
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    }

}




function insertUser($firstNameI,$lastNameI,$userNameI,$emailI,$passwordI,$gender,$birth)
{

 global $blaxkSocialConn;



   $query='INSERT INTO `blaxksocial_users`(`FirstName`, `LastName`, `UserName`, `Email`, `Password`,`Gender`,`Birth`, `Freinds`, `Posts`, `Groups`, `Pages`,`banFriends`, `Picture`,`Activation`) 
   VALUES (?,?,?,?,?,?,?,"[]","[]","[]","[]","[]","test","0")';

   $stmt=$blaxkSocialConn->prepare($query);
   $stmt->bindparam(1,$firstNameI,16);
   $stmt->bindparam(2,$lastNameI,16);
   $stmt->bindparam(3,$userNameI,16);
   $stmt->bindparam(4,$emailI,36);
   $stmt->bindparam(5,$passwordI,16);
   $stmt->bindparam(6,$gender,16);
   $stmt->bindparam(7,$birth,16);
   $stmt->execute();

   return true ;

}























?>