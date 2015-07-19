<HTML>
<HEAD>
<TITLE>Ingresar Alumno.php</TITLE>
</HEAD>
<BODY>
<?php

//$codigoprestamo = $_POST['codigoprestamo'];
$codprestamo= $_POST['codigoprestamo'];
$codigoalumno= $_POST['codigoalumno'];
$codlibro= $_POST['codlibro'];
$obs = $_POST['observacion'];

$conectar = mysql_connect("localhost","root","TechKeyWorld2015") or die 
            ("no se conecto");
if ($conectar)
      {
            echo ("Se ha conectado correctamente");
      }
mysql_select_db("bdbibliotecatkw",$conectar);

$consulta="INSERT INTO `bdbibliotecatkw`.`tdevolucion` 
(`CodigoPrestamo`, `EstadoDevolucion`, `ObservacionDevolucion`, `FechaDevolucion`) 
VALUES ('$codprestamo', 'devuelto', '$obs', '2015-02-05');
";

$consulta1="UPDATE `bdbibliotecatkw`.`tprestamo` 
SET `EstadoPrestamo`='devuelto' WHERE `CodigoPrestamo`='$codprestamo';;
";

$consulta2="UPDATE `bdbibliotecatkw`.`tlibro` SET `EstadoLibro`='disponible' WHERE `CodigoLibro`='$codigolibro'";

$consulta3="UPDATE `bdbibliotecatkw`.`talumno` SET `EstadoAlumno`='autorizado' WHERE `CodigoAlumno`='$codigoalumno'";

$hacerconsulta=mysql_query($consulta,$conectar);
if($hacerconsulta)
{
	$hacerconsulta1=mysql_query($consulta1,$conectar);
	$hacerconsulta2=mysql_query($consulta2,$conectar);
	$hacerconsulta2=mysql_query($consulta3,$conectar);
      echo ("Se ha grabado el registro");
}
else
{
      echo ("No se ha podido grabar el registro");
}


?>


</BODY>
</HTML>