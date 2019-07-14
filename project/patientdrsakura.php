<?php
include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM doctorsakura");
$no = 1;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<frame>
	<h1>List For DScD. Sakura</h1>
</frame>
<table border="2px" cellspacing="10" cellpadding="20">
	<tr>
		<th>No</th>
		<th>Appointment Date</th>
		<th>Name</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Complaints</th>
	</tr>
	<?php while($data = mysqli_fetch_assoc($result)): ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $data["appointmentdate"] ?></td>
			<td><?= $data["name"] ?></td>
			<td><?= $data["gender"] ?></td>
			<td><?= $data["age"] ?></td>
			<td><?= $data["complaints"] ?></td>
		</tr>


	<?php endwhile; ?>
		
</table><a href="index.php" class="btn btn-info btn-xs">Back</a>
</body>
</html>