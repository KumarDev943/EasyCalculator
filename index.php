<h1><center>Easy Calculator</center></h1>
<form action="index.php" method="post"><center>
<label for="username">Adding Numaber :</label>
            <input type="number" name="num" value = "i">
            <label for="username">+</label>
            <label for="username">Adding Numaber : </label>
            <input type="number" name="num1" id="username" value = "j">
            <input type="submit" name = "submit"><br/>
            <label for="username">Minus Numaber :</label>
            <input type="number" name="num" value = "i">
            <label for="username">-</label>
            <label for="username">Minus Numaber : </label>
            <input type="number" name="num1" id="username" value = "j">
            <input type="submit" name = "submit">
            <br/>
            <label for="username">Multiplying Numaber :</label>
            <input type="number" name="num" value = "i">
            <label for="username">*</label>
            <label for="username">Multiplying Numaber : </label>
            <input type="number" name="num1" id="username" value = "j">
            <input type="submit" name = "submit">
            <br/>
            <label for="username">Division Numaber :</label>
            <input type="number" name="num" value = "i">
            <label for="username">/</label>
            <label for="username">Division Numaber : </label>
            <input type="number" name="num1" id="username" value = "j">
            <input type="submit" name = "submit">
           

            <h2><center>
<?php 
if(isset($_POST['submit'])){
    $num = $_POST['num'];
    $num1 = $_POST['num1'];
$sum = $num + $num1;
$sum = $num - $num1;
$sum = $num * $num1;
$sum = $num / $num1;
echo $sum ;
}


?>
</center></h2>