<?php

$recepient = "qqq@yandex.by";
$sitename = "form.by";

$name = trim($_POST["firstname"]);
$lastname = trim($_POST["lastname"]);
/* $text = trim($_POST["text"]); */
$message = "Имя: $name \nФамилия: $lastname";

$pagetitle = "что-то";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient")
?>