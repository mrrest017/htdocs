<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['pass'];
$status = $_POST['status'];
$cek      = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE username = '$username' AND password = '$password'");
$result   = mysqli_fetch_array($cek);
$cek2     = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE username = '$username' AND password = '$password'");
$result2  = mysqli_fetch_array($cek2);
$cek3     = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'");
$result3  = mysqli_fetch_array($cek3);
$cek4     = mysqli_query($koneksi, "SELECT * FROM tb_walikelas WHERE usname = '$username' AND passwd = '$password'");
$result4  = mysqli_fetch_array($cek4);

if(mysqli_num_rows($cek3)==1 && $status=='admin'){
    $_SESSION['uname'] = $result3['username'];
    $_SESSION['password'] = $result3['password'];
    $_SESSION['no'] = $result3['id_admin'];
    $_SESSION['level']    = 'admin';
    $_SESSION['name'] = $result3['nama_admin'];
    $_SESSION['foto'] = $result3['foto_admin'];
    $_SESSION['nip'] = $result3['nip_admin'];
    $_SESSION['alamat'] = $result3['alamat_admin'];
    $_SESSION['jk'] = $result3['jk_admin'];
    $_SESSION['tmpt'] = $result3['tmpt_admin'];
    $_SESSION['tgl'] = $result3['tgl_admin'];
    $_SESSION['agama'] = $result3['agama_admin'];
    $_SESSION['telp'] = $result3['telp_admin'];
    header('location:admin/index.php');
}
elseif(mysqli_num_rows($cek)==1 && $status =='guru'){
    
    $_SESSION['nama'] = $result['nama_guru'];
    $_SESSION['no'] = $result['id_guru'];
    $_SESSION['username'] = $result['username'];
    $_SESSION['password'] = $result['password'];
    $_SESSION['level']    = 'guru';
    $_SESSION['name'] = $result['nama_guru'];
    $_SESSION['fotos'] = $result['foto_guru'];
    $_SESSION['nip'] = $result['nip'];
    $_SESSION['alamat'] = $result['alamat_guru'];
    $_SESSION['jk'] = $result['jk_guru'];
    $_SESSION['tmpt'] = $result['tmptlahir'];
    $_SESSION['tgl'] = $result['tgllahir'];
    $_SESSION['agama'] = $result['agama_guru'];
    $_SESSION['telp'] = $result['telp_guru'];
    header('location:guru/index.php');
}
elseif(mysqli_num_rows($cek2)==1 && $status =='siswa'){
    $_SESSION['user'] = $result2['username'];
    $_SESSION['password'] = $result2['password'];
    $_SESSION['level']    = 'siswa';
    $_SESSION['no'] = $result2['id_siswa'];
    $_SESSION['name'] = $result2['nama_siswa'];
    $_SESSION['fotok'] = $result2['foto_siswa'];
    $_SESSION['nip'] = $result2['nis'];
    $_SESSION['alamat'] = $result2['alamat_siswa'];
    $_SESSION['jk'] = $result2['jk_siswa'];
    $_SESSION['tmpt'] = $result2['tmptlhr_siswa'];
    $_SESSION['tgl'] = $result2['tgllhr_siswa'];
    $_SESSION['agama'] = $result2['agama_siswa'];
    $_SESSION['telp'] = $result2['telp_siswa'];
    header('location:siswa/index.php');
}
    elseif(mysqli_num_rows($cek)==1 && $status =='karyawan'){
    
        $_SESSION['nama'] = $result['nama_guru'];
        $_SESSION['no'] = $result['id_guru'];
        $_SESSION['rname'] = $result['username'];
        $_SESSION['word'] = $result['password'];
        $_SESSION['level']    = 'guru';
        $_SESSION['name'] = $result['nama_guru'];
        $_SESSION['fotos'] = $result['foto_guru'];
        $_SESSION['nip'] = $result['nip'];
        $_SESSION['alamat'] = $result['alamat_guru'];
        $_SESSION['jk'] = $result['jk_guru'];
        $_SESSION['tmpt'] = $result['tmptlahir'];
        $_SESSION['tgl'] = $result['tgllahir'];
        $_SESSION['agama'] = $result['agama_guru'];
        $_SESSION['telp'] = $result['telp_guru'];
        header('location:karyawan/index.php');
    
} elseif(mysqli_num_rows($cek4)==1 && $status =='wali kelas'){
    $_SESSION['nama'] = $result4['nama_wali'];
    $_SESSION['kelas'] = $result4['kelas'];
    $_SESSION['nip'] = $result4['nip'];
    $_SESSION['usname'] = $result4['usname'];
    $_SESSION['passwd'] = $result4['passwd'];
    $_SESSION['no'] = $result4['id_walikelas'];
    $_SESSION['level'] = 'wali kelas';
    header('location:walikelas/index.php');
}else{
    echo "<script>alert('Maaf Hak Akses Salah');location='login.php';</script>";
    
    
}
?>