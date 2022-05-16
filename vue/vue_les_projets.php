<link rel="stylesheet" href="src/mtcStyles.css">

<div class="lesProjets">

<h2 class="bas">Liste de nos projets </h2>

<table border="1">
    <tr>
            <td> Id projet </td>
            <td> Nom projet </td>
            <td> Type du projet </td>
            <td> Date </td>
            <td> Description</td>
            <?php
            if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
            {
              echo"<td> Modifier/Supprimer </td>";
            }
            ?>
    </tr>

    <?php
    foreach($lesProjets as $unProjet)
    {
        echo "<tr>
                <td>".$unProjet['idprojet']." </td>
                <td>".$unProjet['nomproj']." </td>
                <td>".$unProjet['type']." </td>
                <td>".$unProjet['dateprojet']." </td>
                <td>".$unProjet['descriptifproj']." </td>";

    if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
    {

        	echo "
                <td class='supMod'>
                <a href='index.php?page=2&action=sup&idprojet=".$unProjet['idprojet']."'>
                <img src ='images/sup.png' height='30' witdh='30'> </a>

                <a href='index.php?page=2&action=edit&idprojet=".$unProjet['idprojet']."'>
                <img src ='images/edits.png' height='30' witdh='30'> </a>

                </td>";

                echo "</tr>";
        }
    }
    ?>

   </table>
   </div>
