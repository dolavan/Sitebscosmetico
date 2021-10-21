<?php
   error_reporting(0);
   $connect = mysql_connect("localhost","root","") OR DIE("Falha ao conectar ao servidor");
   $db = mysql_select_db("utf8mb4_general_ci",$connect) OR DIE("Falha ao selecionar o Database");
?>
