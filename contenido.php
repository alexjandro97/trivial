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
        <script src="js/preguntas.js"></script>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.js" type="text/javascript"></script>
        <script>
          $( function() {
            $( "#accordion" ).accordion();
          } );
        </script>
        <script>
            //meter el random para las preguntas
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
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h2 class="titulo text-center">Bienvenido al Trivial<i class="fa fa-github" aria-hidden="true"></i></h2>
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-6 botones">
                    <div class="row" id="eleccion">
                        <div class="col"></div>
                        <div class="btn-group-vertical col-xs-12 col-md-12 col-xs-10">
                            <div id="accordion">
                                  <button class="btn btn-lg btn-danger btn-block" value="economia">Economía</button>
                                  <div>
                                    <p>
                                    La ciencia que estudia las finanzas, ¿las dominas, seras un empresario de futuro y de exito? Compruebalo en este cuestionario.
                                    </p>
                                    <button class="play btn btn-danger" id="economia">Jugar</button>
                                  </div>
                                  <button class="btn btn-lg btn-primary btn-block" value="historia">Historia</button>
                                  <div>
                                    <p>
                                    Es la disciplina que estudia y expone, los acontecimientos transcuridos en el pasado, ¿crees que podras con esto? demuestralo!
                                    </p>
                                    <button class="play btn btn-primary" id="historia">Jugar</button>
                                  </div>
                                  <button class="btn btn-lg btn-success btn-block" value="filosofia">Filosofía</button>
                                  <div>
                                    <p>
                                    ¿Sabes de filosofía? Conjunto de reflexiones sobre la esencia de la vida y los efectos de las cosas naturales.
                                    </p>
                                    <button class="play btn btn-success" id="filosofia">Jugar</button>
                                  </div>
                                  <button class="btn btn-lg btn-warning btn-block" value="lengua">Lengua</button>
                                  <div>
                                    <p>
                                        Preguntas sobre nuestra lengua materna, el Español, demuestra que sabes de nuestra lengua, autores etc.
                                    </p>
                                    <button class="play btn btn-warning" id="lengua">Jugar</button>
                                  </div>
                                  <button class="btn btn-lg btn-ligth btn-block" value="ingles">Ingles</button>
                                  <div>
                                    <p>
                                    Preguntas sobre la lengua extranjera más estudiada en el mundo, demuestra que dominas el idioma con las siguentes preguntas.
                                    </p>
                                    <button class="play btn btn-light" id="ingles">Jugar</button>
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
                        <div class="progress" id="blips" style="height: 25px; font-size: 18px;">
                            <div class="menosTiempo progress-bar progress-bar-striped  progress-bar-animated bg-success" role="progressbar" style="width: 100%;">10</div>
                            <div class="masTiempo progress-bar bg-dark" role="progressbar" style="width: 0%;"></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="win col-5 align-content-between ">Puntos:<div class="trofeos" id="trofeos"></div></div>
                            <div class="col-5 align-content-between vida">Vidas: <div id="vidas"></div></div>
                        </div>    
                        <br>
                        <div class="row">
                            <!--<div class="col"></div>-->
                            <!--<div class="col-xs-12">
                                <div class="row">-->
                                    <div class="col"></div>
                                    <div class="col-xs-10">
                                        <div class="btn-group-vertical" id="botones">
                                            <div class="separacion btn btn-block solucion"></div>
                                            <br>
                                        </div>
                                    </div>
                                  <div class="col"></div>
                                </div><!--
                            </div>
                            <div class="col"></div>
                        </div>-->
                    </div>
                </div>
            </div>
            <a class="btn btn-dark btn-block" href="cerrarSesion.php">Cerrar Sesión</a>
        </div>
    
        <!-- DE AQUI EN ADELANTE TENEMOS EL CODIGO DE JAVASCRIPT PARA DARLE FUNCIONALIDAD A LA PAGINA -->
        
        <script>
            var vidas = 3;
            var contadorWin = 5;



            iniciaPartida();

            function iniciaPartida() {
                cambiaLosBotones();
                aparecenTrofeos();
            }




        function cambiaLosBotones() {

            randomEco = Math.floor(Math.random() * preguntasEconomia.length);
            randomHis = Math.floor(Math.random() * preguntasHistoria.length);
            randomFilo = Math.floor(Math.random() * preguntasFilosofia.length);
            randomLen = Math.floor(Math.random() * preguntasLengua.length);
            randomIng = Math.floor(Math.random() * preguntasIngles.length);

            if ($('#economia').click(function(){
                $('#botones').empty();
                $('#botones').append('<button class="separacion btn btn-block btn-dark disabled pregunta" id="separacionTop">'+preguntasEconomia[randomEco][0]+' </button>');
                $('#botones').append('<button id="boton1" class="separacion respuestas btn btn-block btn-info">'+ preguntasEconomia[randomEco][1] +'</button>');
                $('#botones').append('<button id="boton2" class="separacion respuestas btn btn-block btn-info">'+ preguntasEconomia[randomEco][2] +'</button>');
                $('#botones').append('<button id="boton3" class="separacion respuestas btn btn-block btn-info">'+ preguntasEconomia[randomEco][3] +'</button>');
                $('#botones').append('<button id="boton4" class="separacion respuestas btn btn-block btn-info">'+ preguntasEconomia[randomEco][4] +'</button>');
            }));
        
            if ($('#historia').click(function(){
                $('#botones').empty();
                $('#botones').append('<button class="separacion btn btn-block btn-dark disabled pregunta" id="separacionTop">'+preguntasHistoria[randomHis][0]+' </button>');
                $('#botones').append('<button id="boton1" class="separacion respuestas btn btn-block btn-info">'+ preguntasHistoria[randomHis][1] +'</button>');
                $('#botones').append('<button id="boton2" class="separacion respuestas btn btn-block btn-info">'+ preguntasHistoria[randomHis][2] +'</button>');
                $('#botones').append('<button id="boton3" class="separacion respuestas btn btn-block btn-info">'+ preguntasHistoria[randomHis][3] +'</button>');
                $('#botones').append('<button id="boton4" class="separacion respuestas btn btn-block btn-info">'+ preguntasHistoria[randomHis][4] +'</button>');
            }));    
            
            if ($('#filosofia').click(function(){
                $('#botones').empty();
                $('#botones').append('<button class="separacion btn btn-block btn-dark disabled pregunta" id="separacionTop">'+preguntasFilosofia[randomFilo][0]+' </button>');
                $('#botones').append('<button id="boton1" class="separacion respuestas btn btn-block btn-info">'+ preguntasFilosofia[randomFilo][1] +'</button>');
                $('#botones').append('<button id="boton2" class="separacion respuestas btn btn-block btn-info">'+ preguntasFilosofia[randomFilo][2] +'</button>');
                $('#botones').append('<button id="boton3" class="separacion respuestas btn btn-block btn-info">'+ preguntasFilosofia[randomFilo][3] +'</button>');
                $('#botones').append('<button id="boton4" class="separacion respuestas btn btn-block btn-info">'+ preguntasFilosofia[randomFilo][4] +'</button>');
            })); 
            
            if ($('#lengua').click(function(){
                $('#botones').empty();
                $('#botones').append('<button class="separacion btn btn-block btn-dark disabled pregunta" id="separacionTop">'+preguntasLengua[randomLen][0]+' </button>');
                $('#botones').append('<button id="boton1" class="separacion respuestas btn btn-block btn-info">'+ preguntasLengua[randomLen][1] +'</button>');
                $('#botones').append('<button id="boton2" class="separacion respuestas btn btn-block btn-info">'+ preguntasLengua[randomLen][2] +'</button>');
                $('#botones').append('<button id="boton3" class="separacion respuestas btn btn-block btn-info">'+ preguntasLengua[randomLen][3] +'</button>');
                $('#botones').append('<button id="boton4" class="separacion respuestas btn btn-block btn-info">'+ preguntasLengua[randomLen][4] +'</button>');
            }));
            
            if ($('#ingles').click(function(){
                $('#botones').empty();
                $('#botones').append('<button class="separacion btn btn-block btn-dark disabled pregunta" id="separacionTop">'+preguntasIngles[randomIng][0]+' </button>');
                $('#botones').append('<button id="boton1" class="separacion respuestas btn btn-block btn-info">'+ preguntasIngles[randomIng][1] +'</button>');
                $('#botones').append('<button id="boton2" class="separacion respuestas btn btn-block btn-info">'+ preguntasIngles[randomIng][2] +'</button>');
                $('#botones').append('<button id="boton3" class="separacion respuestas btn btn-block btn-info">'+ preguntasIngles[randomIng][3] +'</button>');
                $('#botones').append('<button id="boton4" class="separacion respuestas btn btn-block btn-info">'+ preguntasIngles[randomIng][4] +'</button>');
            }));

                $('#boton1').click( function(){
                    console.log("Pulsado 1 ")
                    comprueba(1);
                });
                
                $('#boton2').click( function(){
                    console.log("Pulsado 2 ")
                    comprueba(2);
                });
                $('#boton3').click( function(){
                    console.log("Pulsado 3")
                    comprueba(3);
                });
                $('#boton4').click( function(){
                    console.log("Pulsado 4")
                    comprueba(4);
                });

                function comprueba(pulsado){
               
                    if(pulsado === preguntasEconomia[randomEco][5]){
                       //contador=contador+10;
                       $('.pregunta').html('Correcto');
                    }else{
                        //vidas=vidas-1;
                        $('.pregunta').html('Incorrecto');
                        iniciaPartida();
                    }
                }
            
        }

        function activarContador() {
                var timerId = 20;
                var ctr=10;
                var sum=0;
                var max=10;
                timerId = setInterval(function () {
                // interval function
                ctr--;
                sum++;
                $('.menosTiempo').attr("style","width:" + ctr*max + "%");

                if (ctr > 5) {
                    $('.menosTiempo').addClass('bg-success');
                } else if (ctr > 3) {
                    $('.menosTiempo').addClass('bg-warning');
                } else {
                    $('.menosTiempo').addClass('bg-danger');
                }

                $('.masTiempo').attr("style","width:" + sum*max + "%");
                $('.menosTiempo').text(" "+(ctr*max)/10);
                // max reached?
                if (ctr == 0){
                  clearInterval(timerId);
                  $('.masTiempo').text("Se te acabó el tiempo");
                  $('.masTiempo').addClass('bg-danger');
                  $('.respuestas').prop('disabled', true);
                  $('#botones').replaceWith('<div class="reiniciar"><a href="contenido.php" class="btn btn-block btn-outline-dark">Perdiste, Salir</a></div>');
                  vidas--;
                }    
              }, 2000);
            }

            //    PROBANDO EL RATY.JS    


            $('#vidas').raty({
                score       : vidas,
                readOnly    : true,
                hints       : ['Estas casi Muerto', 'Te libras', 'Vivito y Coleando'],
                start       : vidas,
                number      : 3,
                startOn     : "images/heart.png",
                startOff    : "images/heartBreak.png"
            });


            function aparecenTrofeos() {
                $('#trofeos').raty({
                readOnly    : true,
                score       : contadorWin,
                halfShow    : false,
                number      : 10,
                startType   : 'i'
            });

                //NO FUNCIONA ESTA PUTA MIERDA!!!
            $('#trofeos').find('i').removeClass("start-on-png");
                switch (contadorWin) {
                    case 1 : $('#trofeos').find('i').addClass("fa fa-smile fa-3x gold");break;
                    case 2 : $('#trofeos').find('i').addClass("fa fa-smile fa-3x gold");break;
                    case 3 : $('#trofeos').find('i').addClass("fa fa-smile fa-3x gold");break;
                    case 4 : $('#trofeos').find('i').addClass("fa fa-smile fa-3x gold");break;
                    case 5 : $('#trofeos').find('i').addClass("fa fa-smile fa-3x gold");break;
                    case 6 : $('#trofeos').find('i').addClass("fa fa-smile fa-3x gold");break;
                    case 7 : $('#trofeos').find('i').addClass("fa fa-smile fa-3x gold");break;
                    case 8 : $('#trofeos').find('i').addClass("fa fa-smile fa-3x gold");break;
                    case 9 : $('#trofeos').find('i').addClass("fa fa-smile fa-3x gold");break;
                    case 10 : $('#trofeos').find('i').addClass("fa fa-smile fa-3x gold");break;
                }

            }




        </script>


        <script>
            for(var i = 1; i<11; i++){
                $('#niveles').append('<div class="miniboton btn-group" > <button class="miniboton btn-lg btn-info" onclick="activarContador();">'+i*10+'<i class="fa fa-times" aria-hidden="true"></i> </button> </div>');
            }
        </script>

        <!--       DE AQUI EN ADELANTE ESTAN LOS CAMBIOS DE PANTALLA CON LOS DISTINTOS MENUS            -->

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
                    $('#preguntas').fadeOut();
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