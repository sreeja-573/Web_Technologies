<!DOCTYPE>
<style>
     form{
        text-align: center;
        padding: 20px;
     }
     
</style>
<html>

<form method="post">
  <h2>Prime number Program using PHP</h2><br><br>
  Enter a Number between 1 to 50 : <input type="text" name="input">
  <br><br>
  <input type="submit" value="submit">
</form>
</html>
<?php 
if($_POST)
{
    $input=$_POST['input'];
    $count = 0;
    for ($j = 1; $j <= $input;$j++){
        $count = 0;
        for ($i = 1; $i <= $j; $i++) {
            if ($j % $i == 0) {
                $count = $count + 1;
             }
        }
        if ($count == 2)
        {
            echo $j." , ";
        }  
     }
}  
?>