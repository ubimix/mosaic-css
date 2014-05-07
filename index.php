<?php
require "lib/lessphp/lessc.inc.php";

$less = new lessc;
$less->compileFile("css/mosaic-css.less", "css/mosaic.css");

include('index.html');
?>

