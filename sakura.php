<!DOCTYPE html>
	<html>
	<head>
		<title>Sakura</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<style type="text/css">
			body{
				background-image: url(m1.jpg); background-size: 129%;
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
  		<title>jQuery UI Datepicker - Default functionality</title>
  		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  		<link rel="stylesheet" href="/resources/demos/style.css">
  		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  		<script>
  		$( function() {
    	$( "#datepicker" ).datepicker();
  		} );
  		</script>
	</head>
	<body>
 <div class="container-fluid">
        <h1 style="color: white">WELCOME TO MEDICAL CLINIC</h1>
    </div>
		
    <nav class="navbar navbar-expand-lg" style="background-color: rgba(0,0,0,0.8)" >
      <a class="navbar-brand" href="index.php">CLINIC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="about.php">ABOUT</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="doctor.php">DOCTOR PROFILE</a>
            </li>
        </ul>
      </div>
  </nav>
  		<table align="center" style="background-color: rgba(72,454,505, 0.3)" >
  	<tr>
  		<td>
  			<div class="card" style="width: 18rem">
    			<img class="card-img-top" src = "s1.jpg" width="400" height="500" alt="Sakura Miyawaki">
        			<div class="card-body">
            			<h5 class="card-title" style="text-align: center"> Dr. Sakura Miyawaki </h5>
                   	</div>
            </div>
  		</td>
  		<td></td>
  		<td>
  			<h2 align="justify" style="color:#ffffff" > <b> INPUT YOUR DATA PLEASE </b></h2>
<form method="POST" action="Receiptdrsakura.php">
<table>
  <tr>
  <td><b>Appointment Date</b></td>
    <td> : <input type="text" placeholder="MM/DD/YYYY" name="appointmentdate" id="datepicker" required> </input> </td>
  </tr>
  <tr>
  <td><b>Full Name</b></td>
  <td> : <input type="text" name="name" required> </input></td>
  </tr>
  <tr>
  <td> <b>Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</b>  </td>
    <td><input type="radio" name="gender" value="Male" checked required><b> Male</b> </input>
    <input type="radio" name="gender" value="Female" required><b> Female</b> </input></td>
    </tr>
  <td><b>Age</b> </td>
  <td> : <input type="number" maxlength="2" name="age" required></td>
  </tr>
	<tr>
	<td> <b>Complaints about your disease &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </b> : </td>
	<td>  <textarea rows="" name="complaints" cols="40" required></textarea></td>
	</tr>
<tr>
	<td><input type="submit" value="Submit" name="save"  >   </input> </a>
  <input type="reset"></input> </td>	
	</tr>
	</table>
	</form>

  		</td>
  	</tr>
  </table><br>
    <footer>
    	<div class="footer">
    		<p>
				<img src="ig.jpg" width="20px" height="20px"   > </img>
        	<a href="https://www.instagram.com/muhammadrilo17/" style="color: white">@muhammadrilo17</a>
      		<a href="https://www.instagram.com/qurrotara_/" style="color: white">@qurrotara_</a>
			<a href="https://www.instagram.com/hahfizh/" style="color: white">@hahfizh</a>
			<a href="https://www.instagram.com/girindra.sw/" style="color: white">@girindra.sw</a>
    		</p>
  		</div>
	</footer>
	</body>
	</html>
