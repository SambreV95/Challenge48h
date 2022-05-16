<link rel="stylesheet" href="src/css/styles.css">
<div class="insertOuvrier">

<h2 class="haut"> Ajout d'un ouvrier </h2>
<form method="post" action="">
    <table>
        <tr>
            <td> Nom :</td>
            <td> <input type="text" name="nom" required value ="<?php echo ($lOuvrier!=null) ? $lOuvrier['nom']:""; ?>" ></td>
        </tr>
        <tr>
            <td> Prénom :</td>
            <td> <input type="text" name="prenom" required value ="<?php echo ($lOuvrier!=null) ? $lOuvrier['prenom']:""; ?>" ></td>
        </tr>
        <tr>
            <td> Adresse :</td>
            <td> <input type="text" name="adresse" required value ="<?php echo ($lOuvrier!=null) ? $lOuvrier['adresse']:""; ?>" ></td>
        </tr>
        <tr>
            <td> Tel :</td>
            <td> <input type="text" name="tel" required value ="<?php echo ($lOuvrier!=null) ? $lOuvrier['tel']:""; ?>" ></td>
        </tr>
        <tr>
            <td> Email :</td>
            <td> <input type="text" name="email" required value ="<?php echo ($lOuvrier!=null) ? $lOuvrier['email']:""; ?>" ></td>
        </tr>
        <tr>
            <td> Mot de Passe :</td>
            <td> <input type="text" name="mdp" required value ="<?php echo ($lOuvrier!=null) ? $lOuvrier['mdp']:""; ?>" ></td>
        </tr>
        <tr>
            <td> Salaire :</td>
            <td> <input type="text" name="salaire" required value ="<?php echo ($lOuvrier!=null) ? $lOuvrier['salaire']:""; ?>" ></td>
        </tr>
        <tr>
            <td> Spécialisation : </td>
            <td> <select name="specialisation" id="spec-select">
                  <option value="Plombier"> Plombier </option>
                  <option value="Peintre"> Peintre </option>
                  <option value="Electricien"> Electricien </option>
                  <option value="Menuisier"> Menuisier </option>
                  <option value="Plaquiste"> Plaquiste </option>
                 </select>
        </tr>
        <tr>

        <?php echo ($lOuvrier!=null) ? "<input type='hidden' name='idprojet' value ='".$lOuvrier['idouvrier']."'>" : ""; ?>

			<td>  <input type="reset" name="annuler" value ="Annuler"></td>
			<td> <input type="submit"
				<?php echo ($lOuvrier!=null) ? " name='modifier' value='Modifier' " : " name='valider' value='Valider' "; ?>
				>

        </tr>
    </table>
</form>
</br></br></br></br>
</div>
