<?php
	include "conn/koneksi.php";
	if ($_POST['Submit'] == "Submit") {	
	$nik	=$_POST['nik'];
	$nama	=$_POST['nama'];
	$username=$_POST['username'];
	$password	= md5($_POST['password']);
	$telp	=$_POST['telp'];
	
	$ceknik	=mysqli_num_rows (mysqli_query($koneksi, "SELECT nik FROM masyarakat WHERE nik='$_POST[nik]'"));
	
	if($ceknik > 0) {
	?>
		<script language="JavaScript">
			alert('NIK sudah di gunakan...');
			document.location='register.php';
		</script>
	<?php
	}
		
	else{
		$insert =mysqli_query($koneksi, "INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES ('$nik', '$nama', '$username', '$password', '$telp')");
		?>
			<script language="JavaScript">
			alert('Daftar Akun Berhasil ...');
			document.location='index.php';
			</script>
		<?php
		}
	}
?>