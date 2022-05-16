<!--idprojet clé étrangère de la table don
idmembre clé étrangère de la table membre
-->

<link rel="stylesheet" href="src/css/styles.css">
<div class="insertService">
<h2 class="haut"> Ajout d'un service </h2>
<form method ="post" action ="">
	<table>
		<tr>
			<td> Corps :</td>
      <td> <input type="text" name="corps" required value ="<?php echo ($leService!=null) ? $leService['corps']:""; ?>"></td>
		</tr>
		<tr>
			<td> Descriptif : </td>
			<td> <input type="text" name="descriptif" required value ="<?php echo ($leService!=null) ? $leService['descriptif']:""; ?>"></td>
		</tr>
		<tr>
			<td> <input type="reset" name="annnuler" value ="Annuler"></td>
			<td> <input type="submit" <?php echo ($leService!=null) ? " name='modifier' value='Modifier' " : " name='valider' value='Valider' "; ?> ></td>
		</tr>
	</table>
</form>
</br></br></br></br>
</div>
