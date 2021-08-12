<?php

function mostrar ($sillas){
    $i = 1;
    echo "<table style = 'border-collapse:collapse; border: 2px solid black; margin: 20px auto'>";
    echo "<tr>";
    echo "<th colspan=6>Escenario</th>";
    
    $cabecera =['X',1,2,3,4,5];
    echo "<tr>";
    
    foreach($cabecera as $cab){
        echo "<td style = 'border: 2px solid black;'>$cab</td>";
    }
     foreach($sillas as $silla){
        echo "<tr>";
        echo "<td style = 'border: 2px solid black';>$i</td>";
            foreach($silla as $fila){
                echo "<td style = 'border : 2px solid black;'>$fila</td>";
            }
            $i = $i +1;
    }   
    echo "<table/>";
}

