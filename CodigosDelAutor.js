function codigoAutor() 
{
	document.write("<label for=''>Codigo del Autor  </label>");
	document.write("<select name='codigoautor'>");
	for(var i=1; i<=100; i++ )
	{
		document.write("<option value="+i+">"+i+"</option>");
	}	
	document.write("</select>");
}