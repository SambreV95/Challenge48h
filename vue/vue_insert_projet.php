<link rel="stylesheet" href="src/css/styles.css">
<div class="insertProjet">

<h2 class="haut"> Ajout d'un projet </h2>
<form method="post" action="">
    <table>
        <tr>
            <td> Nom projet :</td>
            <td> <input type="text" name="nomproj" value ="<?php echo ($leProjet!=null) ? $leProjet['nomproj']:""; ?>" ></td>
        </tr>
        <tr>
            <td> Type de projet :</td>
            <td> <input type="text" name="type"  value ="<?php echo ($leProjet!=null) ? $leProjet['type']:""; ?>" ></td>
        </tr>
        <tr>
            <td> Date du projet :</td>
            <td> <input type="date" name="dateprojet" value ="<?php echo ($leProjet!=null) ? $leProjet['dateprojet']:""; ?>" ></td>
        </tr>
        <tr>
            <td>Description:</td>
            <td> <input type="text" name="descriptifproj" value ="<?php echo ($leProjet!=null) ? $leProjet['descriptifproj']:""; ?>" ></td>
        </tr>
        <tr>

        <?php echo ($leProjet!=null) ? "<input type='hidden' name='idprojet' value ='".$leProjet['idprojet']."'>" : ""; ?>

			<td>  <input type="reset" name="annuler" value ="Annuler"></td>
			<td> <input type="submit"
				<?php echo ($leProjet!=null) ? " name='modifier' value='Modifier' " : " name='valider' value='Valider' "; ?>
				>

        </tr>
    </table>
</form>
</br></br></br></br>
</div>
