<?php
    if (isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $edad = $_POST['edad'];
        $numerocuenta = $_POST['numerocuenta'];
        $sexo = $_POST['sexo'];	

        #0 es SI, 1 es NO
        $vacunado = $_POST['vacunado'];

        if ($sexo == 1) {$resultadosexo="Hombre";}
        elseif ($sexo == 2) {$resultadosexo="Mujer";}
        elseif ($sexo == 3) {$resultadosexo="No sabe";}

		$archivo = "Lista_Vacunados.txt";
		$textoAguardar = $nombre.",".$apellido1.",".$apellido2.",".$edad.",".$numerocuenta.",".$resultadosexo.","."\n";
		$archivoManipulable = fopen($archivo, "a+");
		fwrite($archivoManipulable, $textoAguardar);
		fclose($archivoManipulable);
		
		$fp = fopen($archivo, "r");
		$contenido = fread($fp, filesize($archivo));
		$datoPArtido = explode(",","$contenido");

		$nummero_de_registros = (sizeof($datoPArtido)-1)/6;
		$datos_totales = (sizeof($datoPArtido)-1);

        echo "
        <table border='1'align='center'>
			<thead>
			<tr>
				<th colspan='6'>LISTA DE VACUNADOS</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<th>Nombre</th>
				<th colspan = '2'>Apellidos</th>
				<th>Numero de Cuenta</th>
				<th>Edad</th>
				<th>Sexo</th>
			</tr>
			</tbody>
		</table>
        ";
		for ($i=0; $i < $nummero_de_registros; $i++) { 
			$contador = $i*6;
			$nombre = $datoPArtido[$contador];
			$apellido1 = $datoPArtido[$contador+1];
			$apellido2 = $datoPArtido[$contador+2];
			$numerocuenta = $datoPArtido[$contador+3];
			$edad = $datoPArtido[$contador+4];
			$resultadosexo = $datoPArtido[$contador+5];

			echo "<table border='1' align='center'>
			<tbody>
			<tr>
			<th>$nombre</th>
			<th>$apellido1</th>
			<th>$apellido2</th>
			<th>$edad</th>
			<th>$numerocuenta</th>
			<th>$resultadosexo</th>
			</tr>
			</tbody>
			</table>";
		
		}
    }

    echo "<br><br><a href='encuesta.html'> Regresar a la encuesta</a>";

?>