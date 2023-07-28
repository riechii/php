<?php
$name = htmlspecialchars($_POST['name'],ENT_QUOTES);
$inp = htmlspecialchars($_POST['inp'],ENT_QUOTES);
$number = htmlspecialchars($_POST['number of orders'],ENT_QUOTES);
print "私の名前は". $name. "<br/>";
print  "ご希望の商品は".$inp. "<br/>";
print  "ご注文数は".$number;