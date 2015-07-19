
<<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>




<script>

function datos(codigocat){
    opener.document.formingresarlibro.codigocategoria.value = codigocat;
    //opener.document.neo.origen.value = nom;
    //opener.document.neo.lugar.value = lug;
    //opener.document.neo.lstname.value = nro;
    window.close();
}


function Resaltar_On(GridView)
{
    if(GridView != null)
    {
    GridView.originalBgColor = GridView.style.backgroundColor;
    GridView.style.backgroundColor='#DBE7F6';
    GridView.style.cursor = 'hand'; 
    }
}

function Resaltar_Off(GridView)
{
    if(GridView != null)
    {
    GridView.style.backgroundColor = GridView.originalBgColor;    
    }
}
function Close() {    
    window.close();
}

//]]>
</script>

<?php
//if($_GET{"enviar"}<>""){
  // if($_GET{"seleccion"}==2){
    //    $valor="selected";
      // $qq="codigo";
   //}else
     //   $qq="nombre";
//}
?>

                    <!DOCTYPE html>
                    <html lang="es">
                    <head>
                        <meta charset="UTF-8">
                        <title>Biblioteca Virtual....!!! :P</title>
                        <link rel="stylesheet" href="css/ed-grid.css">
                        <link rel="stylesheet" href="css/estilos.css">
                        <script type="text/javascript" src="js/validacion_form.js"></script>
                    </head>
                    <body class="">
                        <header class="header">
                            <div class="grupo">
                                <div class="caja movil-30"><img class="img_logo" src="img/logo.png" alt=""></div>
                                <div class="caja movil-70"><h1 class="titulo_pag">Escuela Profesional de Ingenieria de Sistemas e Informatica</h1></div>
                            </div>
                        </header>
                        <nav class="menu">
                            <ul>
                              <li><a href="#">ADMINISTRADOR</a></li>
                              <li><a href="#">ACCEDER AL SISTEMA</a></li>
                            </ul>
                        </nav>

                        <SCRIPT LANGUAGE="JavaScript">
                        function envia(pag){ 
                            document.form.action= pag 
                            document.form.submit() 
                        } 
                        </script>

                        <section class="contenido">
                        <div class="caja total"><p class="titulo_g">BUSQUEDA DE CATEGORIA POR NOMBRE</p>
                        </div>
                        <form id="form1" name="form1" method="get" action="?">
                
                     <div class="caja movil-total input">
                    <label for="q"></label>
                    <input type="text" name="q" id="q" placeholder="NOMBRE"/>
                    <input type="submit" name="enviar" id="enviar" value="Buscar" />
                    <BR>
                    <BR>
                    </div>
            </form>

<FORM onkeypress="javascript:return 
WebForm_FireDefaultButton(event, &#39;ctl00_ContentPlaceMain_btnBuscar&#39;)">


<table   border="1" cellspacing="0" cellpadding="0">
    <tr bgcolor="#AEE4FF">

        <td  width="37">Num</td>
        <td  width="37">Codigo Categoria</td>
        <td  width="66">Nombre Categoria</td>
        
        
        
        
    </tr>

<?php

  //if($_GET['q']<>""){

   //$bsqnombre=$_POST["nombrealumno"];
    //$bsqnombre=$_POST["q"];
    $bsqnombre=$_GET["q"];
    //echo "".$bsqnombre."";

    $i=0;

        $servidor="localhost";
        $userbase="root";
        $passbase="TechKeyWorld2015";
        $basedatos="bdbibliotecatkw";

        // Connect to the database and checks if the user / password
        // combinaison matches any existing database entry
        $mysql_link = mysql_connect($servidor,$userbase,$passbase) or die("Falla no alcanza base de datos");
        mysql_select_db($basedatos, $mysql_link) or die ("falla!");
        $query = "SELECT * FROM tcategoria where NombreCategoria like '%$bsqnombre%'";
        //where NombreAlumno like '%".$bsqnombre."%'  
        //echo $query;
        // $r_query = mysql_query($query, $mysql_link);// or mysql_error() and die("Failed to execute_query");
        $r_query = mysql_query($query, $mysql_link) or die("Failed to execute_query");
        
       
        while ($row = mysql_fetch_array($r_query)) {
            
         


            $i++;
            $codigocat=$row{'CodigoCategoria'};
            $codigocat=str_replace(" ", "&nbsp;", $codigocat);

            $nombrecat=$row{'NombreCategoria'};
            $nombrecat=str_replace(" ", "&nbsp;", $nombrecat);

                       
            //$Estado=$row{'EstadoAlumno'};
            //$Estado=str_replace(" ", "&nbsp;", $Estado);
                       
            //<tr OnMouseOver='Resaltar_On(this);' OnMouseOut='Resaltar_Off(this);
            //' OnClick=datos('$codigo','$colegio','$lugar','$id')>
            
            echo "
            <tr OnMouseOver='Resaltar_On(this);' OnMouseOut='Resaltar_Off(this);
            ' OnClick=datos('$codigocat')>
                <td>$i</td>
                <td>$codigocat</td>
                <td>$nombrecat</td>
                     
              
             
            </tr>";
      }
    //}
?>

</table>

</FORM>

</body>
</html>