<?php
  $testo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo eros ac ultrices eleifend.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo eros ac ultrices eleifend.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo eros ac ultrices eleifend.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo eros ac ultrices eleifend.<br>";

  $testo=str_replace($_GET["badword"], "***", $testo);

  echo $testo;
  echo "Lunghezza testo : " . strlen($testo);
?>
