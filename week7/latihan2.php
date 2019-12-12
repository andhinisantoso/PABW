<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Latihan 2</title>
    </head>
    <body>
    	<h1>Pemesanan Bet</h1>
    	<form method="GET" action="latihan2.php">
	    	<label>Nama : </label>
		    <input type="text" name="name" placeholder="e.g. Andhini"><br>
		    <label>Warna : </label>
		    <input type="text" name="warna" placeholder="e.g. Red"><br>
		    <input type="submit" value="Kirim" name="proses">
	    </form>

	    <?php 
		    function panjangNama($nama){
			    $hasil = strlen($nama);
			    if($hasil >= 1 && $hasil <=10){
			    	$jumlah = $hasil * 300;
				        return $jumlah;
			    }else if ($hasil <= 20 && $hasil >= 11) {
			    	$jumlah = $hasil * 500;
			        	return $jumlah;
			    }else{
			    	$jumlah = $hasil * 700;
			        	return $jumlah;
			    }
		    }
    		$nama_bet = $_GET['name'];
		    $warna_bet = "red";
		    if ($_GET['warna'] != "") {
		    	$warna_bet = $_GET['warna'];
		    }
		    $harga = panjangNama($nama_bet);
		    echo "<font color=$warna_bet>Namanya adalah : $nama_bet</font><br>";
		    echo "<font color=$warna_bet>Harga nama adalah : $harga</font>";
	    ?>
    </body>
</html>