<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    	<title>Latihan 3</title>
    </head>
    <body>
	    <?php 
		    function Faktorial(&$A){
			    $hasil=1;
			    for ($i = $A; $i > 0 ; $i--) { 
				    $hasil = $hasil * $i;
			    }
			    return $hasil;
		    }
    		echo "Angka faktorial : 4 <br><br>";
	    	$faktorial = 4;
		    $hasilnya = Faktorial($faktorial);
		    echo "Hasilnya : $hasilnya";
	    ?>
    </body>
</html>