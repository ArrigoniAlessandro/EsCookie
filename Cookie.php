<?php
echo ('<form action = "Cookie.php" method = "POST">
<p></p>login: <br>
<input type = "text" name = "login"> </p>
<p></p>password:<br>
<input type = "text" name = "psw"></p>
</p>    
<input type = "submit" name = "setCookie" value = "setta cookie">
</form>');

if(!empty($_POST)){
    setcookie("a",$_POST["login"]."".$_POST["psw"]);
}
echo ("<h3>".$_COOKIE["a"]."<h3>");

?>