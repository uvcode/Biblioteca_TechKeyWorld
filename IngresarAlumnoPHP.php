<HTML>
<HEAD>
<TITLE>Ingresar Alumno.php</TITLE>
</HEAD>
<BODY>
<?php

$codigoalumno = $_POST['codigoalumno'];
$DNIAlumno = $_POST['DNIAlumno'];
$NombreAlumno = $_POST['NombreAlumno'];
$ApellidosAlumno = $_POST['ApellidosAlumno'];
$CelularAlumno = $_POST['CelularAlumno'];
$CorreoAlumno = $_POST['CorreoAlumno'];
$EstadoAlumno = $_POST['EstadoAlumno'];



echo "".$codigoalumno."";
echo "".$DNIAlumno."";
echo "".$NombreAlumno."";
echo "".$ApellidosAlumno."";
echo "".$CelularAlumno."";
echo "".$CorreoAlumno."";
echo "".$EstadoAlumno."";

$conectar = mysql_connect("localhost","root","TechKeyWorld2015") or die 
            ("no se conecto");
if ($conectar)
      {
            echo ("Se ha conectado correctamente");
      }
mysql_select_db("bdbibliotecatkw",$conectar);

$consulta="INSERT INTO TAlumno ( CodigoAlumno,DNIAlumno, NombreAlumno,ApellidosAlumno,CelularAlumno,CorreoAlumno,EstadoAlumno)
      values ('$codigoalumno','$DNIAlumno','$NombreAlumno','$ApellidosAlumno','$CelularAlumno','$CorreoAlumno','$EstadoAlumno')";

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