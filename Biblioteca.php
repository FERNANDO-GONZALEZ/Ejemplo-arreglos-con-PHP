<?php

if (isset($_POST['submit'])){
    operaciones($_POST['v1'],$_POST['v2'],$_POST['v3']);
}

function operaciones($A, $B, $C) {
            switch ($C) {
            case 'S':
                $suma = $A + $B;
                $sum = number_format($suma);
                echo "La Suma entre $A  y  $B  da  $sum<br/>";
            break;
            case 'R':
                $resta = $A - $B;
                $res = number_format($resta);
                echo "La resta entre $A  y  $B  da  $res<br/>";
            break;
            case 'M':
                $multiplicacion = $A * $B;
                $mul = number_format($multiplicacion);
                echo "La multiplicación entre $A  y  $B  da  $mul<br/>";
            break;
            case 'D':
                $division = $A / $B;
                $div = number_format($division,2, '.', '');
                echo "La división entre $A  y  $B  da $div<br/>";
            break;
            default:
            echo "Operación no permitida !";
            }
}
       /* }
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?> 