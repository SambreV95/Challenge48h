<link rel="stylesheet" href="src/css/styles.css">
<div class="">

<h2 class="haut"> Modification de votre mot de passe </h2>
<form method="post" action="">
    <table>
        <tr>
            <td> Ancien mot de passe :</td>
            <td> <input type="text" name="ancienMdp" required value ="" ></td>
        </tr>

        <tr>
            <td> Nouveau mot de passe :</td>
            <td> <input type="text" name="nouveauMdp" required value ="<?php echo ($lUser!=null) ? $lUser['mdp']:""; ?>" ></td>
        </tr>

        <tr>
            <td> Confirmez votre mot de passe :</td>
            <td> <input type="text" name="confirmationMdp" required value ="" ></td>
        </tr>

        <tr>
	        <td><input type="reset" name="annuler" value ="Annuler"></td>
			<td><input type="submit" name='modifier' value='Modifier'></td>
		</tr>
	</table>
</form>