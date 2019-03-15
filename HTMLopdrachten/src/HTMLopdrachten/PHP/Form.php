<?php
if(empty($_POST["voornaam"])){
        echo "naam niet ingevuld";
        }
 else {
     if (empty($_POST[achternaam])) {
         echo "achternaam niet ingevuld";
     }
 }
?>