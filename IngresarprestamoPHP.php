<HTML>
<HEAD>
<TITLE>Ingresar Alumno.php</TITLE>
</HEAD>
<BODY>
<?php

//$codigoprestamo = $_POST['codigoprestamo'];
$codigoalumn = $_POST['codigoalumno'];
$codigolibr = $_POST['codigolibro'];
$fechadeprestam = $_POST['fechadeprestamo'];
$fechaparadevolve = $_POST['fechaparadevolver'];
$observacionprestam = $_POST['observacionprestamo'];



$conectar = mysql_connect("localhost","root","TechKeyWorld2015") or die 
            ("no se conecto");
if ($conectar)
      {
            echo ("Se ha conectado correctamente");
      }
mysql_select_db("bdbibliotecatkw",$conectar);

$consulta="INSERT INTO tprestamo (codigoalumno,CodigoLibro,FechaDePrestamo,
	FechaParaDevolver,EstadoPrestamo,ObservacionPrestamo)
      values ('$codigoalumn','$codigolibr','$fechadeprestam',
      	'$fechaparadevolve','sin devolver','$observacionprestam')";

$consulta1="UPDATE `bdbibliotecatkw`.`tlibro` SET `EstadoLibro`='prestado' WHERE `CodigoLibro`='$codigolibr'";

$consulta2="UPDATE `bdbibliotecatkw`.`talumno` SET `EstadoAlumno`='posee prestamo' WHERE `CodigoAlumno`='$codigoalumn'";

$hacerconsulta=mysql_query($consulta,$conectar);
if($hacerconsulta)
{ 

	
	$hacerconsulta1=mysql_query($consulta1,$conectar);
      $hacerconsulta2=mysql_query($consulta2,$conectar);
	
      echo ("Se ha grabado el registro");
}
else
{
      echo ("No se ha podido grabar el registro");
}


?>


</BODY>
</HTML>