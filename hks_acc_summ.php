<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

<title>Accounts</title>


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
 
 

<style type="text/css">


body, html, .container-fluid {
     height: 100%;
}
 
 
/* ---Start of Wrapper style ---- */

#wrapper	{
		background-color: #787878;
	}

.card-header	{
	background-color: #3c3c3c;
	max-height: 40px;
	padding: 5px;
	}

.card-link {	
	color: white;
	}
	
.card-link:Hover {	
	color: yellow;
	}
	
.card-body {
	padding: 5px;
	background-color: #f0f0f0;
	
	}
	
.card-body a {	
	color: black;
	}




/* ---end of Wrapper style ---- */



</style>

</head>
<script>
    function disableButton() {
        var btn = document.getElementById('btn');
        btn.disabled = true;
        btn.innerText = 'Posting...'
    }
</script>
<body>
<?php

$servername = "localhost";
$username = "HKSamacar_local";
$password = "Jpsk/1866";
$dbname = "HareKrishnaSamacar";


date_default_timezone_set("Asia/Dhaka");
  $date= intval(date("Ymd"));
// Create connection

?> 




<?php
 

 // Create connection
 $conn_trans_id = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_trans_id->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 mysqli_set_charset($conn_trans_id,"utf8");
 $sql_id = "SELECT id FROM cob_month where status='1' ";
 $result_id = $conn_trans_id->query($sql_id);
 
 if ($result_id->num_rows > 0) {
     // output data of each row
     $row = $result_id->fetch_assoc();
     $row["id"];
     if($row["id"]!=""){
         $GLOBALS['id']= intval($row["id"]);
            
     }
      
    
 }  
 $conn_trans_id->close();
 ?> 












<?php
 

 // Create connection
 $conn_trans_id = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_trans_id->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 mysqli_set_charset($conn_trans_id,"utf8");
 $sql_id = "SELECT MAX(vouch_number)as maxid FROM expense where (vouch_number IS NOT NULL)AND(vouch_number LIKE '".$GLOBALS['id']."%') ";
 $result_id = $conn_trans_id->query($sql_id);
 
 if ($result_id->num_rows > 0) {
     // output data of each row
     $row = $result_id->fetch_assoc();
     $row["id"];
     if($row["maxid"]!=""){
         $GLOBALS['maxtransid']= intval($row["maxid"])+1;
            ; 
     }
     else{
        $GLOBALS['maxtransid']=$GLOBALS['id']."001";
        ; 
     }
    
 } 
 
 else{
	$GLOBALS['maxtransid']=$GLOBALS['id']."001";
	; 
}
 $conn_trans_id->close();
 ?> 


<div class="container-fluid">

<div class="row" style= "height: 100%;" >

<div id="wrapper" class="col-md-2 col-xl-2">

  <!-- Sidebar -->
  
	<br> <br>
    <div class="col-sm-12 col-lg-12" style="text-align: center;">
        <p><img src="front_images/hklogo.gif" height="100" width="100" alt="HKS"></p>
        <h5 style="font-family: 'Leckerli One', cursive; color: white;" > Hare Krishna Samacar</h5>
    </div>
  
  
  
    <div id="accordion">
  
    <div class="card">
      <div class="card-header">
        <a class="card-link" href="hks_dashboard.php"> Dashboard</a>
      </div>
    </div>
	
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo"> Agents  </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
			<a href="hks_agent_new.php" > New Agent </a> <br>
			<a href="hks_agent_book.php" > Agent Book </a> 
        </div>
      </div>
    </div>
	
	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapse3"> Subscribers  </a>
      </div>
      <div id="collapse3" class="collapse" data-parent="#accordion">
        <div class="card-body">
			<a href="hks_subs_new.php"> New Subscriber </a> <br>
			<a href="hks_subs_book.php"> Subscriber Book </a> 
		</div>
      </div>
    </div>
	
	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link" href="hks_products.php"> Products  </a>
      </div>
    </div>
	
	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapse5"> Cash Memo  </a>
      </div>
      <div id="collapse5" class="collapse" data-parent="#accordion">
        <div class="card-body">
			<a href="hks_cash_retail.php" > Retail Sale </a> <br>
			<a href="hks_cash_post.php" > Courier & Post Office </a>			  
        </div>
      </div>
    </div>
	
	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link"  href="hks_send_newspaper.php"> Send Newspaper  </a>
      </div>
    </div>
	
	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link" href="hks_acc_summ.php"> Accounts  </a>
      </div>
    </div>
	
	
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" href="#collapse9"> Settings    </a>
      </div>
    </div> 
  
  </div> <!-- End of Accordion -->
  
		<div style="text-align:center; position: fixed; bottom: 0;">
           <p style= "cursor: pointer;text-align:center; color: yellow;" > Powered by <br> <a href="https://www.facebook.com/hksamacar/" target="_blank" style="color: white;" >@HareKrishnaSamacarIT</a> <br> <?php echo date("d-m-Y") ?> </p>
					 <br>  <?php include_once "hks_user.php" ;   ?>

			 
			  </div>
</div>
  
<div class="col-md-10 col-xl-10">


      <!-- Page content -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
            <div class="row">
              <div class="col-md-12">
              <p class="well lead" style="margin-top: 50px;" > Accounts </p>
            <div class="container">
                <div class="row"> <!-- div da esquerda -->
                    <!-- Text input CNPJ e Razao Social-->
                    <div class="col-sm-9 contact-form" style="background-color: cornsilk;"> <!-- div da direita -->
                        <form id="contact" method="post" class="form" target="_blank" action="hks_acc_summ_data.php" onsubmit='disableButton()'  role="form">
                            <h3>Expense Entry</h3>
							<div class="row" style="background-color: cornsilk; padding: 30px 0px 0px 0px">
								<div class="col-xs-6 col-md-6 form-group">									
									<input class="form-control" id="inputcidade" name="vouch_number"  value="<?php echo $GLOBALS['maxtransid'];?>" placeholder="Voucher Number" type="text" />
                                </div>
								<div class="col-xs-6 col-md-6 form-group">									
									<input class="form-control" id="inputcidade" name="send_single_date" placeholder="Type Date" type="date" />
                                </div>
							</div>
							<hr style="background-color: transparent; border: 1px solid red; margin: 0em 0em 0em 0em; " noshade>
							<div class="row" style="background-color: cornsilk;">
								<div class="table-responsive" style="padding: 15px;">
									<table class="table table-sm table-hover">
										<tbody>
										<tr>
							




<tr>
	<td><div class="col-xs-12 col-md-12 form-group">
	<button type ="button" class="btn btn-info">Devotee</button>
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="devotee_amount" placeholder="Amount" type="text" />
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="devotee_comments" placeholder="Comments" type="text" />
	</div></td>
</tr>





<tr>
	<td><div class="col-xs-12 col-md-12 form-group">
	<button type ="button" class="btn btn-info">Postage</button>
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="postage_amount" placeholder="Amount" type="text" />
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="postage_comments" placeholder="Comments" type="text" />
	</div></td>
</tr>





<tr>
	<td><div class="col-xs-12 col-md-12 form-group">
	<button type ="button" class="btn btn-info">Travelling</button>
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="travelling_amount" placeholder="Amount" type="text" />
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="travelling_comments" placeholder="Comments" type="text" />
	</div></td>
</tr>





<tr>
	<td><div class="col-xs-12 col-md-12 form-group">
	<button type ="button" class="btn btn-info">Printing</button>
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="printing_amount" placeholder="Amount" type="text" />
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="printing_comments" placeholder="Comments" type="text" />
	</div></td>
</tr>





<tr>
	<td><div class="col-xs-12 col-md-12 form-group">
	<button type ="button" class="btn btn-info">Paper</button>
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="paper_amount" placeholder="Amount" type="text" />
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="paper_comments" placeholder="Comments" type="text" />
	</div></td>
</tr>





<tr>
	<td><div class="col-xs-12 col-md-12 form-group">
	<button type ="button" class="btn btn-info">Entertainment</button>
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="entertainment_amount" placeholder="Amount" type="text" />
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="entertainment_comments" placeholder="Comments" type="text" />
	</div></td>
</tr>





<tr>
	<td><div class="col-xs-12 col-md-12 form-group">
	<button type ="button" class="btn btn-info">Internet</button>
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="internet_amount" placeholder="Amount" type="text" />
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="internet_comments" placeholder="Comments" type="text" />
	</div></td>
</tr>

<td><div class="col-xs-12 col-md-12 form-group">
											<button type ="button" class="btn btn-info">Book</button>
											</div></td>
											<td>
											<div class="col-xs-12 col-md-12 form-group">
												<input class="form-control" id="inputcidade" name="book_amount" placeholder="Amount" type="text" />
											</div></td>
											<td>
											<div class="col-xs-12 col-md-12 form-group">
												<input class="form-control" id="inputcidade" name="book_comments" placeholder="Comments" type="text" />
											</div></td>
										</tr>







										<tr>
											<td><div class="col-xs-12 col-md-12 form-group">
											<button type ="button" class="btn btn-info">Legal Fee</button>
											</div></td>
											<td>
											<div class="col-xs-12 col-md-12 form-group">
												<input class="form-control" id="inputcidade" name="legal_amount" placeholder="Amount" type="text" />
											</div></td>
											<td>
											<div class="col-xs-12 col-md-12 form-group">
												<input class="form-control" id="inputcidade" name="legal_comments" placeholder="Comments" type="text" />
											</div></td>
										</tr>











										<tr>
											<td><div class="col-xs-12 col-md-12 form-group">
											<button type ="button" class="btn btn-info">Repair</button>
											</div></td>
											<td>
											<div class="col-xs-12 col-md-12 form-group">
												<input class="form-control" id="inputcidade" name="repair_amount" placeholder="Amount" type="text" />
											</div></td>
											<td>
											<div class="col-xs-12 col-md-12 form-group">
												<input class="form-control" id="inputcidade" name="repair_comments" placeholder="Comments" type="text" />
											</div></td>
										</tr>





<tr>
	<td><div class="col-xs-12 col-md-12 form-group">
	<button type ="button" class="btn btn-info">Asset Purchase</button>
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="asset_amount" placeholder="Amount" type="text" />
	</div></td>
	<td>
	<div class="col-xs-12 col-md-12 form-group">
		<input class="form-control" id="inputcidade" name="asset_comments" placeholder="Comments" type="text" />
	</div></td>
</tr>






									 
										</tbody>
									</table>
								</div>
            				</div>												<button type ="submit"  id="btn" class="btn btn-danger">Submit</button>



                        </form>
												<div class="col-xs-12 col-md-12 form-group">
	</div>

                    </div> <!-- fim div da direita -->
				 
                </div> <!--End of Single -->
            </div>
			<hr>
			        
			        <div class="col-sm-12 col-md-12  contact-form" style="background-color: #ffd7eb;"> <!-- div da direita -->
                        <form id="contact" method="post" class="form" role="form">
                            <h3>Print Report (A/C Summary)</h3>
							<div class="row" style="background-color: #ffd7eb; ">
								<div class="col-xs-4 col-md-4 form-group">
									<label for="stdate">Starting date </label>
									<input class="form-control" id="stdate" name="send_all_date" placeholder="Type Date" type="date" />
                                </div>
								<div class="col-xs-4 col-md-4 form-group">
									<label for="enddate">Ending date </label>
									<input class="form-control" id="enddate" name="send_all_date" placeholder="Type Date" type="date" />
                                </div>
                                <div class="col-xs-4 col-md-4 form-group" style="text-aling: right; padding: 30px 0px 0px 0px">
									<button class="btn btn-success" type="submit" >Print</button>
									<button class="btn btn-danger" type="submit" >Print All</button>
								</div>
							</div>
							<div class="row" style="background-color: cornsilk;">
								
            				</div>
                        </form>
                    </div> <!-- End of Report Print -->
			</div>
          </div>
        </div>
    </div>
      



</div>




</div> <!-- end of row -->

</div> <!-- end of container -->

</body>
</html>