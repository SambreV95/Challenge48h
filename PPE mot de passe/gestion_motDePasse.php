<?php
	if ( ! isset($_SESSION['email']))
	{
		echo "ERREUR 404, page non identifiée ";
	}

	else if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
	{
		$unControleur->setTable("user");
		$lUser = null;

		require_once("vue/vue_Modification_Mdp.php");

		if (isset($_POST['modifier']))
		{
			if($_POST['nouveauMdp'] == $_POST['confirmationMdp'] || $_POST['ancienMdp'] == $lUser['mdp'] || 
				8 > strlen(($_POST['nouveauMdp'])) || 15 < strlen(($_POST['nouveauMdp'])) )
			{
				$tab = array("mdp"=>$_POST['nouveauMdp']);
				$where = array("iduser"=>$_SESSION['iduser']);

				$unControleur->update($tab, $where);
				header("Location: index.php?page=11");

				var_dump($requete);
			
}
			else
			{
				echo "<h5 class='errorText'>Les deux mots de passe ne sont pas identiques ou votre ancien mot de passe n'a pas correctement été renseigné</h5>";
			}
		}
	}
?>