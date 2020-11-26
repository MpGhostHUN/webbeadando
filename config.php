<?php
$ablakcim=array('cim'=>'Fauna Alapítvány');
$cim="Fauna állat és természetvédelmi alapítvány";
$fejlec=array(
    'kepekforrasa'=>'kep1kutya.jpg',
    
);

$sites=array(
'/'=>array('file'=>'weblapok/folap','szoveg'=>'Főoldal','menu'=>array(1,1)),
'segites'=>array('file'=>'weblapok/segites','szoveg'=>'Segítségkérés','menu'=>array(1,1)),
'galery'=>array('file'=>'weblapok/galery','szoveg'=>'Képek','menu'=>array(1,1)),
'tablazat'=>array('file'=>'weblapok/tablazat','szoveg'=>'Táblázat','menu'=>array(1,1)),
'kapcsolat'=>array('file'=>'weblapok/kapcsolat','szoveg'=>'Kapcsolat','menu'=>array(1,1)),
'belepes'=>array('file'=>'felhaszn/belepes','szoveg'=>'Regisztáció/Belépés','menu'=>array(1,0)),
'kilepes'=>array('file'=>'felhaszn/kilepes','szoveg'=>'Kilépés','menu'=>array(0,1)),
'belep'=>array('file'=>'felhaszn/belep','szoveg'=>'','menu'=>array(0,0)),
'belepett'=>array('file'=>'weblapok/belepett','szoveg'=>'','menu'=>array(0,0)),
'regisztral'=>array('file'=>'felhaszn/regisztral','szoveg'=>'','menu'=>array(0,0)),
);
$error_site=array('file'=>'weblapok/404','szoveg'=>'Az oldal nem található!','menu'=>array(0,0));
?>
