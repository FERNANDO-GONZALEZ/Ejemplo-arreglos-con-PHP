<?php

    if (isset($_POST['Enviar'])){
       $fila = $_POST['fila'];
       $puesto = $_POST['puesto'];
       $estado = $_POST['estado'];
       $silleteria = $_POST['sillas'];
       
       $i = 0;
       
       for($m=0;$m<5;$m++){
           for($n=0;$n<5;$n++){
               $i = 5*$m + $n;
               $sillas[$m][$n] = substr($silleteria,$i,1);
           }
               $i = 0;
       }
       // Para Reservar
       if($estado == "reservar"){
           if($sillas[$fila - 1][$puesto - 1] == 'L'){
               $sillas[$fila - 1][$puesto - 1] = 'R';
           }
           else if($sillas[$fila - 1][$puesto - 1] == 'R'){
               echo '<script language="javascript">alert("Silla Reservada");</script>';
           }
           else if($sillas[$fila - 1][$puesto - 1] == 'V'){
               echo '<script language="javascript">alert("Silla Vendida");</script>';  
           }
       }
         // Para Comprar
       if($estado == "comprar"){
           if($sillas[$fila - 1][$puesto - 1] == 'L' || $sillas[$fila - 1][$puesto - 1] == 'R'){
               $sillas[$fila - 1][$puesto - 1] = 'V';
           }
           else if($sillas[$fila - 1][$puesto - 1] == 'V'){
               echo '<script language="javascript">alert("Silla Vendida");</script>';
           }
       }     
       
              // Para Liberar
       if($estado == "liberar"){
           if($sillas[$fila - 1][$puesto - 1] == 'R'){
               $sillas[$fila - 1][$puesto - 1] = 'L';
           }
           else if($sillas[$fila - 1][$puesto - 1] == 'V'){
               echo '<script language="javascript">alert("Silla Vendida");</script>';
           }
           else if($sillas[$fila - 1][$puesto - 1] == 'L'){
               echo '<script language="javascript">alert("Silla Libre");</script>';  
           }
       }
       
       mostrar($sillas);
    }

