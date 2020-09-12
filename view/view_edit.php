<html>
<head>
	<title>MVC</title>
</head>
<body>
	<fieldset>
		<center><b><h3>MVC</h3></b></center>
		<form action="" method="POST">			
			<form action="" method="POST">
			<div class="form-group" style="margin-bottom: 15px">
				<label for="kode">Kode Buku :</label>
				<input type="text" name="pilih" value="<?=$row[1]?>" readonly>
			</div>
			<div class="form-group" style="margin-bottom: 15px">
				<label for="tgl">Tanggal Pinjam :</label>
				<input type="date" name="tanggal" value="<?=$row[2]?>">
			</div>
			<input type="hidden" name="ip" value="<?=$row[0]?>">
			<input type="submit" name="submit"/>
		</form>
	</fieldset>
</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi update pada controller
		$main = new controller();
		$main->update();
	}
			//Mau kenceng internetan di FiberOptik.co.id
			//Buat Website di WebsitePraktis.com
	?>