
  <?php
   
   
function id_name($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT Name FROM tblMem  where ID_EN=".$a."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["Name"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }


     
function id_phone($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT vill,po,phone,mob,email FROM tblMem  where ID_EN=".$a."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["mob"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }


   
   function id_mobile($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT vill,po,phone,mob,email FROM tblMem  where ID_EN=".$a."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["phone"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }













   function id_address($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT vill,Des,Org,dist FROM tblMem  where ID_EN=".$a."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["Des"].$row["Org"].$row["dist"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }









   function id_vill($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT vill,Des,Org,dist FROM tblMem  where ID_EN=".$a."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["vill"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }


   function id_balance($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT balance FROM tblMem  where ID_EN=".$a."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["balance"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }



   function id_courier_name($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT courier_name FROM tblMem  where ID_EN=".$a."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["courier_name"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }


   function id_courier_description($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT courier_description FROM tblMem  where ID_EN=".$a."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["courier_description"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }


   function id_news_rate($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT news_rate FROM tblMem  where ID_EN=".$a."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["news_rate"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }





   function quan_range($ver,$quan){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
 
 

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT VPNo FROM tblIssue   where vername=".intval($ver)." AND VPNo IS NOT NULL AND agcpy=".intval($quan)."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
     $arr=array();
     while($row = $result_all->fetch_assoc()) {
 
      array_push($arr,$row["VPNo"]);

 

   
 
    

 




 













    }
    
    





    
 } else {
     echo "no_range";
 }

 //return print_r($arr);

$a_num=sizeof($arr);
$d=0;
for($l=0;$l<$a_num;$l++){
    if($d==0){  $d= $arr[$l];  }
    else if ($l=$a_num-1){
        
       
        
        $d=$d."-".$arr[$l];  
       
    
    
    
    
    }

          
}
 return  $d  ;
 $conn_all->close();
 
   }



   


      
function id_cour_description($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT courier_description FROM tblMem  where ID_EN=".$a."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["courier_description"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }




      
function id_cour_name($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT courier_name FROM tblMem  where ID_EN=".$a."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["courier_name"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }



      
   function id_dist($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  $id=intval($a);

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT dist FROM tblMem  where ID_EN=".$id."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["dist"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }






      
   function id_ps($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  $id=intval($a);

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT ps FROM tblMem  where ID_EN=".$id."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["ps"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   } 




      
   function id_po($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT po FROM tblMem  where ID_EN=".$a."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["po"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }







       
   function id_po_bn($a){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  $id=intval($a);

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT po_bn FROM tblMem  where ID_EN=".$id."";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["po_bn"];
     
     
 } else {
 
 }
 $conn_all->close();
 
   }





   function user_np_id($u,$p){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  $u1=strval($u);
  $p1=strval($p);

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT id FROM users  where user_name = '".$u1."' and password='".$p1."'";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["id"];
     
     
 } else {
    return "FALSE";
 }
 $conn_all->close();
 
   }







   function user_id_name($i){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  $u1=strval($u);
  $p1=strval($p);

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT u_name FROM users  where id = '".$i."'";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["u_name"];
     
     
 } else {
    return "No Name";
 }
 $conn_all->close();
 
   }
















   function get_user_key($i){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT user_key FROM users  where id = '".$i."'";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["user_key"];
     
     
 } else {
    return "FALSE";
 }
 $conn_all->close();
 
   }



   function set_user_key($i,$k){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
 

 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "update   users set user_key='$k' where id = '".$i."'";
  $conn_all->query($sql_all);
 
     // output data of each row
     
   
 $conn_all->close();
 
   }


















   function dist_en_bn($d){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  $di=intval($d);
 
 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT bn_name FROM districts  where id = '".$di."'";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["bn_name"];
     
     
 } else {
   // return "No District";
 }
 $conn_all->close();
 
   }



   function ps_en_bn($d){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  $di=strval($d);
 
 // Create connection
 
 
 
 // Create connection
 $conn_all = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_all->connect_error) {
     die("Connection failed: " . $conn_all->connect_error);
 }
 mysqli_set_charset($conn_all,"utf8");
 $sql_all = "SELECT bn_name FROM upazilas  where upazila_name = '".$di."'";
 $result_all = $conn_all->query($sql_all);
 
 if ($result_all->num_rows > 0) {
     // output data of each row
    $row = $result_all->fetch_assoc();
            
 return $row["bn_name"];
     
     
 } else {
    //return "No Upazila";
 }
 $conn_all->close();
 
   }




   function number_en_bn($d){
   
    $servername = "localhost";
    $username = "HKSamacar_local";
    $password = "Jpsk/1866";
    $dbname = "HareKrishnaSamacar";
   
  $di=strval($d);
 
 // Create connection
 $en_num = ["0", "1", "2","3", "4", "5","6", "7", "8","9"];
 $bn_num = ["০", "১", "২","৩", "৪", "৫","৬", "৭", "৮","৯"];
 
 
 $new_num = str_replace($en_num, $bn_num, $di);

            
 return $new_num;
     
     
 ;
 
   }
?> 