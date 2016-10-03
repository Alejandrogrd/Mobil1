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
<iframe align="center" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d10962.545818326269!2d-89.18731513371841!3d13.72781762815785!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssv!4v1475385127676" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</html>