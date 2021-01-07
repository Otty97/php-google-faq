<?php
$badword = $_GET['word'];
$paragraf = 'Sei una persona ' . $badword;
$paragraf=str_replace($badword,'***',$paragraf);
echo $paragraf;
?>
