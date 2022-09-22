<?php
     
     if( !empty($_POST) ){
   
     //print_r( $_POST );
       // echo "<hr/>";
       $txt_id = utf8_decode($_POST["txt_id_estudiante"]);
        $txt_codigo = utf8_decode($_POST["txt_carnet"]);
        $txt_nombres = utf8_decode($_POST["txt_nombres"]);
        $txt_apellidos = utf8_decode($_POST["txt_apellidos"]);
        $txt_direccion = utf8_decode($_POST["txt_direccion"]);
        $txt_telefono = utf8_decode($_POST["txt_telefono"]);
        $txt_genero = utf8_decode($_POST["txt_genero"]);
        $txt_email = utf8_decode($_POST["txt_email"]);
        $txt_fecha_nacimiento = utf8_decode($_POST["txt_fecha_naciento"]);

        $txt_fn = utf8_decode($_POST["txt_fn"]);

      include("datos_conexion.php");
        $db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
        $sql ="";
        if(isset($_POST['btn_agregar'])  ){
          $sql = "INSERT INTO db_escuela(id_estudiante,carnet,nombres,apellidos,direccion,telefono,genero,email,fecha_nacimiento) VALUES ('". $txt_id_estudiante."','". $txt_nombres ."','". $txt_apellidos ."','". $txt_direccion ."','". $txt_telefono ."','". $txt_fn ."',". $drop_puesto .");";
        }
        if( isset($_POST['btn_modificar'])  ){
          $sql = "update db_escuela set codigo='". $txt_id_estudiantes ."',carnet='". $txt_carnet ."',nombres='". $txt_nombres ."',apellidos='". $txt_apellidos ."',direccion='". $txt_direccion ."',telefono='". $txt_telefono ."',genero='". $txt_genero ."',email=". $drop_email ." where fecha_nacimiento  = ". $txt_fn.";";
        }
        if( isset($_POST['btn_eliminar'])  ){
          $sql = "delete from db_estudiante where id_estudiante = ". $txt_id.";";
        }
         
          if ($db_conexion->query($sql)===true){
            $db_conexion->close();
           
            header('Location: /bd_escuela');
            //header('Location: index.php');
           
          }else{
            $db_conexion->close();
          
          }

      }
     
    
      
      ?>