# Proyecto_civil
if(strlen($_POST['name']) >= 1 && strlen($_POST['numero']) >= 1 && strlen($_POST['email']) >= 1){
		$name = trim($_POST['name']);
		$numero = trim($_POST['numero']);
		$email = trim($_POST['email']);
		$fechareg = date("d/m/y");
		$consulta = "INSERT INTO datos(nombre, numero, email, fecha_reg) VALUES ('$name','$numero','$email','$fechareg')";
		$resultado = mysqli_query($enlace,$consulta);
		if($resultado){
			?> 
			<h3 class="ok">¡Te has inscripto correctamente!</h3>
			<?php
		} else {
			?> 
			<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			<?php
		}
	}   else {
			?> 
			<h3 class="bad">¡Por favor complete los campos!</h3>
			<?php
	}
}
#33

<?php
include("conexión.php");

if(isset($_POST['register'])){
    if(
        (strlen($_POST['Nombre']) >= 1 &&
        (strlen($_POST['numero']) >= 1 &&
        (strlen($_POST['email']) >= 1 &&

    ){
        $Nombre = trim($_POST['Nombre']);
        $numero = trim($_POST['numero']);
        $email = trim($_POST['email']);
        $fecha = date("d/m/y");

        $consulta = "INSERT INTO Datos(Nombre, numero, email, fecha) VALUES ('$Nombre','$numero','$email','$fecha')";     
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
        	?> 
        	<h3 class="succes">¡Te has escripto correctamente!</h3>
           <?php
        } else {
        	?> 
        	<h3 class="error">¡Ups ha ocurrido un error!</h3>
           <?php
        
    }   else {
        	?> 
        	<h3 class="error">¡Por favor complete los campos!</h3>
           <?php
    }
}











<?php
include("conexión.php");

if(isset($_POST['register'])){
    if(
        (strlen($_POST['Nombre']) >= 1) &&
        (strlen($_POST['numero']) >= 1) &&
        (strlen($_POST['email']) >= 1)
    ){
        $Nombre = trim($_POST['Nombre']);
        $numero = trim($_POST['numero']);
        $email = trim($_POST['email']);
        $fecha = date("d/m/y");

        $consulta = "INSERT INTO Datos(Nombre, numero, email, fecha) VALUES ('$Nombre','$numero','$email','$fecha')";     
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
            echo "<h3 class='success'>¡Te has registrado correctamente!</h3>";
        } else {
            echo "<h3 class='error'>¡Ups, ha ocurrido un error!</h3>";
        }
    } else {
        echo "<h3 class='error'>¡Por favor completa todos los campos!</h3>";
    }
}
?>
