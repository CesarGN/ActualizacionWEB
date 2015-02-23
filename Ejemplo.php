<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Plantilla básica de Bootstrap</title>

        <!-- CSS de Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!--link rel="stylesheet" type="text/css" href="stilesXD.css"-->
        <link rel="stylesheet" type="text/css" href="stilitos.css">

    </head>
    <body>
        <div class="container amarillo">


            <p> RECUERDA QUE BOOTSTRAP TRABAJA CON 12 UNIDADES EN EL PADRE QUE ES EL "DIV CONTAINER"</p>
            <p> SE  DIV_1 ESTA DENTRO DE  DIV_2, ENTONCES EL QUE ESTA ADENTRO (DIV_1) SE VA REFERENCIAR POR LAS MEDIDAS DE SU PADRE (DIV_2). (ABAJO SE MUESTRA UN EJEMPLO)  </p>

            <div>_____________________________________________________________________________________________________________</div>

            <div class=" row azul">

                div row

            </div>  

            <p> ESTE ES UN "DIV ROW" QUE OCUPA LOS 12 LUGARES DEL "DIV CONTAINER" (CAFESITO) </p>
            <div>_____________________________________________________________________________________________________________</div>



            <div class="row azul">

                <div class="col-lg-11 rojo">
                    div class="col-lg-11 "
                </div> 

            </div>  

            <p>  DENTRO DEL "DIV ROW" VAN "DIV" SIN EL "ROW" , EL "DIV" OCUPA 11 ESPACIOS DEL "DIV ROW" QUE ES SU PADRE AHORA </p>
            <div>_____________________________________________________________________________________________________________</div>

            <div class="row azul">

                <div class="col-lg-6 col-lg-offset-1 rojo">
                    div class="col-lg-6 col-lg-offset-1"
                </div> 

            </div>  

            <p>  DENTRO DEL "DIV ROW" VAN "DIV" SIN EL "ROW" , EL "DIV" OCUPA 6 ESPACIOS DEL "DIV ROW" QUE ES SU PADRE AHORA </p>
            <p>  CON LA CLASE "col-lg-offset-X" LE ESTA DICIENDO QUE DEJE 1 ESPACIO A LA IZQ Y COMIENZA A PARTIR DE ESTE    </p>

            <div>_____________________________________________________________________________________________________________</div>



            <div class="row azul">

                <div class="col-lg-4 col-lg-offset-1 rojo">
                    div class="col-lg-4 col-lg-offset-1"
                </div> 
                <div class="col-lg-7  verde">
                    div class="col-lg-7"
                </div> 

            </div>  

            <p>  EL DIV ROJO DEJA 1 ESPACIO Y COMIENZA A PARTIR DE AQUI, TIENE UNA LONGITUD DE 4 ESPACIOS </p>
            <p>  ACABANDO EL DIV ROJO COMIENZA EL VERDE CON 7 UNIDADES.    LA SUMA TIENE QUE SER 12    </p>

            <div>_____________________________________________________________________________________________________________</div>


            <div class="row azul">

                <div class="col-lg-4 col-lg-offset-1 rojo">
                    div class="col-lg-4 col-lg-offset-1"
                </div> 
                <div class="col-lg-4 col-lg-offset-3 verde">
                    div class="col-lg-4 col-lg-offset-3"
                </div> 

            </div>  

            <p>  EL DIV ROJO DEJA 1 ESPACIO Y COMIENZA A PARTIR DE AQUI, TIENE UNA LONGITUD DE 4 ESPACIOS </p>
            <p>  ACABANDO EL DIV ROJO COMIENZA EL VERDE, DEJA 3 ESPACIOS VACIOS Y TIENE UNA LONGITUD DE 4. EN TOTAL SUMAN 12   </p>

            <div>_____________________________________________________________________________________________________________</div>


            <div class="row azul">

                <div class="col-lg-2 rojo">
                    div class="col-lg-2"
                </div> 
                <div class="col-lg-6 col-lg-offset-1 verde">
                    div class="col-lg-6 col-lg-offset-1"
                </div> 
                <div class="col-lg-2 col-lg-offset-1 verde">
                    div class="col-lg-2 col-lg-offset-1"
                </div> 

            </div>  

            <p>  LA SUMA ENTRE ESPACIOS Y LONGITUDES SON 12   </p>

            <div>_____________________________________________________________________________________________________________</div>



            <div class="row azul">



                <div class="col-lg-10  col-lg-offset-1 rojo">
                    col-lg-10  col-lg-offset-1         
                </div> 
                <div class="col-lg-10  col-lg-offset-1 rojo">
                    <div class="col-lg-6 verde">
                        div class="col-lg-6 "
                    </div> 
                    <div class="col-lg-6 amarillo">
                        div class="col-lg-6"
                    </div> 
                </div> 

                <div class="col-lg-10  col-lg-offset-1 rojo">
                    <div class="col-lg-6 verde">
                        <div class="col-lg-6 amarillo">
                            div class="col-lg-6"
                        </div> 
                        <div class="col-lg-6 azul">
                            div class="col-lg-6"
                        </div> 
                    </div> 
                    <div class="col-lg-6 amarillo">
                        <div class="col-lg-6 verde">
                            div class="col-lg-6"
                        </div> 
                        <div class="col-lg-6 azul">
                            div class="col-lg-6"
                        </div> 
                    </div> 
                </div> 

            </div>  

            <p>  AQUI SE VE COMO LOS DIV HIJOS TOMAN LOS 12 ESPACIOS DE SU PADRE   </p>

            <div>_____________________________________________________________________________________________________________</div>



            <div class="row">
                <div class="rojo col-lg-2">
                    aqui va el boton
                </div>         
            </div>  
            
            <div class="row">
                <div class="rojo">
                    aqui va la etiqueta gris
                </div>         
            </div>  
            
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 verde">
                    aqui va el carrucel
                </div>         
            </div>  
            
             <div class="row">
                <div class="col-lg-2 verde">
                    aqui van las opciones
                </div>   
                 
                  <div class="col-lg-9 col-lg-offset-1 verde">
                    aqui van las ofertas de trabajo
                </div>    
            </div>  
            
             <div class="row">
                <div class="col-lg-8 col-lg-offset-2 verde">
                    aqui va el carrucel de muchas imagenes
                </div>   
                 
                    
            </div>  

            <p>  ASI ME IMAGINO LA ESTRUCTURA DE LA PAGINA AMOR, ASI COMO LA ESTAS HACIENDO   </p>




        </div>


    </body>


</html>