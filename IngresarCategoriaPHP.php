<HTML>
<HEAD>
<TITLE>Ingresar Categoria del libro.php</TITLE>
</HEAD>
<BODY>
<?php

$nomcategoria = $_POST['nomcategoria'];

echo "".$nomcategoria."";
if($nomcategoria !=null)
{
$conectar = mysql_connect("localhost","root","TechKeyWorld2015") or die 
            ("no se conecto");
if ($conectar)
      {
            echo ("Se ha conectado correctamente");
      }

mysql_select_db("bdbibliotecatkw",$conectar);

$consulta="INSERT INTO tcategoria(NombreCategoria)
      values ('$nomcategoria')";

$hacerconsulta=mysql_query($consulta,$conectar);
if($hacerconsulta)
{
      echo ("Se ha grabado el registro");
}
else
{
      echo ("No se ha podido grabar el registro");
}
}
else
{
	echo("no se ingreso todos los datos");
}

?>


</BODY>
</HTML>