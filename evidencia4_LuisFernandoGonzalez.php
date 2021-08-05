<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style ="background : #b3c0c8"><br><br>
           <?php
            $arrEncabezado = array("ESCENARIO");
            $columnas = array ("",1,2,3,4,5);
            $arrP1 = array (1,'L','L', "L", 'L','L');
            $arrP2 = array (2,'L','L', "L", 'L','L');
            $arrP3 = array (3,'L','L', "L", 'L','L');
            $arrP4 = array (4,'L','L', "L", 'L','L');
            $arrP5 = array (5,'L','L', "L", 'L','L');
            $key = array("Amarillo" => "Felicidad", "Azul" => "Armonia", "Rojo" => "Amor" );
            $directorio = array($columnas,$arrP1,$arrP2,$arrP3,$arrP4,$arrP5);
           ?>
            <table border = '1' width = '20%' cellspacing = '2' align = center>
                <caption><b>- - - - - - - - - ESCENARIO - - - - - - - - -</b></caption>
        <?php
                //foreach ($arrEncabezado as $encabezado) { //1
                   // echo "<td><b>$encabezado</b></td>" ;
                     //}  //1
                foreach($directorio as $persona)  { //2
                    echo "<tr>";
                    foreach($persona as $llave => $celda){ //3
                       echo"<td align = center>$celda</td>"; 
                    } //3
                }
        ?>

                </table>

                   <p align = center>
                       <label><b>Fila: <input type="text" name="fila" autofocus required></b></label><br><br>
                       <label><b>Puesto: <input type="text" name="puesto" autofocus required width = 30></b></label><br>
                       <input type="radio" id="reservar" name="reservar" value="R">
                       <label><b>Reservar</b></label><br>
                       <input type="radio" id="comprar" name="comprar" value="C">
                       <label><b>Comprar</b></label><br>
                       <input type="radio" id="liberar" name="liberar" value="L">
                       <label><b>Liberar</b></label><br><br>
                       <button name="Enviar" type="button">Enviar</button>
                       <button name="Borrar" type="button">Borrar</button>
                    </p>

    </body>
</html>
