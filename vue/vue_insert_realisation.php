 <link rel="stylesheet" href="src/css/styles.css">
<div class="insertRealisation">

<h2 class="haut"> Ajout d'une réalisation </h2>
<form method="post" action="">
    <table>
        <tr>
            <td> Nom réalisation :</td>
            <td> <input type="text" name="nomreal" required value ="<?php echo ($laRealisation!=null) ? $laRealisation['nomreal']:""; ?>" ></td>
        </tr>
        <tr>
            <td> Surface :</td>
            <td> <input type="text" name="surface"  required value ="<?php echo ($laRealisation!=null) ? $laRealisation['surface']:""; ?>" ></td>
        </tr>
        <tr>
            <td> Budget:</td>
            <td> <input type="text" name="budget" required value ="<?php echo ($laRealisation!=null) ? $laRealisation['budget']:""; ?>" ></td>
        </tr>
        <tr>
            <td> Localisation :</td>
            <td> <input type="text" name="localisation" required value ="<?php echo ($laRealisation!=null) ? $laRealisation['localisation']:""; ?>" ></td>
        </tr>
        <tr>
            <td> Type du bien :</td>
            <td> <input type="text" name="typedebien" required value ="<?php echo ($laRealisation!=null) ? $laRealisation['typedebien']:""; ?>" ></td>
        </tr>
        <tr>
            <td>Descriptif :</td>
            <td> <input type="text" name="description" required value ="<?php echo ($laRealisation!=null) ? $laRealisation['description']:""; ?>" ></td>
        </tr>

        <tr>
  				<td> Le chef de chantier  : </td>
  				<td> <select name ="idchef">
  						 <?php
  						 	foreach ($lesChefs as $unChef) {
  						 		echo "<option value ='".$unChef['idchef']."'>".$unChef['nom']."  ".$unChef['prenom']."</option>";
  						 	}
  						 ?>
  					</select>
  				</td>
			  </tr>

        <tr>
        <?php echo ($laRealisation!=null) ? "<input type='hidden' name='idrealisation' value ='".$laRealisation['idrealisation']."'>" : ""; ?>

			<td>  <input type="reset" name="annuler" value ="Annuler"></td>
			<td> <input type="submit"
				<?php echo ($laRealisation!=null) ? " name='modifier' value='Modifier' " : " name='valider' value='Valider' "; ?>>

        </tr>
    </table>
</form>
</br></br></br></br>
</div>
