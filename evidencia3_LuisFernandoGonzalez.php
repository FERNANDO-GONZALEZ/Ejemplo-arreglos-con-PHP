<!DOCTYPE html>
<!--
Proyecto realizado por:  Luis Fernando González Bermúdez
Al instructor: Camilpo Enrique González Fernández
Programa de Formación: Desarrollo web con PHP.
Resultados de Aprendizaje Alcanzar: Aplicar funciones en el lenguaje PHP para el mejoramiento de la estructura del programa y la eficiencia del código.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operaciones</title>
    </head>
    <body align ="center"><br /><br />
    <label><b>OPERACIONES ARITMÉTICAS</b></label><br /><br />
     <form name="formulario" action="" method="post">
        <label><b>Primer Valor:</b></label>
        <input type="text" name="v1"><br /><br />
        <label><b>Segundo Valor:</b></label>
        <input type="text" name="v2" ><br /><br />
        <label><b>Operación a realizar:</b></label>
        <select name="v3" id="">
            <option value ="S">Suma</option>
            <option value ="R">Resta</option>
            <option value ="M">Multiplicación</option>
            <option value ="D">División</option>
        </select>
       <br /><br />
        <button type="submit" name="submit" style = "background-color:yellowgreen"><b>Calcular datos</b></button><br /><br />
     </form>

        <?php
            include 'Biblioteca.php'
        ?>
    </body>
</html>
