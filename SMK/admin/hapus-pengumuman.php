<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_peng'];
 
 
// menghapus data dari database
$hapus = mysqli_query($koneksi, "delete from tb_pengumuman where id_peng='$id'");
if($hapus) { 
    echo '<script type="text/javascript">alert("Data Berhasil di Hapus.");document.location.href="../admin/pengumuman2.php"</script>';
} else {
    echo '<script type="text/javascript">alert("Data Gagal di Hapus.");document.location.href="../admin/index.php"</script>';
}

?>