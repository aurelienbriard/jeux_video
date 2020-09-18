<?php

try{ $bdd = new PDO('mysql:host=localhost;dbname=jeux_video;charset=utf8','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //évite de renvoyer que des strings en tableu associatif

}

catch(Exception $e){ echo $e->getMessage();}