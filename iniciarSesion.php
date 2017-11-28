<?php 
    session_start();

    $user = strtolower($_POST['user']);
    $pass = $_POST['pass'];
    $pass = hash("sha256", $pass);

    if(isset($_SESSION['user'])){
        header('Location: contenido.php');
    }

    /* Declaro las variables fijas para la conexion a la base de datos */

    define("DB_HOST","localhost" );
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_DATABASE", "trivial" ); 
    
    //realizo la conexion
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
    $sql = "SELECT * FROM usuarios WHERE user = '$user' AND password = '$pass'"; 
        
    $resultado = mysqli_query($con, $sql);

    if(mysqli_connect_errno())
    {
        echo "Fallo al conectarse. Intentelo más tarde.";
    } else {

        if($resultado = mysqli_query($con, $sql)){
            while($objeto = mysqli_fetch_object($resultado)){
                if ($objeto->user == $user && $objeto->password == $pass) {
                    header("Location: contenido.php?usuario=$user");
                } else {
                    echo "Almu";//header('Location: index.php');
                }
                echo "por aqui1";
            }
           echo "SAlgo";//header('Location: index.php');     
        }
        //header('Location: index.php');
    }

 ?>