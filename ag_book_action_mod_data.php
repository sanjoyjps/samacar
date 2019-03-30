
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

<title>Agent Book</title>


  <meta charset="utf-8">
 
 <link rel="shortcut icon" href="favicon1.ico" />
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 
 <link href="https://fonts.googleapis.com/css?family=Leckerli+One" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
 
 
 

</head>
<script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal1").modal("hide");
            load_page('ag_book_search.php');
        });
    });

    function load_page(url){
        $('#modal').load(url,function(){});
    }
</script>
<body>

<?php   $id=$_POST["ag_id_en"];?>


<?php   $status=$_POST["status"];?>
<?php   $quantity=$_POST["ag_quantity"];?>
 

 <?php
$servername = "localhost";
$username = "HKSamacar_local";
$password = "Jpsk/1866";
$dbname = "HareKrishnaSamacar";

// Create connection

?> 
 <?php
 

// Create connection
$conn_id = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_id->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn_id,"utf8");
$sql_id = "SELECT ag_quantity,status,skip,news_rate FROM tblMem where ID_EN =".$id."";
$result_id = $conn_id->query($sql_id);

if ($result_id->num_rows > 0) {
    // output data of each row
    $row = $result_id->fetch_assoc();
     $GLOBALS['ag_quantity']= $row["ag_quantity"];
          $GLOBALS['status']= $row["status"];
          $GLOBALS['skip']= $row["skip"];
          $GLOBALS['news_rate']= $row["news_rate"];
    
} else {
    echo "0 results";
}
$conn_id->close();
?> 

<div class="input-group mb-8">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Quantity</span>


  <form method ="post"   action="ag_book_action_mod_update_data.php">
  <input type="hidden" name="id" value="<?php echo  $id;?>">

  <input type="text" class="form-control" name="quantity" value="<?php echo $GLOBALS['ag_quantity'];?>" aria-label="Quantity" aria-describedby="basic-addon1">
  </div>
  <br>
  <div class="input-group-prepend">
    <span  class="input-group-text" id="basic-addon1">Skip for (Month)</span>
 

  <input type="text" class="form-control" name="skip" value="<?php echo $GLOBALS['skip'];?>" aria-label="Skip for (Month)" aria-describedby="basic-addon1">
  </div>


   <br>
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
 

  <input type="text" class="form-control" name="news_rate" value="<?php echo $GLOBALS['news_rate'];?>" aria-label="@" aria-describedby="basic-addon1">
  </div>

</div>

    
    <div class="radio">
      <label>
      
 
      <input type="radio" name="status" value="CONT" <?php echo ($GLOBALS['status']=='CONT')?'checked':'' ?>> 
      
       Continue </label>
    </div>
    <div class="radio">
      <label>
      
      <input type="radio" name="status" value="DISCONT" <?php echo ($GLOBALS['status']=='DISCONT')?'checked':'' ?> > 
      

      
       Discontinue </label>


    </div>
    <button  type="submit" data-target="#myModal1" data-toggle="modal" class="btn btn-danger btn-sm " > Update</button>
 
  </form>

  
  </body>

  </html>