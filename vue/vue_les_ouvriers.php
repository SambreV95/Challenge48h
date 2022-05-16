<link rel="stylesheet" href="src/mtcStyles.css">

<div class="lesOuvriers">

<h2 class="bas"> Liste de nos ouvriers </h2>

<table border="1">
    <tr>
            <td> Id ouvrier </td>
            <td> Nom ouvrier </td>
            <td> Prénom ouvrier </td>
            <?php
            if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
            {
            echo"
            <td> Adresse </td>
            <td> Téléphone </td>
            <td> Email </td>
            <td> Mot de passe </td>
            <td> Salaire </td>";
            }
            ?>
            <td> Spécialisation </td>
            <?php
            if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
            {
            echo"
            <td> Modifier/Supprimer </td>";
            }
            ?>
    </tr>

    <?php
    foreach($lesOuvriers as $unOuvrier)
    {
        echo "<tr>
                <td>".$unOuvrier['idouvrier']." </td>
                <td>".$unOuvrier['nom']." </td>
                <td>".$unOuvrier['prenom']." </td>";
                if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
                {
                echo"
                <td>".$unOuvrier['adresse']." </td>
                <td>".$unOuvrier['tel']." </td>
                <td>".$unOuvrier['email']." </td>
                <td>".$unOuvrier['mdp']." </td>
                <td>".$unOuvrier['salaire']." </td>";
                }
                echo"<td>".$unOuvrier['specialisation']." </td>";

    if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
    {

        	echo "
                <td class='supMod'>
                <a href='index.php?page=9&action=sup&idouvrier=".$unOuvrier['idouvrier']."'>
                <img src ='images/sup.png' height='30' witdh='30'> </a>

                <a href='index.php?page=9&action=edit&idouvrier=".$unOuvrier['idouvrier']."'>
                <img src ='images/edits.png' height='30' witdh='30'> </a>

                </td>";

                echo "</tr>";
        }
    }
    ?>
   </table>
</div>
