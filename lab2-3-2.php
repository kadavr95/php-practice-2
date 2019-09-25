<?php
$name=$_POST["name"];
$good=$_POST["good"];
$shipping=$_POST["shipping"];
echo "<script type='text/javascript'>alert('name:'+$name);</script>";
echo " Спасибо за ваш заказ,".$name." <br>";
echo 'Вы указали следующие данные:<br>';
echo 'Товар '.$good.' доставка: '.$shipping.'<br>';
?>