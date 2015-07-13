<HTML>
<HEAD>
<TITLE>Ingresar Libro.php</TITLE>
</HEAD>
<BODY>
<?php

$CodigoLibro = $_POST['CodigoLibro'];
$CodigoAutor = $_POST['CodigoAutor'];
$CodigoCategoria = $_POST['CodigoCategoria'];
$NombreLibro = $_POST['NombreLibro'];
$EdicionLibro = $_POST['EdicionLibro'];
$EstadoLibro = $_POST['EstadoLibro'];



echo "".$CodigoLibro."";
echo "".$CodigoAutor."";
echo "".$CodigoCategoria."";
echo "".$NombreLibro."";
echo "".$EdicionLibro."";
echo "".$EstadoLibro."";

$conectar = mysql_connect("localhost","root","TechKeyWorld2015") or die 
            ("no se conecto");
if ($conectar)
      {
            echo ("Se ha conectado correctamente");
      }
mysql_select_db("bdbibliotecatkw",$conectar);

$consulta="INSERT INTO TLibro ( CodigoLibro, CodigoAutor,CodigoCategoria,NombreLibro,EdicionLibro,EstadoLibro)
      values ('$CodigoLibro','$CodigoAutor','$CodigoCategoria','$NombreLibro','$EdicionLibro','$EstadoLibro')";

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