<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
echo "Deneme ;)";
echo "YahoO!";
echo "YahoO2!";

<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
<form action="" method="post">
    Adƒ±:  <input type="text" name="personal[isim]" /><br />
    Eposta: <input type="text" name="personal[eposta]" /><br />
    Bira: <br />
    <select multiple name="bira[]">
        <option value="efes">Efes</option>
        <option value="tuborg">Tuborg</option>
        <option value="venus">Ven√ºs</option>
    </select><br />
    <input type="submit" value="G√∂nder!" />
</form>
        Denemeeeee :D
        ?>
    </body>
</html>
