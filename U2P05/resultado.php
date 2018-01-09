<?php
 if (!isset($_POST["enviar"])){
     header("Location: formulario2.php"); //Si alguien entra a la página sin haber hecho el formulario, esta le devolverá
 }
?>
<html>
<head><meta charset="UTF-8"/></head>
<body>

<?php
    /*Creamos la función de filtrado para dejar limpios de errores los campos a introducir en el
    formulario*/
    $correcto=true;
    function filtrado($dato){
        $dato=trim($dato); //Elimina los espacios antes y después de los datos
        $dato=stripslashes($dato); //Elimina las barras \
        return $dato;
    }
    
    function validar_contraseña($contraseña){
        if (!empty($contraseña) && strlen($contraseña)>5){
            return $contraseña;
        }else echo "<script>alert('Error, la contraseña no cumple los requisitos de validación (Mayor a 5 carácteres)')</script>";
        $correcto=false;
    }
    function validar_telefono($telefono){
        if (strlen($telefono)>=9){
            return ($telefono);
        }else echo "<script>alert('Error, el teléfono  no cumple los requisitos de validación (min-9números)')</script>";
        $correcto=false;
    }

    
    
    if (isset($_POST["enviar"])){ //Con esto aplicamos el metodo filtrado para poner los campos bien
        $nombre= filtrado($_POST["nombre"]);
        $apellido= filtrado($_POST["apellido"]);
        $contraseña= filtrado($_POST["contraseña"]);
        $contraseña=  validar_contraseña($contraseña);
        $direccion= filtrado($_POST["direccion"]);
        $telefono= filtrado($_POST["telefono"]);
        $telefono= validar_telefono($telefono);
        $fecha_nacimiento= filtrado($_POST["fecha"]);
        $correo_electronico= filtrado($_POST["correo"]);
        $ciclo = filtrado($_POST["ciclo"]);
        
        
    }

    ?>

<?php 
 /*Validar campos obligatorios*/
 if (empty($nombre)){
     echo"No ha rellenado el campo: nombre";
     $correcto=false;
     echo "<br/>";
 }if (empty($contraseña)){
     $correcto=false;
     echo"";
 }if (empty($telefono)){
     echo"No ha rellenado el campo: Telefono";
     $correcto=false;
     echo "<br/>";
 } if(empty($fecha_nacimiento)){
     $correcto=false;
     echo"No ha rellenado el campo: Fecha de Nacimiento ";
     echo "<br/>";
 }if (empty($correo_electronico)){
     $correcto=false;
     echo"No ha rellenado el campo: Correo Electrónico";
     echo "<br/>";
 }
 
 
 ?>


<h2>Mostrar datos enviados:</h2>
  
  Nombre: <?php isset($_POST["nombre"]) ; echo$_POST["nombre"] ?> <br/>
  
 Apellido: <?php isset ($_POST["apellido"]); 
 if($correcto==true){
     print $_POST["apellido"] ;
 }else 
     print " Error, no se ha completado correctamente";?> <br/>
 
 Contraseña:<?php isset($_POST["contraseña"]); 
 if ($correcto==true){
     print  $_POST["contraseña"]; 
 }else print " Error, no se ha completado correctamente";?> <br/>
 
 Dirección: <?php isset ($_POST["direccion"]); echo $_POST["direccion"]?> <br/>
 Teléfono: <?php isset ($_POST["telefono"]); 
 if($correcto==true){
     
 echo $_POST["telefono"];
 }else   print " Error, no se ha completado correctamente";?> <br/>
   
 Fecha de Nacimiento:<?php isset($_POST["fecha"]); echo $_POST["fecha"]?> <br/>
 Correo Electrónico: <?php isset($_POST["correo"]);echo $_POST["correo"] ?><br/>
 Cico Formativo <?php isset($_POST["ciclo"]); echo ": " .$_POST["ciclo"] ?> <br/>
 
 <a href="formulario2.php">Volver</a>


</body>
</html>
