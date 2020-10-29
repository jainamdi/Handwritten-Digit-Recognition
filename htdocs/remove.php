<?php
        $data="up.png";
        $dir = ".";
        $dirHandle = opendir($dir);
        while ($file = readdir($dirHandle)) {
            if($file==$data) {
                unlink($file);
            }
        }

        closedir($dirHandle);

        $data1="result.jpg";
        $dir1 = ".";
        $dirHandle1 = opendir($dir1);
        while ($file1 = readdir($dirHandle1)) {
            if($file1==$data1) {
                unlink($file1);
            }
        }

        closedir($dirHandle1);

?>