<?php
session_start();
include 'koneksi.php';
if( isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

$login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username' and password='$password'");
$cek =  mysqli_num_rows($login);

if($cek > 0){ 
    mysqli_query($koneksi, "SELECT * FROM tb_user WHERE password='$password' and username = '$username'");
    $data = mysqli_fetch_assoc($login);
    
    if($data['level']=="admin"){
        $_SESSION['username'] = $username;
		$_SESSION['level']="admin";
        header("location:admin/index.php");

    }else if($data['level']=="siswa"){
		$_SESSION['username'] = $username;
		$_SESSION['level']="siswa";
        header("location:siswa.php");
    }else if($data['level']=="guru"){
		$_SESSION['username'] = $username;
		$_SESSION['level']="guru";
        header("location:guru.php");
    }else{
		header("location:index.php?pesan=gagal");
        }

    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/logosmk.png" type="image/png">
	<title>SMK Darus Salam</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin2.css">
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Masukkan Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Masukkan Password" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>