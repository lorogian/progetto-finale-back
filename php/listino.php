
<?php
 include './connect.php';

 if($_SERVER['SERVER_NAME']=="")
 {
   if(isset($_GET["page"]) && isset($_GET["size"]) ){
   header("Content-type: application/json");
   http_response_code(200);
      
      $size=$_GET["size"];
      $page=$_GET["page"];
      $myquery=query("select nome , immagine_url from marca limit ".($page +1)*$size."");
      $risulato=$sqli->$myquery;
      while($row=$risulato->fetch_assoc()){
         $json[]=$row;
      }
      echo json_encode($json);
   }else{
            http_response_code(404);
   }
 }
?>