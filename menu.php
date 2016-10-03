

<?php

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