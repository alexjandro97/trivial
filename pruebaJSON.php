<?php 

$sql = "SELECT * FROM `preguntas`";
	
function connectDB(){

	define("DB_HOST","localhost" );
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_DATABASE", "trivial" ); 

    $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_DATABASE);

    return $conexion;
}

function disconnectDB($conexion){

    $close = mysqli_close($conexion);

    return $close;
}

function getArraySQL($sql){
    //Creamos la conexión con la función anterior
    $conexion = connectDB();

    //generamos la consulta

        mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

	        

    if(!$result = mysqli_query($conexion, $sql)) die(); //si la conexión cancelar programa

    $datos = array(); //creamos un array

    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0;

    while($row = mysqli_fetch_array($result))
    {
        $datos[$i] = $row;
        $i++;
    }

    disconnectDB($conexion); //desconectamos la base de datos

    return $datos; //devolvemos el array
}

        $myArray = getArraySQL($sql);
        //print_r($myArray);
        $min = 1;
		$max = count($myArray);

		$random = rand($min,$max);
 ?>