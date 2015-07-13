<HTML>
<HEAD>
<TITLE>Ingresar Alumno.php</TITLE>
</HEAD>
<BODY>
<?php

$codigoprestamo = $_POST['codigoprestamo'];
$codigoalumno = $_POST['codigoalumno'];
$codigolibro = $_POST['codigolibro'];
$fechadeprestamo = $_POST['fechadeprestamo'];
$fechaparadevolver = $_POST['fechaparadevolver'];
$estadoprestamo = $_POST['estadoprestamo'];
$observacionprestamo = $_POST['observacionprestamo'];



$conectar = mysql_connect("localhost","root","TechKeyWorld2015") or die 
            ("no se conecto");
if ($conectar)
      {
            echo ("Se ha conectado correctamente");
      }
mysql_select_db("bdbibliotecatkw",$conectar);

$consulta="INSERT INTO tprestamo ( CodigoAlumno,CodigoLibro,FechaDePrestamo ,
	FechaParaDevolver,EstadoPrestamo,ObservacionPrestamo)
      values ('$codigoprestamo','$codigoalumno','$codigolibro','$fechadeprestamo',
      	'$fechaparadevolver','$estadoprestamo','$observacionprestamo')";

$hacerconsulta=mysql_query($consulta,$conectar);
if($hacerconsulta)
{
      echo ("Se ha grabado el registro");
}
else
{
      echo ("No se ha podido grabar el registro");
}


?>


</BODY>
</HTML>