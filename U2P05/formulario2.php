<html>
<head>

</head>
<body>
<h1 align="center">Formulario-Validación </h1>

    <!--La parte php que se añade es para envíar
      la información del formulario al mismo documento en el que trabajamos-->
      
    <form  action="resultado.php"  method="post"  enctype="multipart/form-data">

        <fieldset>

        <p> Nombre:</p>
         <input type="text" name="nombre" value="<?php if(isset($nombre)) echo "$nombre"; ?>"  >
        <p> Apellido:</p>
         <input type="text" name="apellido" value="<?php if(isset($apellido)) echo "$apellido"; ?>" >
        <p>Contraseña:</p>
          <input type="password" name="contraseña" >
        <p> Dirección:</p>
          <input style="background-color: cyan" type="text" name="direccion" value="<?php if(isset($direccion)) echo "$direccion"; ?>"  >
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

</body>
</html>