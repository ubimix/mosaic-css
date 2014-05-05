<?php
require "lib/lessphp/lessc.inc.php";

$less = new lessc;
$less->compileFile("css/style.less", "css/style.css");

include('index.html');
?>

