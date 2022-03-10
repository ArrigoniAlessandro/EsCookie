
<?php
echo "
<h1>Es Cookie</h1>
<form method = post action = index.php>
inserisci un numero: <input type = number id = n name = numero></br>
<input type = submit value = invia>
<input type = submit value = resetta id = a name = a>
</form>
";
if(!empty($_POST['numero'])){
$numero = $_POST['numero'];
$name = "numero"; 
if(!empty($_COOKIE['numero'])){
$value = $numero."-".$_COOKIE['numero']; 
}else{
$value = $numero;
}
$expire=8600;
$path="/";
$domain="";
$secure="";
$httpOnly= true;
setcookie($name,$value, time()+$expire,$path, $domain, $secure,$httpOnly);

$cookie = $_COOKIE['numero'];
$array = explode("-", $cok);
echo "totale: ".count($array);
$indice = 0;
for ($i = 0; $i<count($array); $i++) { 
$indice = $indice + $array[$i];
}
echo "somma: ".$indice;
echo "media: ".($indice)/count($array);
}
if(!empty($_POST['a'])){
    $name= "numero"; //esenziale
    $value= ""; //esenziale
    $expire=8600;
    $path="/";
    $domain="";
    $secure="";
    $httpOnly= true;
    setcookie($name,$value, time()+$expire,$path, $domain, $secure,$httpOnly);
}
?>