<?php


//Si la variable archivo que pasamos por URL no esta 
//establecida acabamos la ejecucion del script.
if (!isset($_GET['archivo']) || empty($_GET['archivo'])) {
   exit();
}

//Utilizamos basename por seguridad, devuelve el 
//nombre del archivo eliminando cualquier ruta. 
$archivo = basename($_GET['archivo']);

$ruta = 'files/app/'.$archivo;
echo $ruta;

if (is_file($ruta))
{
   header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($ruta));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($ruta));
ob_clean();
flush();
readfile($ruta);
exit;
}
else
   exit();


?>