<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Trivial - Juego</title>
        <link href="https://fonts.googleapis.com/css?family=Atomic+Age" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php $nombre = $_GET['usuario']; ?>
        <script>
          $( function() {
            $( "#accordion" ).accordion();
          } );
        </script>
        <style>
            .separacion {
                margin: 2px 0;
            }

            #separacionTop {
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h2 class="titulo text-center">Bienvenido al Trivial, <?php echo $nombre; ?> <i class="fa fa-github" aria-hidden="true"></i></h2>
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-6 botones" id="botones">
                    <div class="row" id="eleccion">
                        <div class="col"></div>
                        <div class="btn-group-vertical col-xs-12 col-md-12 col-xs-10">
                            <div id="accordion">
                                  <button class="btn btn-lg btn-danger btn-block">Harry Potter</button>
                                  <div>
                                    <p>
                                    La famosa saga de libros y peliculas sobre un joven mago, que esta señalado por el destino,
                                    sobrevivió cuando era apenas un niño de un año, y derrotó al mago más oscuro de todos los tiempos, aqui te dejamos
                                    unas preguntas a ver que sabes de él.
                                    </p>
                                    <button class="play btn btn-danger">Jugar</button>
                                  </div>
                                  <button class="btn btn-lg btn-primary btn-block">Star Wars</button>
                                  <div>
                                    <p>
                                    Te puede gustar más o menos, pero todo el mundo conoce Star Wars, el universo de George Lucas, que tantas peliculas,
                                    comics, y series nos ha traido. Demuestra que eres un experto en Star Wars y que tu camino es el de ser un Jedi.... o un Sith.
                                    </p>
                                    <button class="play btn btn-primary">Jugar</button>
                                  </div>
                                  <button class="btn btn-lg btn-success btn-block">Señor de los Anillos</button>
                                  <div>
                                    <p>
                                    Tras muchos años desaparecido, el anillo de poder, ha regresado y los hombres, elfos y enanos, entregan el anillo
                                    a unos pequeños Hobbits, para que lo destruyan y traigan de nuevo el equilibrio a la tierra media.
                                    </p>
                                    <button class="play btn btn-success">Jugar</button>
                                  </div>
                                  <button class="btn btn-lg btn-warning btn-block">Rocky Balboa</button>
                                  <div>
                                    <p>
                                    Rocky Balboa, el mejor boxeador de los pesos pesados, inspirado en el boxeador profesional Rocky Marciano,
                                    7 peliculas que nos han dejado muchos detalles, a cuál mas interesante.
                                    </p>
                                    <button class="play btn btn-warning">Jugar</button>
                                  </div>
                                </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
                <div class="col"></div>
            </div>

    <!-- Código de los niveles para jugar -->

            <div class="nivel" id="nivel">
                <button class="btn btn-dark btn-block themes">Volver a Temas</button>
                <div class="titulo text-center">
                    <h4>Niveles</h4>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-xs-12">
                        <div class="text-center" id="niveles"></div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>


            
            <!-- COdigo para las preguntas y respuestas, una vez elegida la modalidad -->
            
            <div class="row" id="preguntas">
                <div class="col-xs-12 col-md-12">
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="btn-group-vertical">
                                            <button class="separacion btn btn-block btn-dark disabled" id="separacionTop">¿Quién era Sirius Black?</button>
                                            <button class="separacion btn btn-block btn-info">El padrino de Harry Potter</button>
                                            <button class="separacion btn btn-block btn-info">El que no debe ser nombrado</button>
                                            <button class="separacion btn btn-block btn-info">El cuñado de Harry Potter</button>
                                            <button class="separacion btn btn-block btn-info">Un mortifago</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>

            <a class="btn btn-dark btn-block" href="cerrarSesion.php">Cerrar Sesión</a>
        </div>

        <script>
            for(var i = 1; i<11; i++){
                $('#niveles').append('<div class="miniboton btn-group" > <button class="miniboton btn-lg btn-info" onclick="partida('+i*10+');">'+i*10+' </button> </div>');
            }
        </script>
        <script>
            $(document).ready(function()
            {
                $(".play").on( "click", function() {   
                    $('#eleccion').toggle();
                    $('#nivel').fadeIn('slow');
                    });                    
            });
        </script>
        <script>
            $(document).ready(function()
            {
                $(".themes").on( "click", function() {
                    $('#eleccion').fadeIn('slow');
                    $('#nivel').toggle();
                    $('#preguntas').toggle();
                    });                    
            });
        </script>
        <script>
            $(document).ready(function()
            {
                $(".miniboton").on( "click", function() {
                    $('#preguntas').fadeIn('slow');
                    });                    
            });
        </script>

    </body>
</html>