<?php
$name=strip_tags($_POST["name"]);
$good=$_POST["good"];
$shipping=$_POST["shipping"];
$agreement=$_POST["agreement"];
if ($agreement=="Да"){
echo " Здравствуйте,".$name." <br>";
echo 'Вы указали следующие данные:<br>';
echo 'Товар '.$good.' доставка: '.$shipping.'<br>';
echo "<FORM action='lab2-3-2.php' method='post'>
<input type='hidden' name='name' value='".$name."'>
<input type='hidden' name='good' value='".$good."'>
<input type='hidden' name='shipping' value='".$shipping."'>
<input type='submit' id='submit' value='Подтвердить заказ''>
</FORM>";

}
else
echo "Liar, liar, pants on fire"
?>