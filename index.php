
<?php

#separamos la pagina en 2 partes, el menu y lo que muestra cada menu
$pagina=isset($_GET['p'])?strtolower($_GET['p']):'pages/inicio';
require_once 'menu.php';
require_once $pagina.'.php';


?>