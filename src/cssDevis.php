<?php
  if($leDevis['statut'] == "En cours")
  {
    echo ".statut {background-color= blue;}";
  }

  else if($leDevis['statut'] == "Validé")
  {
    echo ".statut {background-color= green;}";
  }

  else if($leDevis['statut'] == "Annulé")
  {
    echo ".statut {background-color= red;}";
  }
?>
