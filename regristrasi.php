<form action="" method="POST">
	<center>
		<h1>PENDAFTARAN</h1>
		<table>
			<tr><td>NIM :<td></tr>
			<tr><td><input type="text" name="nim" placeholder="nim" required></td></tr>

			<tr><td>Nama :</td></tr>
			<tr><td><input type="text" name="nama" placeholder="nama" required></td></tr>

			<tr><td>Email :</td></tr>
			<tr><td><input type="email" name="email" placeholder="@gmail.com" required=""></td></tr>

			<tr><td><input type="submit" name="submit" value="Kirim"></td></tr>
		</table>
	</center>
</form>

<?php
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		
		include "conn.php";

			if (strlen($_POST['nim']) != 10 && strlen($_POST['nama']) >= 25) {
				echo "Nim harus 10 karakter atau nama terlalu panjang!!!";
			}
			elseif(strlen($_POST['nim']) != 10 && strlen($_POST['nama']) <= 25){
				$sql = mysqli_query($conn, "INSERT INTO `mahasiswa`(`nim`, `nama`, `email`) VALUES ('$nim', '$nama', '$email')");
				if ($sql) {
					$_SESSION['nim']=$nim;
					echo "BERHASIL LOGIN";
				}
			}
	}
?>
