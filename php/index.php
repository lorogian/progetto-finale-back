
<?php
 include './connect.php';
 function InvioDB(){
    
 }
 if($_SERVER['SERVER_NAME']=="")
 {
    if($_SERVER["REQUEST_METHOD"]=="POST")
    else if($_SERVER["REQUEST_METHOD"]=="GET")
    {
      $myquery=query("select * from moto");
      $risulato=$sqli->$myquery;
      while($row=$risulato->fetch_assoc()){
         $json[]=$row;
      }

    }
    else if($_SERVER["REQUEST_METHOD"]=="DELETE")
    else if($_SERVER["REQUEST_METHOD"]=="HEAD")
 }




?>