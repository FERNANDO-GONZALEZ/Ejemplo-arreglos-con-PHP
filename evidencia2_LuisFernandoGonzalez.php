<!DOCTYPE html>
<!--
Presentado por: Luis Fernando González Bermúdez
Cédula: 16.708.826
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Evidencia 2 - PHP </title>
    </head>
    <body align = center style="background-color:cyan">
        <h1>Listado de personas</h1>
        <p>
            <?php
            $arrEncabezado = array("Nombres","Dirección","Teléfono","Fecha de nacimiento","Color Favorito","Significado");
            $arrP1 = array ('Juan Perez','Car. 45 # 45-56', "3456789", '23/12/1997','Amarillo');
            $arrP2 = array ('Pablo Manrique','Calle 23 # 12-19', "3214567", '12/10/1980','Verde');
            $arrP3 = array ('Nancy Peña','Ave 34 # 16-12', "2135423", '07/06/2020','Rojo');
            $arrP4 = array ('Fernando González','Calle 15 # 43A 50', "4359375", '09/02/1975','Azul');
            $key = array("Amarillo" => "Felicidad", "Azul" => "Armonia", "Rojo" => "Amor" );
            $directorio = array($arrP1,$arrP2,$arrP3,$arrP4);
            ?>
            <table border = '1' width = '60%' cellspacing = '0' align = center>
            <?php    
                foreach ($arrEncabezado as $encabezado) { //1
                    echo "<td align = center><b>$encabezado</b></td>";  
                     }  //1
                foreach($directorio as $persona)  { //2
                    echo "<tr>";
                    foreach($persona as $llave => $celda){ //3
                       echo"<td align = center>$celda</td>"; 
                    } //3
                if($llave == 4){ //4
                   echo "<td align = center>";
                   echo isset($key[$celda])?$key[$celda]: "No tiene correspondencia"; //? sino existe
                   echo"</td>";
                } //4
                } //2
            ?>        
            </table>
        </p>
    </body>
</html>
