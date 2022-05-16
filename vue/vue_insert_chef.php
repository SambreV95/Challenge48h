<!--idprojet clé étrangère de la table don
idmembre clé étrangère de la table membre
-->

<link rel="stylesheet" href="src/css/styles.css">
<div class="insertService">
<h2 class="haut"> Ajout d'un chef </h2>
<form method ="post" action ="">
	<table>
    <tr>
        <td> Nom :</td>
        <td> <input type="text" name="nom" required value ="<?php echo ($leChef!=null) ? $leChef['nom']:""; ?>" ></td>
    </tr>
    <tr>
        <td> Prénom :</td>
        <td> <input type="text" name="prenom" required value ="<?php echo ($leChef!=null) ? $leChef['prenom']:""; ?>" ></td>
    </tr>
    <tr>
        <td> Adresse :</td>
        <td> <input type="text" name="adresse" required value ="<?php echo ($leChef!=null) ? $leChef['adresse']:""; ?>" ></td>
    </tr>
    <tr>
        <td> Tel :</td>
        <td> <input type="text" name="tel" required value ="<?php echo ($leChef!=null) ? $leChef['tel']:""; ?>" ></td>
    </tr>
    <tr>
        <td> Email :</td>
        <td> <input type="text" name="email" required value ="<?php echo ($leChef!=null) ? $leChef['email']:""; ?>" ></td>
    </tr>
    <tr>
        <td> Mot de Passe :</td>
        <td> <input type="text" name="mdp" required value ="<?php echo ($leChef!=null) ? $leChef['mdp']:""; ?>" ></td>
    </tr>
    <tr>
        <td> Salaire :</td>
        <td> <input type="text" name="salaire" required value ="<?php echo ($leChef!=null) ? $leChef['salaire']:""; ?>" ></td>
    </tr>
		<tr>
			<td>  <input type="reset" name="annnuler" value ="Annuler"></td>
			<td> <input type="submit" <?php echo ($leChef!=null) ? " name='modifier' value='Modifier' " : " name='valider' value='Valider' "; ?> ></td>
		</tr>
	</table>
</form>
</br></br></br></br>
</div>
