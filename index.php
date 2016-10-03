<html>
<head>
<title>Aplicacion Mobile con Jquey Mobile</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<script>
$(function()
{

	$("#listview li").on("click",function()
	{
		var rel = $(this).text();
		$("#rel").val(rel);
		$("#form-listview").submit();
	});

});
</script>
</head>
<body>

<div data-theme="b" data-position="fixed"><h2 align="center">Mobile 1</h2></div>
<header data-role="navbar">
	<ul>
	<li><a href="index.php"  data-icon="home" class="ui-btn-active">Inicio</a></li>
	<li><a href="sobre.php"  data-icon="info">Sobre nosotros</a></li>
	<li><a href="contactos.php"  data-icon="plus">Contactanos</a></li>
	<li><a href="ubicacion.php"  data-icon="navigation">Ubicacion</a></li>
	</ul>
</header>


<form method="post" id="form-listview">
	<input type="hidden" id="rel" name="rel">
</form>

<article data-role="ui-content" id="contenido">
<h2>Productos</h2>



<?php		// Obteniendo listado de todos los productos
		
        $url = "http://pymesv.com/datos07new/listar_productos.php";
		$datosJ = file_get_contents($url);
		$rows = json_decode($datosJ,true);
        
		echo "<ul id='listview' data-role='listview' data-inset='true' data-filter='true'>";

            if (isset($_POST['rel']))
			{
				echo "<p style='color: #aaaaa;'> Su producto "  .$_POST['rel']. "   fue agregado exitosamente</p>";
			}


			    for($i=0;$i<count($rows);$i++) {
			        echo "<li><a href='#'>".$rows[$i]['nombre_producto'];
			        echo "<img src='https://gitlab.com/jcrlosvn/ShoppingCar/raw/master/recursos/imagenes/".$rows[$i]["imagen_producto"]."'>";		
			        echo "<p> Precio: ".$rows[$i]["precio_producto"]."</p>";
			        echo "</a></li>";		   
			    }

			    echo "</ul>"; 
 ?>
	
</article>
<footer>
	<div data-role="footer" data-position="fixed" data-theme="b">
		<p align="center">Manuel Alejandro Grande Ramirez</p>
	</div>
</footer>



</body>
</html>