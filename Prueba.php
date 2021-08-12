<!DOCTYPE html>
<!--
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cine</title>
    </head>
    <body  style = "text-align : center"><br><br>
        <main style = "background : #b3c0c8">
            <h1>CINE</h1>
            
                <?php
                    include './escenario.php';
                    include './ocupacion.php';
                    if (isset($_REQUEST["Reset"]) || !isset($_REQUEST["Enviar"])){
                        $sillas = [
                            ['L','L','L','L','L'],
                            ['L','L','L','L','L'],
                            ['L','L','L','L','L'],
                            ['L','L','L','L','L'],
                            ['L','L','L','L','L']
                        ];
                        mostrar($sillas);
                    }
                ?>
                <form method="post">
                     <p align = center>
                       <label><b>Fila: <input type="text" name="fila" autofocus required></b></label><br><br>
                       <label><b>Puesto: <input type="text" name="puesto" autofocus required width = 30></b></label><br>
                       <input type="radio" name="estado" value="reservar">
                       <label><b>Reservar</b></label><br>
                       <input type="radio" name="estado" value="comprar">
                       <label><b>Comprar</b></label><br>
                       <input type="radio" name="estado" value="liberar">
                       <label><b>Liberar</b></label><br><br>
                       <input type="submit" name="Enviar" value="Enviar">
                       <input type="submit" name="Reset" value="Reset">
                    </p><br>
                    
                    <?php
                        $cadena = "";
                        foreach ($sillas as $silla){
                            foreach($silla as $puesto){
                                $cadena = $cadena.$puesto;
                            }
                        }
                        //echo "<input type=text name=sillas style='display:none';value =$cadena>";  
                        echo "<input type=text name=sillas value =$cadena>";
                    ?>
                </form> 
         </main>           
    </body>
</html>

