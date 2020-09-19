<!DOCTYPE>
<style>
     form{
        text-align: center;
        padding: 20px;
     }
     
</style>
<html>

<form method="post">
  <h2>Search for a specific string</h2><br><br>
  Enter a String : <input type="text" name="string"><br><br>
  Enter a SubString : <input type="text" name="SubString">
  <br><br>
  <input type="submit" value="submit">
</form>
</html>
<?php
if($_POST)
{
    $string=$_POST['string'];
    $SubString=$_POST['SubString'];
    echo "Position of substring in String : " .strpos($string, $SubString);
}
?>

