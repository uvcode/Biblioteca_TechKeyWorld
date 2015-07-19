
<<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>




<script>
 
function datos(codprestamo,codalumno,nomalumno,apealumno,codlibro,nomlibro,nomautor,fecprestamo,fecdevolver,estprestamo)

{
    opener.document.formdevoluciones.codigoprestamo.value = codprestamo;
    opener.document.formdevoluciones.codigoalumno.value = codalumno;
    opener.document.formdevoluciones.nomalumno.value = nomalumno;
    opener.document.formdevoluciones.apealumno.value = apealumno;
    opener.document.formdevoluciones.codlibro.value = codlibro;
    opener.document.formdevoluciones.nomlibro.value = nomlibro;
    opener.document.formdevoluciones.nomautor.value = nomautor;
    opener.document.formdevoluciones.fechaprestamo.value = fecprestamo;
    opener.document.formdevoluciones.fechadevolucion.value = fecdevolver;
    opener.document.formdevoluciones.estado.value = estprestamo;
    
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
                        <div class="caja total"><p class="titulo_g">BUSQUEDA DE PRESTAMO POR NOMBRE</p>
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
        <td  width="66">PRESTAMO</td>
        <td width="240">CODIGO ALUMNO</td>
        <td width="208">NOMBRE ALUMNO</td>
        <td  width="37">APELLIDO ALUMNO</td>
        <td  width="66">CODIGO LIBRO</td>
        <td  width="66">NOMBRE LIBRO</td>
        <td width="240">NOMBRE AUTOR</td>
        <td width="208">FECHA PRESTAMO</td>
        <td width="208">FECHA DEVOLVER</td>
        <td width="208">ESTADO </td>
       
        
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
        $query = "SELECT B.CodigoPrestamo, A.CodigoAlumno, A.NombreAlumno , A.ApellidosAlumno,C.CodigoLibro,
                    C.NombreLibro , D.NombreAutor,B.FechaDePrestamo, B.FechaParaDevolver, B.EstadoPrestamo 
                    from bdbibliotecatkw.Talumno A ,bdbibliotecatkw.Tprestamo B,bdbibliotecatkw.Tlibro C,
                    bdbibliotecatkw.Tautor D where A.CodigoAlumno= B.CodigoAlumno and B.CodigoLibro=C.CodigoLibro
                    and c.CodigoAutor=d.CodigoAutor  and B.EstadoPrestamo='sin devolver'
                    and a.NombreAlumno like '%$bsqnombre%'";

        $r_query = mysql_query($query, $mysql_link) or die("Failed to execute_query");
        
       
        while ($row = mysql_fetch_array($r_query)) {
            
         


            $i++;
            $codprestamo=$row[0];
            $codprestamo=str_replace(" ", "&nbsp;", $codprestamo);

            $codalumno=$row[1];
            $codalumno=str_replace(" ", "&nbsp;", $codalumno);

            $nomalumno=$row[2];
            $nomalumno=str_replace(" ", "&nbsp;", $nomalumno);

            $apealumno=$row[3];
            $apealumno=str_replace(" ", "&nbsp;", $apealumno);


            $codlibro=$row[4];
            $codlibro=str_replace(" ", "&nbsp;", $codlibro);

            $nomlibro=$row[5];
            $nomlibro=str_replace(" ", "&nbsp;", $nomlibro);

            $nomautor=$row[6];
            $nomautor=str_replace(" ", "&nbsp;", $nomautor);

            $fecprestamo=$row[7];
            $fecprestamo=str_replace(" ", "&nbsp;", $fecprestamo);

            $fecdevolver=$row[8];
            $fecdevolver=str_replace(" ", "&nbsp;", $fecdevolver);
            
            $estprestamo=$row[9];
            $estprestamo=str_replace(" ", "&nbsp;", $estprestamo);


        
            
            echo "
          
            <tr OnMouseOver='Resaltar_On(this);' OnMouseOut='Resaltar_Off(this);
            ' OnClick=datos('$codprestamo','$codalumno','$nomalumno','$apealumno','$codlibro','$nomlibro','$nomautor','$fecprestamo','$fecdevolver','$estprestamo')>
                <td>$i</td>
                <td>$codprestamo</td>
                <td>$codalumno</td>
                <td>$nomalumno</td>  
                <td>$apealumno</td>  
                <td>$codlibro</td>
                <td>$nomlibro</td>
                <td>$nomautor</td>
                <td>$fecprestamo</td>  
                <td>$fecdevolver</td>    
                <td>$estprestamo</td>  
             
            </tr>";
      }
    //}
?>

</table>

</FORM>

</body>
</html>