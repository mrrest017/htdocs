<?php 
ini_set("display_errors", "off");
// koneksi database
include 'koneksi.php';

$nama = addslashes($_POST['nama']);
$nip = addslashes($_POST['nip']);
$alamat = addslashes($_POST['alamat']);
$jk = addslashes($_POST['jk']);
$agama = addslashes($_POST['agama']);
$tmptlahir =addslashes($_POST['tempat']);
$tgllahir = addslashes($_POST['tanggal']);
$telp = addslashes($_POST['telepon']);
$status = addslashes($_POST['jabatan']);
$status2 = addslashes($_POST['status2']);
$ceknis = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE nip='$nip'"));
$namafolder="img/guru/";
if($ceknis > 0){
    echo "<script>alert('NIP Sudah Digunakan');document.location.href='../admin/tambah-guru.php'</script>";
}else if (!empty($_FILES["file"]["tmp_name"])) {
    $jenis_gambar=$_FILES['file']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {           
        $gambar = $namafolder . basename($_FILES['file']['name']);       
        if (move_uploaded_file($_FILES['file']['tmp_name'], $gambar)) {
            if ($status2=admin){
                mysqli_query($koneksi,"insert into tb_admin values('','$nip','$nama','$jk','$tmptlahir','$tgllahir','$agama','$telp','$alamat','$gambar','$nip','$nip','admin')");
                mysqli_query($koneksi,"insert into tb_guru values('','$nip','$nama','$jk','$tmptlahir','$tgllahir','$agama','$alamat','$telp','$status','$nip','$nip','$gambar')");
            }else{

            
            mysqli_query($koneksi,"insert into tb_guru values('','$nip','$nama','$jk','$tmptlahir','$tgllahir','$agama','$alamat','$telp','$status','$nip','$nip','$gambar')");
            }
           ?>
				<script language="javascript">
                    alert('Berhasil menambahkan');
                    document.location="guru2.php";
                </script>
   			<?php
        } else {
         	?>
				<script language="javascript">
                    alert('Gagal menambahkan');
                    document.location="guru2.php";
                </script>
   			<?php
        }
   } else {
        ?>
			<script language="javascript">
                alert('Gambar harus berformat .jpg .png .gif');
                document.location="tambah-guru.php";
            </script>
   		<?php
   }
} else {   
    echo "<script>alert('Data Gagal diupload');document.location.href='../admin/guru2.php'</script>";
}
?>