<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( isset($_SESSION['uname'])){ // Jika tidak ada session username berarti dia belum login
    header("location:/SMK/admin/index.php"); // Kita Redirect ke halaman index.php karena belum login
}
else if(isset($_SESSION['username'])){
    header("location:/SMK/guru/index.php");
}
else if(isset($_SESSION['user'])){
    header("location:/SMK/siswa/index.php");
}
else if(isset($_SESSION['usname'])){
    header("location:/SMK/walikelas/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/logosmk.png" type="image/png">
    <title>SMK Darus Salam</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/stylelogin.css" rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="main">
        <div class="user">
            <img src="images/user.png" alt="">
        </div>
        <div class="login">
            <div class="inset">
                <form action="cek_log.php" method="POST">
                <select name="status" required>  
								<option value="" >Status</option>  
								<option value="admin">Admin</option>  
								<option value="guru">Guru</option>
								<option value="siswa">Siswa</option>
                                <option value="karyawan">Karyawan</option>
                                <option value="wali kelas">Wali Kelas</option>
							</select><br><br>
                    <div>
                        <span><label>Username</label></span>
                        <span><input type="text" class="textbox" name="username" placeholder="NIM / NIP" ></span>
                    </div>
                    <div>
                        <span><label>Password</label></span>
                        <span><input type="password" id="pass" name="pass" class="password" placeholder="Password"></span>
                        <span><input type="checkbox" id="show-pass" name="show-pass"> Show password<br><br></span>
                    </div>
                    <hr>
                    <div class="sign">
                        <div class="submit">
                            <input type="submit" value="LOGIN" >
                        </div>
                        <span class="forget-pass">
                            <a class="genric-btn danger circle" href="index.php" >Kembali</a>
                        </span>
                        <div class="clear"> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    (function() {
		var _show = function( element, field ) {
			this.element = element;
			this.field = field;
			this.toggle();    
		};
	_show.prototype = {
		toggle: function() {
			var self = this;
			self.element.addEventListener( "change", function() {
			if( self.element.checked ) {
			self.field.setAttribute( "type", "text" );
			} else {
			self.field.setAttribute( "type", "password" );    
			}
			}, false);
		}
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		var checkbox = document.querySelector( "#show-pass" ),
		pass = document.querySelector( "#pass" ),
		_form = document.querySelector( "form" );
		var toggler = new _show( checkbox, pass );
	});
	})();
</script>