<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tugas Mingguan</title>
    </head>
    <body>
	    <form method="post" action="TM_7hasil.php" enctype="multipart/form-data">
		    <label>Nama : </label><br>
		        <input type="text" name="name" required="required"><br><br>
		    <label>Alamat : </label><br>
		        <input type="text" name="address"><br><br>
		    <label>Jenis Kelamin : </label><br>
		        <input type="radio" name="gender" value="male">Laki-Laki<br>
		        <input type="radio" name="gender" value="female">Perempuan<br><br>
		    <label>Golongan Darah : </label><br>
		        <select name="blood">
		            <option value="A">A</option>
		            <option value="B">B</option>
		            <option value="AB">AB</option>
		            <option value="O">O</option>
		        </select><br><br>
		    <label>Hobby : </label><br>
		        <input type="checkbox" name="hoby1" value="Volly"> Berenang<br>
		        <input type="checkbox" name="hoby2" value="Basket"> Bulutangkis<br>
		        <input type="checkbox" name="hoby3" value="Futsal"> Futsal<br><br>
		    <label>Keterangan : </label><br>
		        <textarea name="desc" rows="5" cols="30"> </textarea><br><br><br>
		    <input type="submit" value="Kirim" name="sent">
	    </form>
    </body>
</html>