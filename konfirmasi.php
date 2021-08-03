<!DOCTYPE html>  
<head>
	<title>Your Comment | Geografi YF</title>
</head>
	<link rel="stylesheet" href="CSS/desain6.css">
<header>
	<div class="button">
		<a href="home.html"class="btn">Home</a>
		<a href="komentar.html"class="btn">Back</a>
	</div>
<body>
<?php
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['isi'];
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "komentar";
$db = mysqli_connect($server, $user, $password, $nama_database);
$sql="INSERT INTO data VALUES('null', '$nama', '$email', '$komentar')";
$query= mysqli_query($db, $sql);
$sql = "SELECT * FROM data ORDER BY id DESC";
while($data=mysqli_fetch_row($query));
?>

<div class="komentar">
	<br><h2>Your Comment</h2><br>
<?php
echo "<b>Name</b> <br>$nama<br>";
echo "<b>Email</b> <br>$email<br>";
echo "<b>Comment</b> <br>$komentar<br>";
?>
</div>
</header>
</body>
</html>