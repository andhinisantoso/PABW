<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	    <title>Latihan 1</title>
    </head>
    <body>
	    <?php 
		    function Swap(&$A,&$B){
			    $temp = $A;
			    $A = $B;
			    $B = $temp;
            }
            
		    $P = 8;
		    $Q = 9;
		    echo "Variable sebelumnya : <br>";
		    echo "Var_1 : $P <br>";
		    echo "Var_2 : $Q <br><br>";
		    Swap($P,$Q);
		    echo "Variable setelah ditukar : <br>";
		    echo "Var_1 : $P <br>";
		    echo "Var_2 : $Q <br>";
	    ?>
    </body>
</html>