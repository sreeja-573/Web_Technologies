<!DOCTYPE>
<style>
     form{
        text-align: center;
        padding: 20px;
     }
     
</style>
<html>

<form method="post">
  <h2>Counting the number words in a String</h2><br><br>
  Enter a String : <input type="text" name="input">
  <br><br>
  <input type="submit" value="submit">
</form>
</html>
<?php
if($_POST)
{
    $input=$_POST['input'];
    echo "Number of words in a String : " .str_word_count($input);
}
?>
