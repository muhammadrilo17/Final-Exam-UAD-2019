<?php
  require 'koneksi.php';
  if(isset($_POST['save'])){
    $appointmentdate = htmlspecialchars($_POST['appointmentdate']);
    $appointmentdate = date('Y-m-d', strtotime($appointmentdate));
    $name = htmlspecialchars($_POST['name']);
    $gender = htmlspecialchars($_POST['gender']);
    $age = htmlspecialchars($_POST['age']);
    $complaints = htmlspecialchars($_POST['complaints']);
     $insert = mysqli_query($conn, "INSERT INTO doctorsakura VALUES(NULL, '$appointmentdate', '$name', '$gender', '$age', '$complaints')");
    }

?>

<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<style type="text/css">
			body{
				
			}
			.container-fluid{
				background-color: rgba(0,0,0,0.5);
    			text-align: center;
    			height: 100%;
    		}
    		div.gallery {
    			margin: 10px;
    			border: 1px solid #ccc;
    			float: left;
    			width: 180px;
				background-color: rgba(0,0,0,0.5);
  			}
  			div.gallery:hover {
   				border: 1px solid #777;
    			border-color: green;
    			color: green;
  			}
  			div.gallery img {
    			width: 100%;
    			height: 100%;
  			}
  			footer{
    		position: fixed;
    		left: 0;
    		bottom: 0;
    		width: 100%;
    		height: 5%;
			background-color: rgba(0,0,0,0.5);
    		color: black;
    		text-align: center;
    		}
		</style>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<script>
			function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
  		</script>
	</head>
	<body>
    <script type="text/javascript"> 

      alert('You Have Made An appointment with drg.Sakura Miyawaki :)')
    </script>
      <div id="printableArea">
  		<table align="center" >
  	
		
  		<td></td>
  		<td>
  			<h2 align="justify" style="color: black" > <b> YOUR RECEIPT(Please bring it when on your Doctor's appointment) </b></h2>
			
<form method="POST" action="">
<table>
  <tr>
  <td><b>Appointment Date</b></td>
    <td> :  <?php echo "$appointmentdate"; ?> </td>
  </tr>
  <tr>
  <td><b>Full Name</b></td>
  <td> : <?php echo "$name"; ?></td>
  </tr>
  <tr>
  <td> <b>Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</b>  </td>
    <td> : <?php echo "$gender"?></td>
    </tr>
  <td><b>Age</b> </td>
  <td> : <?php echo "$age"; ?></td>
  </tr>
	<tr>
	<td> <b>Complaints about your disease &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </b></td><td> : <?php echo "$complaints"; ?></td>
	<td>  </td>
	</tr>
	</div>
	<tr>
	<td> <input type="button" onclick="printDiv('printableArea')" value="PRINT" /> </td>
	</tr>
	</table>

	</form>
			
  
  		</td>
  	</tr>
  </table><a href="index.php">Back</a>
	</body>
	</html>
