<!DOCTYPE>
<style>
     form{
        text-align: center;
        padding: 20px;
     }
     
</style>
<html>

<form method="post">
  <h2>Reverse of a String</h2><br><br>
  Enter a String : <input type="text" name="input">
  <br><br>
  <input type="submit" value="submit">
</form>
</html>
<?php
if($_POST)
{
    $input=$_POST['input'];
    echo "Reverse String : " .strrev($input);
}
?>

