<html>
<head>
	<title>Menghitung Volume Balok</title>
</head>
<body>
	<form action="VolumeBalok.php" method="get">
		Panjang : <input type="text" name="p"><br>
		Lebar : <input type="text" name="l"><br>
		Tinggi : <input type="text" name="t"><br>
		<input type="submit" name="Hasil" value="Hasil"><br>
	<?php
		if(isset($_GET["p"]) && isset($_GET["l"]) && isset($_GET["t"]))
		{
			$p=$_GET["p"];
			$l=$_GET["l"];
			$t=$_GET["t"];
			$h=$p*$l*$t;
			echo "Hasilnya : $h";
		}
		else
		{
			echo "kamu belum isi data";
		}
	?>
	</form>
</body>
</html>