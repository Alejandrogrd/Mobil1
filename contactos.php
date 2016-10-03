
<html>
<head>
<title>Aplicacion Mobile con Jquey Mobile</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
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
<form style=" background: #fff;" action="?op=3" method="post">
<legend>Ayudanos a mejorar con tus sugerencias:</legend>

<label>*Primer nombre:</label>
<input class="texto" type="text" placeholder="Alejandro" name="nombrec" value="<?php echo @$_POST['nombrec'];?>" /><p style="color:red;font-size:13px;"><?php echo @$error[1]; ?></p>
<label>*Apellido:</label>
<input class="texto" type="text" placeholder="Grande" name="apellidoc" value="<?php echo @$_POST['apellidoc'];?>" /><p style="color:red;font-size:13px;"><?php echo @$error[2]; ?></p>
<label>Email:</label>
<input class="texto" type="email" placeholder="email@hotmail.com" name="correoc" value="<?php echo @$_POST['correoc'];?>" />
<label>Ingrese su opini&otilde;n:</label>
<textarea placeholder="Hola desee informarles que me siento contento con su servicio"   name="opinionc" rows="5" cols="40" style="resize:none"><?php echo @$_POST['asunto'];?></textarea><p style="color:red;font-size:13px;"><?php echo @$error[3]; ?></p>(*)Campos Requeridos
<input class="button2" type="submit" name="enviar" value="Enviar"/></form></div> 