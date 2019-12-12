<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	    <title>Tugas Mingguan</title>
    </head>
    <body>
	    <?php 
		    function hasil($array){
			    print_r($array);
		    }
		
		    if (isset($_POST['sent'])) {
    			if(empty($_POST['hoby1'])){
		    	    $hobi1 = ""; // default value
			    }else{
			        $hobi1 = $_POST['hoby1'];
			    }

            if(empty($_POST['hoby2'])){
			    $hobi2 = ""; // default value
			}else{
			    $hobi2 = $_POST['hoby2'];
			}

			if(empty($_POST['hoby3'])){
			    $hobi3 = ""; // default value
			}else{
			    $hobi3 = $_POST['hoby3'];
			}

			if(empty($_POST['gender'])){
			    $jenis_kelamin = ""; // default value
			}else{
			    $jenis_kelamin = $_POST['gender'];
			}

            $user = [
                'nama' => $_POST['name'],
                'alamat' => $_POST['address'],
                'gender' => $jenis_kelamin,
                'goldar' => $_POST['blood'],
                'hobi1' => $hobi1,
                'hobi2' => $hobi2,
                'hobi3' => $hobi3,
                'keterangan' => $_POST['desc']
            ];
            hasil($user);
            }
	    ?>
    </body>
</html>