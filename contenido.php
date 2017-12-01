<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta charset="UTF-8">
        <title>Trivial - Juego</title>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link href="js/jquery.raty.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/estilos.css">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.js" type="text/javascript"></script>
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
            
            .gold {
                background: #FFBF00;
            }

            #separacionTop {
                margin-bottom: 5px;
            }
        </style>
        <?php require('pruebaJSON.php'); ?>
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
                                  <button class="btn btn-lg btn-danger btn-block" value="economia">Economía</button>
                                  <div>
                                    <p>
                                    La ciencia que estudia las finanzas, ¿las dominas, seras un empresario de futuro y de exito? Compruebalo en este cuestionario.
                                    </p>
                                    <button class="play btn btn-danger">Jugar</button>
                                  </div>
                                  <button class="btn btn-lg btn-primary btn-block" value="historia">Historia</button>
                                  <div>
                                    <p>
                                    Es la disciplina que estudia y expone, los acontecimientos transcuridos en el pasado, ¿crees que podras con esto? demuestralo!
                                    </p>
                                    <button class="play btn btn-primary">Jugar</button>
                                  </div>
                                  <button class="btn btn-lg btn-success btn-block" value="filosofia">Filosofía</button>
                                  <div>
                                    <p>
                                    ¿Sabes de filosofía? Conjunto de reflexiones sobre la esencia de la vida y los efectos de las cosas naturales.
                                    </p>
                                    <button class="play btn btn-success">Jugar</button>
                                  </div>
                                  <button class="btn btn-lg btn-warning btn-block" value="lengua">Lengua</button>
                                  <div>
                                    <p>
                                        Preguntas sobre nuestra lengua materna, el Español, demuestra que sabes de nuestra lengua, autores etc.
                                    </p>
                                    <button class="play btn btn-warning">Jugar</button>
                                  </div>
                                  <button class="btn btn-lg btn-ligth btn-block" value="ingles">Ingles</button>
                                  <div>
                                    <p>
                                    Preguntas sobre la lengua extranjera más estudiada en el mundo, demuestra que dominas el idioma con las siguentes preguntas.
                                    </p>
                                    <button class="play btn btn-light">Jugar</button>
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
                    <div class="jumbotron col-xs-12">
                        <div class="points text-center">
                        <div class="trofeos" id="trofeos"></div>
                        <div id="score"></div>
                        </div>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col-xs-10">
                                        <div class="btn-group-vertical">
                                            <button class="separacion btn btn-block btn-dark disabled" id="separacionTop"><?php echo $myArray[$random][3]; ?></button>
                                            <button class="separacion respuestas btn btn-block btn-info" value="<?php echo $myArray[$random][4]; ?>"><?php echo $myArray[$random][4]; ?></button>
                                            <button class="separacion respuestas btn btn-block btn-info" value="<?php echo $myArray[$random][5]; ?>"><?php echo $myArray[$random][5]; ?></button>
                                            <button class="separacion respuestas btn btn-block btn-info" value="<?php echo $myArray[$random][6]; ?>"><?php echo $myArray[$random][6]; ?></button>
                                            <button class="separacion respuestas btn btn-block btn-info" value="<?php echo $myArray[$random][7]; ?>"><?php echo $myArray[$random][7]; ?></button>
                                            <div class="separacion btn btn-block solucion"></div>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                </div>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-dark btn-block" href="cerrarSesion.php">Cerrar Sesión</a>
        </div>
    
        <!-- DE AQUI EN ADELANTE TENEMOS EL CODIGO DE JAVASCRIPT PARA DARLE FUNCIONALIDAD A LA PAGINA -->

        <script>
            for(var i = 1; i<11; i++){
                $('#niveles').append('<div class="miniboton btn-group" > <button class="miniboton btn-lg btn-info" onclick="partida('+i*10+');">'+i*10+'<i class="fa fa-times" aria-hidden="true"></i> </button> </div>');
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
        
        <script>
            var siguiente;
            var numeroCaja; 
            var puntos = 2; 
            var puntosTop = 2;
            var numeroVerbos = 20;
            iniciaPartida();


            function iniciaPartida() {
                $('.respuestas').click( function(){
                        comprueba();
                }); 
            }

             function comprueba(){
                var respuesta = $('.respuesta').val();
                console.log(respuesta);
                var respuestaCorrecta = $myArray[$random][8];
                console.log(respuestaCorrecta);
                if ( respuesta === respuestaCorrecta){
                    $('.solucion').text('CORRECTO!').addClass("btn-success").fadeOut("slow").fadeIn("slow");
                    contador += 0.50;             
                }
                else {
                    $('.solucion').text('Error!').addClass("btn-danger");
                    contador = 0;
                }

                $('#score').raty({
                    readOnly    : true,
                    score       : puntos,
                    number      : 10,
                    halfShow    : false
                });

                if (puntos == 10) {
                    puntosTop++;
                    puntos=0;
                    ponerTrofeos();
                }

                function ponerTrofeos() {
                    $('#trofeos').raty({
                    readOnly    : true,
                    score       : contadorEstrellas,
                    number      : contadorEstrellas,
                    halfShow    : false,
                    starType    : 'i'
                });
                
                $('#trofeos').find('i').removeClass("start-on-png");
                    switch (puntosTop) {
                        case 10 : $('#trofeos').find('i').addClass("fa fa-trophy fa-3x gold");
                        case 20 : $('#trofeos').find('i').addClass("fa fa-trophy fa-3x gold");
                        case 30 : $('#trofeos').find('i').addClass("fa fa-trophy fa-3x gold");
                        case 40 : $('#trofeos').find('i').addClass("fa fa-trophy fa-3x gold");
                        case 50 : $('#trofeos').find('i').addClass("fa fa-trophy fa-3x gold");
                        case 60 : $('#trofeos').find('i').addClass("fa fa-trophy fa-3x gold");
                        case 70 : $('#trofeos').find('i').addClass("fa fa-trophy fa-3x gold");  
                        case 80 : $('#trofeos').find('i').addClass("fa fa-trophy-o fa-3x gold");
                        case 90 : $('#trofeos').find('i').addClass("fa fa-trophy fa-3x gold");
                    }
                }
            }
        </script>
    </body>
</html>