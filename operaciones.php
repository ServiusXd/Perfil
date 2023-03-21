<?php
	if (isset($_POST['enviar'])){
		$numero1 = $_POST['numero_1'];
		$numero2 = $_POST['numero_2'];
		$operacionArealizar = $_POST['opcion'];	
		
		switch ($operacionArealizar) {
			case '1':
				echo "El resultado de la suma es: ";
				$resultado = $numero1+$numero2;
				echo " <input type='text' name='resultado' value='$resultado'>";
				break;
			case '2':
				echo "El resultado de la resta es: ";
				$resultado = $numero1-$numero2;
				echo " <input type='text' name='resultado' value='$resultado'>";
				break;
			case '3':
				echo "El resultado de la multiplicacion es: ";
				$resultado = $numero1*$numero2;
				echo " <input type='text' name='resultado' value='$resultado'>";
				break;
			case '4':
				echo "El resultado de la divison es: ";
				$resultado = $numero1/$numero2;
				echo " <input type='text' name='resultado' value='$resultado'>";
				break;
			default:
				echo "NaIntroduce valores validos";
				break;
		}	
	}
	
    echo "<br><br><a href='calculadora.html'> Regresar a la calculadora</a>";
?>