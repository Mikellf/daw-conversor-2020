<?php 
include_once('./src/conversor.php');
?>
<!DOCTYPE html>

<head>
<meta charset="utf-8">
<!--Bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Conversor de moneda</title>
<!--un fisquito de CSS embebido-->
        <style type="text/css">
            body {
            background-image: url("https://www.pictorem.com/collection/900_Rizwana-Khan_Orange%20Gradient%20Background.jpg"); 
            background-position: center; background-repeat: no-repeat; background-size: cover;}
            h2 {font-size: 50px;}
            p {font-size: 18px; text-align: center;}
             .jumbotron {
                border-radius: 15px;
                background-color: #007db5;
                color: #fff; } 
            }
        </style>



</head>

<body>
<div class="container-fluid pt-5">
    <!--SECCIÓN PPAL 2-8-2 ---------------------------------------------------------------------------------------------------->
	<div class="row m-5">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<h2 class="text-center text-white mb-5">
				Conversor de moneda
            </h2>
            <!--JUMBOTRON------------------------------------------------------------------------------------>
			<div class="jumbotron shadow-lg">
                
                    <!--FORMULARIO---------------------------------------------------------->
                    
                    <form  class="text-center"  action="index.php" method="post">
                        Introduzca una cantidad: &nbsp;&nbsp;&nbsp;   <input type="text"  class="rounded"  name="dolar" id="dolar"><br/>
                       <p class="mt-5"> <input type="submit" class="btn btn-warning btn-large text-white"  name="btnconvertir" id="btnconvertir"  value="Convertir"></p>
                       
                    </form> 
                    <!--FIN FORMULARIO-->

                    
               
                  
                    

        

			</div><!--FIN JUMBOTRON-->
		</div>
		<div class="col-md-2">
		</div>
    </div><!--FIN SECCIÓN 2-8-2 -->
    
    <!--SECCIÓN TXT------------------------------------------------------------------------------------------------------------>
	<div class="row">
        <div class="col-md-2"></div>
		<div class="col-md-8 text-white">
			<p>
			Creación una aplicación en PHP que permita adivinar un número generado aleatoriamente entre 1 y 20.	
            </p>
            <p class="text-right pr-5"><strong>Miguel Laverdure Fernández</strong></p>
        </div>
        <div class="col-md-2"></div>
    </div><!--FIN SECCIÓN TXT -->

</div> <!--FIN CONTAINER-->

 
</body>

</html>