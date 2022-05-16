<!--idprojet clé étrangère de la table don
idmembre clé étrangère de la table membre
-->
<link rel="stylesheet" href="src/css/styles.css">
<div class="insertDevis">
<h2 class="haut"> Ajout d'un devis </h2>
<form method ="post" action ="">
	<table>
		<tr>
			<td> Nom :</td>
            <td> <input type="text" name="nom" required value ="<?php echo ($leDevis!=null) ? $leDevis['nom']:""; ?>"></td>
		</tr>
		<tr>
			<td> Prenom :</td>
            <td> <input type="text" name="prenom" required value ="<?php echo ($leDevis!=null) ? $leDevis['prenom']:""; ?>"></td>
		</tr>
		<tr>
			<td> Email: </td>
			<td> <input type="text" name="mail" required value ="<?php echo ($leDevis!=null) ? $leDevis['mail']:""; ?>"></td>
		</tr>
        <tr>
			<td> Localisation: </td>
			<td> <input type="text" name="localisation" required value ="<?php echo ($leDevis!=null) ? $leDevis['localisation']:""; ?>"></td>
		</tr>

        <tr>
			<td> Fourchette Budgétaire: </td>
			<td> <input type="text" name="fourchettebudget" required value ="<?php echo ($leDevis!=null) ? $leDevis['fourchettebudget']:""; ?>"></td>
		</tr>
    <tr>
			<td> Durée: </td>
			<td> <input type="text" name="duree" required value ="<?php echo ($leDevis!=null) ? $leDevis['duree']:""; ?>"></td>
		</tr>

    <tr>
			<td> Délais : </td>
			<td> <input type="date" name="delais" required value ="<?php echo ($leDevis!=null) ? $leDevis['delais']:""; ?>"></td>
		</tr>

        <tr>
            <td> Commentaire  :</td>
            <td> <textarea  name="commentaire"  rows="5" cols="33" value ="<?php echo ($leDevis!=null) ? $leDevis['commentaire']:""; ?>"> </textarea></td>
        </tr>
				<tr>
					<!--<td> Statut : </td>
					<td> <input type="text" name="statut" value ="<?php //echo ($leDevis!=null) ? $leDevis['statut']:""; ?>"></td>
				</tr>-->

<?php
if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
					{
				echo'<tr>
						<td> Statut : </td>
						<td> <input type="text" name="statut" value ="">
				</tr>';
			}

			else if (isset($_SESSION['droits']) && $_SESSION['droits'] =="user")
								{
							echo'<tr>
									<td> Statut : </td>
									<td> <input type="text" name="statut" readonly value ="Demande">
							</tr>';
						}
?>

   	<tr>
			<td>  <input type="reset" name="annnuler" value ="Annuler"></td>
			<td> <input type="submit" <?php echo ($leDevis!=null) ? " name='modifier' value='Modifier' " : " name='valider' value='Valider' "; ?> ></td>
		</tr>
	</table>
</form>
</br></br></br></br>
</div>
