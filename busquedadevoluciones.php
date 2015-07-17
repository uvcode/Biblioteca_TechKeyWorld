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
$estadoprestam = $_POST['estadoprestamo'];
$observacionprestam = $_POST['observacionprestamo'];


echo "".$codigoalumn."<BR>";
echo "".$codigolibr."<BR>";
echo "".$fechadeprestam."<BR>";
echo "".$fechaparadevolve."<BR>";
echo "".$estadoprestam."<BR>";
echo "".$observacionprestam."<BR>";


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
      	'$fechaparadevolve','$estadoprestam','$observacionprestam')";

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