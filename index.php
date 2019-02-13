<?php
$Doctors = array
  (
  array("Nom" =>"Ménard","Prénom" =>"Jul","Spécialité" =>"Généraliste"), 
  array("Nom" =>"Salaun","Prénom" =>"Man","Spécialité" =>"Dentiste"),
  );
  foreach ($Doctors as $key => $oneDoctor) {
      echo "$oneDoctor[Nom] " . "$oneDoctor[Prénom] " . "$oneDoctor[Spécialité] "  .  "<br/>";
  }

?>
