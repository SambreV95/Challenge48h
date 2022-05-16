<link rel="stylesheet" href="src/mtcStyles.css">

<div class="lesChefs">

<h2 class="bas"> Liste des chefs de chantier </h2>

<table border="1">
    <tr>
            <td> Id chef </td>
            <td> Nom chef </td>
            <td> Prénom chef </td>
            <td> Adresse </td>
            <td> Téléphone </td>
            <?php
            if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
            {
            echo"<td> Email </td>
            <td> Mot de passe </td>
            <td> Salaire </td>";
            }
            ?>
            <td> Modifier/Supprimer </td>
    </tr>

    <?php
    foreach($lesChefs as $unChef)
    {
        echo "<tr>
                <td>".$unChef['idchef']." </td>
                <td>".$unChef['nom']." </td>
                <td>".$unChef['prenom']." </td>
                <td>".$unChef['adresse']." </td>
                <td>".$unChef['tel']." </td>";
                if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
                {
                echo"<td>".$unChef['email']." </td>
                <td>".$unChef['mdp']." </td>
                <td>".$unChef['salaire']." </td>";
                }


    if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
    {

        	echo "
                <td class='supMod'>
                <a href='index.php?page=10&action=sup&idchef=".$unChef['idchef']."'>
                <img src ='images/sup.png' height='30' witdh='30'> </a>

                <a href='index.php?page=10&action=edit&idchef=".$unChef['idchef']."'>
                <img src ='images/edits.png' height='30' witdh='30'> </a>

                </td>";

                echo "</tr>";
        }
    }
    ?>
   </table>
</div>
