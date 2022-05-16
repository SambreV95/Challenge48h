<h2 class="haut"> Connexion au site du secours populaire </h2>

<form method="post" action="">
	<table border="0">
		<tr>
			<td> EMail </td>
			<td><input type="text" name="email" required></td>
		</tr>
		<tr>
			<td> MDP </td>
			<td><input type="password" name="mdp" required></td>
		</tr>
		<tr>
			<td>
				<input type="reset" name="annuler" value ="Annuler">
			</td>
			<td>
			 	<input type="submit" name="seconnecter" value ="Se Connecter">
			</td>

		</tr>
	</table>

</form>

<h2> INSCRIVEZ-VOUS </h2>

<form method="post" action="">
	<table border="0">
		<tr>
			<td> Nom </td>
			<td><input type="text" name="nom" required></td>
		</tr>
        <tr>
			<td> Prénom </td>
			<td><input type="text" name="prenom" required></td>
		</tr>

        <tr>
            <td> Adresse mail : </td>
            <td> <input type="text" name="email" required></td>
        </tr>
        <tr>
            <td> Mot de Passe : </td>
            <td> <input type="text" name="mdp" required></td>
        </tr>
				<tr>
            <td> Droits : </td>
            <td> <input type="text" name="droits" readonly value="user"></td>
        </tr>
        <tr>
			<td>
				<input type="reset" name="annuler" value ="Annuler">
			</td>
			<td>
			 	<input type="submit" name="sinscrire" value ="S'inscrire">
			</td>
		</tr>
	</table>

</form>

<div id="seConnecter">
<?php
if (isset($_POST['seconnecter']))
{
	$unControleur->setTable ("user");
	$tab=array("email"=>$_POST['email'], "mdp"=>$_POST['mdp']);
	$unUSer = $unControleur->selectWhere ($tab);

	if ($unUSer == null || $unUSer == false )
	{
		echo "<br />  Erreur de connexion, Veuillez vérifier vos identifiants ou inscrivez vous si ce n'est pas encore le cas .";
						}
						else if (isset($unUSer['email'])){
		$_SESSION['email'] = $unUSer['email'];
		$_SESSION['iduser'] = $unUSer['iduser'];
		$_SESSION['droits'] = $unUSer['droits'];
		header("Location: index.php");
						}




				}

				if (isset($_POST['seconnecter'])){
						$unControleur->setTable ("membre");
	$tab=array("email"=>$_POST['email'],"mdp"=>$_POST['mdp']);
						$unMembre = $unControleur->selectWhere($tab);

						if ($unMembre == null || $unMembre == false )
	{

						}
						else if (isset($unMembre['email'])){
								$_SESSION['email'] = $unMembre['email'];
								$_SESSION['droits']="user";
								header("Location: index.php");
						}
				}
				?>
				</div>

				<div id="inscription">
				<?php
			//pour qun membre s'inscrive
				if (isset($_POST['sinscrire']))
{
	$unControleur->setTable ("membre");
	$tab=array("nom"=>$_POST['nom'],"prenom"=>$_POST['prenom'],"adresse"=>$_POST['adresse'],"tel"=>$_POST['tel'],"email"=>$_POST['email'],"mdp"=>$_POST['mdp']);
						$unMembre = $unControleur->insert($tab);
						header("Location: index.php");
				}
				if (isset($unMembre['email'])){
						if (isset($_POST['valider']))
						{
								if($uneTable=="don")
								{ require_once("vu6/vue_insert_don.php");
										$unControleur->setTable ("don");
										$tab=array("datedon"=>$_POST['datedon'], "somme"=>$_POST['somme'],
												"appreciation"=>$_POST['appreciation'],"idprojet"=>$_POST['idprojet'],"idmembre"=>$_POST['idmembre']);
										$unDon=$unControleur->insert($tab);
										header("Location: index.php");
								}
								else if($uneTable=="commentaire")
								{require_once("vu6/vue_insert_commentaires.php");
										$unControleur->setTable ("commentaire");
										$tab=array("datecomment"=>$_POST['datecomment'], "contenu"=>$_POST['contenu'],
								"note"=>$_POST['note'],"idprojet"=>$_POST['idprojet'],"idmembre"=>$_POST['idmembre']);
										$unCommentaire=$unControleur->insert($tab);
										header("Location: index.php");
								}
						}

				}
				?>
