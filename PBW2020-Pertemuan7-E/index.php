<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PBW2020-Pertemuan7-E</title>

		<style>
			.margin{
				margin : 1rem 30rem 5rem;
			}
			.tengah{
				text-align : center;
			}
		</style>
	</head>
	<body>
		<form action="hasil.php" method="POST">
			<fieldset class="margin">
			<legend class="tengah">NILAI AKHIR</legend>
				<p>
					<label>Nama</label><br>
					<input type="text" name="nama">
				</p>					
				<p>
					<label>NIM</label><br>
					<input type="text" name="nim">
				</p>
				<br>					
				<p>
					<label>Nilai Tugas Anda</label><br>
					<input type="number" name="tugas">
				</p>					
				<p>
					<label>Nilai UTS Anda</label><br>
					<input type="number" name="uts">
				</p>					
				<p>
					<label>Nilai UAS Anda</label><br>
					<input type="number" name="uas">
				</p>
				<p>
					<input type="submit">
				</p>
			</fieldset>
		</form>
		
	</body>
</html>