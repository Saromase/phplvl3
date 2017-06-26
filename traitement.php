<?php
require 'fonction.php';

$name = explode(" ", $_POST['name']);
$type = explode(" ", $_POST['type']);
$nbInput = $_POST['input'];

$form = '<form>';
$form = addInput($nbInput, $form, $type, $name);
$form .= '</form>';


echo "<pre>".htmlentities($form)."</pre>";
?>
