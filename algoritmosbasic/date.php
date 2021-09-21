<?php
$t = date("17");

switch ($t) {
  case $t < 12:
    echo "Bom Dia!";
  break;
  case $t < 18:
    echo "Boa Tarde!";
    break;
  default:
    echo "Boa Noite";
}
?>