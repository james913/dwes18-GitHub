<HTML>
<head>

 
</head>

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


    <h1 align="center">Formulario-Validación </h1>

    <!--La parte php que se añade es para envíar
      la información del formulario al mismo documento en el que trabajamos-->
      
    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post"  enctype="multipart/form-data">

        <fieldset>

        <p> Nombre:</p>
         <input type="text" name="nombre" value="<?php if(isset($nombre)) echo "$nombre"; ?>"  >
        <p> Apellido:</p>
         <input type="text" name="apellido" value="<?php if(isset($apellido)) echo "$apellido"; ?>" >
        <p>Contraseña:</p>
          <input type="password" name="contraseña" >
        <p> Dirección:</p>
          <input type="text" name="direccion" value="<?php if(isset($direccion)) echo "$direccion"; ?>"  >
        <p> telefono:</p>
          <input type="text" name="telefono" value="<?php if(isset($telefono)) echo "$telefono"; ?>"  >
        <p> Fecha de Nacimiento:</p>
         <input type="date" name="fecha" value="<?php if(isset($fecha_nacimiento)) echo "$fecha_nacimiento"; ?>"  >
        <p>Correo Electrónico:</p>
          <input type="email" name="correo" value="<?php if(isset($correo_electronico)) echo "$correo_electronico"; ?>"  >
        <p>Ciclo Formativo:</p>
        <select name="ciclo">
          <option value="DAW" selected="selected">DAW</option>
          <option value="DAM">DAM</option>
          <option value="ASIR">ASIR</option>
          <option value="FP-BASICA">FP-BÁSICA</option>
       </select>
      </fieldset>
      <input type="reset" > <input type="submit" name="enviar">

    </form>




<?php if (isset($_POST["enviar"])):?>

 <?php 
 /*Validar campos obligatorios*/
 if (empty($nombre)){
     echo"No ha rellenado el campo: nombre";
     echo "<br/>";
 }if (empty($contraseña)){
     echo"";
 }if (empty($telefono)){
     echo"No ha rellenado el campo: Telefono";
     echo "<br/>";
 } if(empty($fecha_nacimiento)){
     echo"No ha rellenado el campo: Fecha de Nacimiento ";
     echo "<br/>";
 }if (empty($correo_electronico)){
     echo"No ha rellenado el campo: Correo Electrónico";
     echo "<br/>";
 }
 
 
 ?>

 <h2>Mostrar datos enviados:</h2>
  
  Nombre: <?php isset($nombre) ; echo $nombre ?> <br/>
 Apellido: <?php isset ($apellido); print $apellido ?> <br/>
 Contraseña:<?php isset($contraseña) ? print  $contraseña: ""; ?> <br/>
 Dirección: <?php isset ($direccion); echo $direccion?> <br/>
 Teléfono: <?php isset ($telefono); echo $telefono?><br/>
 Fecha de Nacimiento:<?php isset($fecha_nacimiento); echo $fecha_nacimiento?> <br/>
 Correo Electrónico: <?php isset($correo_electronico);echo $correo_electronico ?><br/>
 Cico Formativo <?php isset($ciclo); echo ": " .$ciclo ?> <br/>
 
 

 
 
<?php endif?> 







  </body>

</HTML>