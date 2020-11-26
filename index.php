<?php
include("config.php"); //meghívjuk a config.php fájlt

if (isset($_GET['oldal'])) {
    $oldal=$_GET['oldal'];
    //Amennyiben a keresett oldal megtalálható 
    if(isset($sites[$oldal])&&file_exists("{$sites[$oldal]['file']}.php")){
        $oldal_keres=$sites[$oldal];
    }
    else if(isset($extrak[$oldal])&&file_exists("{$extrak[$oldal]['file']}.php")){
        $oldal_keres=$sites[$oldal];
    }
    //Ha az oldal nem létezik
    else{ 
        $oldal_keres=$error_site;
        header("HTTP/1.0 404 Not Found");
    }
//Alap esetben a fő oldal jelenik meg
} else $oldal_keres=$sites['/'];
//Meghívja az oldal keretszerkezetét tartalmazó fájtl
include("index.fo.php");
?>