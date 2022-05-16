<?php
  require_once("src/cssDevis.php")
?>
<link rel="stylesheet" href="src/mtcStyles.css">
<div class="lesDevis">
   <h2 class="bas"> Les devis</h2>

   <br/>
	<!--<form method ="post" action ="">
		Filtrer par nom : <input type="text" name="nom">
		<input type ="submit" name="ok" value="Ok">
	</form>-->

<br/>

		<table border = '1' class='tableDevis'>
			<tr>
				<td> Id devis </td>
				<td> Nom </td>
				<td> Prénom </td>
        <td> Email </td>
        <td> Localisation </td>
        <td> Fourchette Budgétaire </td>
        <td> Durée </td>
        <td> Délais </td>
        <td> Description </td>
				<td> Statut </td>
        <?php
        if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
        {
          echo"<td> Modifier/Supprimer </td>";
        }
        ?>
		 	</tr>
      <?php
      	foreach ($lesDevis as $unDevis) {
      		echo"
      <tr>
        <td>".$unDevis['iddevis']." </td>
        <td>".$unDevis['nom']." </td>
        <td>".$unDevis['prenom']." </td>
        <td>".$unDevis['mail']." </td>
        <td>".$unDevis['localisation']." </td>
        <td>".$unDevis['fourchettebudget']." </td>
        <td>".$unDevis['duree']." </td>
        <td>".$unDevis['delais']." </td>
        <td>".$unDevis['commentaire']." </td>
        <td>".$unDevis['statut']." </td>";

if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
{
			 	echo "
                <td class='supMod'>
                <a href='index.php?page=4&action=sup&iddevis=".$unDevis['iddevis']."'>
                <img src ='images/sup.png' height='30' witdh='30'> </a>

                <a href='index.php?page=4&action=edit&iddevis=".$unDevis['iddevis']."'>
                <img src ='images/edits.png' height='30' witdh='30'> </a>
                </td>";

                echo "</tr>";
	}
  echo "";
}

	?>
  </table><br>
</div>
