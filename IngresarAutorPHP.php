<HTML>
<HEAD>
<TITLE>Ingresar Autor.php</TITLE>
</HEAD>
<BODY>
<?php

$NombreAutor = $_POST['NombreAutor'];
$ApellidosAlutor = $_POST['ApellidosAlutor'];
$NacionalidadAutor = $_POST['NacionalidadAutor'];

echo "".$NombreAutor."";
echo "".$ApellidosAlutor."";
echo "".$NacionalidadAutor."";


$conectar = mysql_connect("localhost","root","TechKeyWorld2015") or die 
            ("no se conecto");
if ($conectar)
      {
            echo ("Se ha conectado correctamente");
      }
mysql_select_db("bdbibliotecatkw",$conectar);

$consulta="INSERT INTO TAutor ( NombreAutor, ApellidosAutor,NacionalidadAutor)
      values ('$NombreAutor','$ApellidosAlutor','$NacionalidadAutor')";

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