<!DOCTYPE html>
	<html>
	<head>
		<title>Clinic</title>
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
          <li class="nav-item">
            <a class="nav-link" href="login.php">LOGIN</a>
          </li>
        </ul>
      </div>
  </nav>
  		  <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
              <div class="card" style="width: 18rem">
                <img class="card-img-top" src = "s1.jpg" width="400" height="500" alt="Sakura miyawaki">
                  <div class="card-body">
                    <h5 class="card-title" style="text-align: center" style="text-align: center"> DScD. Sakura Miyawaki </h5>
          		          <a href="sakura.php" class="btn btn-primary"> Make An Appointment </a>
        	                 </div>
                         </div>
                       </div>
          <div class="col-lg-4">
              <div class="card" style="width: 20rem">
                <img class="card-img-top" src = "w1.jpg" width="400" height="500" alt="Wonwoo Jeon">
                  <div class="card-body">
                    <h5 class="card-title" style="text-align: center"> dr. Wonwoo Jeon </h5>
                        <a href="wonwo.php" class="btn btn-primary" style="text-align: center"> Make An Appointment </a>
                           </div>
                         </div>
                       </div>
    	
    </div>
    <footer>
    	<div class="footer">
    		<p>
				<img src="ig.jpg" width="20px" height="20px"> </img>	<a
      		<a href="ig.jpg"><a href="https://www.instagram.com/muhammadrilo17/">@muhammadrilo17</a>
      		<a href="https://www.instagram.com/qurrotara_/">@qurrotara_</a>
			<a href="https://www.instagram.com/hahfizh/">@hahfizh</a>
			<a href="https://www.instagram.com/girindra.sw/">@girindra.sw</a>
      		</a>
    		</p>
  		</div>
	</footer>
	</body>
	</html>
