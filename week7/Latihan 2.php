<html>
<body>
	<form method="GET" action="">
        <label for="nama">Nama</label>
        <input type="text" name="nama"><br>
        <label for="Color">Colour</label>

        <select name="Color">
        <option value="Red">red</option>
        <option value="Green">green</option>
        <option value="Blue">blue</option>
        <option value="Pink">pink</option>
        <option value="Yellow">yellow</option>
        </select>
        
        <br>
		<input type="submit" name="submit" value="submit">
	</form>

    <?php
        if (isset($_GET['submit']))
        {
            
        $a=$_GET['nama'];
        $b=$_GET['Color'];
        
        function betting ($nama){
            if(strlen($nama>20)){
                return ((strlen($nama))*700);
            }elseif(strlen($nama>11)){
                return ((strlen($nama))*500);
            }else{
                return ((strlen($nama))*300);
            }
        }
            echo "<font color='$b'>Nama = $a <br>";
            echo "<font color='$b'>Harga bet untuk nama $a adalah = ".betting($a);
        
        }
    ?>
        

</body>
</html>