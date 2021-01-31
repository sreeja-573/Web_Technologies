<html>
    <body>
       

<?php

    
        $myfile = fopen("ReadFile.txt", "r") or die("Unable to open file!");
        $myfile1 = fread($myfile, filesize("ReadFile.txt")) ;
        
        fclose($myfile);
        $myfile = fopen("WriteFile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $myfile1);
        echo "Successfully read fron ReadFile and written into WriteFile";
        fclose($myfile);
        
    
    
?>
</body>
</html>