<HTML>
<HEAD>
<TITLE>Ingresar Categoria del libro.php</TITLE>
</HEAD>
<BODY>
<?php

$codigoautor = $_POST['codigoautor'];
$nomcategoria = $_POST['nomcategoria'];


echo "".$codigoautor."";
echo "".$nomcategoria."";

$conectar = mysql_connect("localhost","root","TechKeyWorld2015") or die 
            ("no se conecto");
if ($conectar)
      {
            echo ("Se ha conectado correctamente");
      }
mysql_select_db("bdbibliotecatkw",$conectar);

$consulta="INSERT INTO tcategoria ( CodigoCategoria,NombreCategoria)
      values ('$codigoautor','$nomcategoria')";

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