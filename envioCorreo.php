<?php

          $destinatario='azelps071del@gmail.com';

          $nombre=$_POST['name'];
          $email=$_POST['email'];
          $numberContactanos=$_POST['numberContactanos'];
          $dateContactanos=$_POST['dateContactanos'];
          $direccionContactanos=$_POST['direccionContactanos'];
          $message=$_POST['message'];

          $header="Enviando desde la pagina de Pizza-al-Paso";

          $mensajeCompleto=$mensaje . "\n Atentamente: " . $nombre;


          mail($destinatario, $message, $mensajeCompleto,$header);

          echo "<script> alert ('Correo enviado correctamente') </script>";
         
?>