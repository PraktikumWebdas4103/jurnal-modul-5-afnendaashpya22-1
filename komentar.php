<form action="" method="POST">
	<center>
		<h1>KOMENTAR</h1>
		<table>
			<tr>
				<td>Isi komentar :</td>
			</tr>
			<tr>
				<td><input type="text" name="komen" placeholder="Komentar Anda"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Posting"></td>
			</tr>
		</table>
	</center>
</form>

<?php
	if (isset($_POST['submit'])) {
		if (str_word_count($_POST['komen']) < 5) {
			echo "<center><b>Pesan error!!!</b></center>";
		}
		else{
			$kata = str_word_count($_POST['komen']);
			echo "<center><b>Jumlah kata pada kolom komentar : $kata </b></center>";
		}
	}
	
?>
