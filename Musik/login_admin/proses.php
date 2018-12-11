<?php
include "../koneksi.php";
#jika ditekan tombol login
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysqli_query("SELECT * FROM admin WHERE username='$username' AND
password='$password]'");
$num = mysqli_num_rows($sql);
if(isset($_POST['Login'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysqli_query("SELECT * FROM admin WHERE username='$username' AND
password='$password'");
$num = mysqli_num_rows($sql);
if($num==1) {
// login benar //
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
?>
<script language="JavaScript">alert('LOGIN SUKSES');
document.location=('../halaman_admin/index.php')</script>
<?php
} 
else {
// jika login salah //
echo "<script>
eval(\"parent.location='login.html '\");
alert (' Maaf Login Gagal, Silahkan Isi Username dan Password Anda Dengan Benar');
</script>";
}
}
?>