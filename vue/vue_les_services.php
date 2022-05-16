<link rel="stylesheet" href="src/mtcStyles.css">

<div class="lesServices">

<h2 class="bas"> Liste de nos services </h2>

<table border="1">
    <tr>
            <td> Id service </td>
            <td> Corps </td>
            <td id="descServ"> Descriptif </td>
            <?php
            if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
            {
              echo"<td> Modifier/Supprimer </td>";
            }
            ?>
    </tr>

    <?php
    foreach($lesServices as $unService)
    {
        echo "<tr>
                <td>".$unService['idservice']." </td>
                <td>".$unService['corps']." </td>
                <td>".$unService['descriptif']." </td>";

    if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
    {

        	echo "
                <td class='supMod'>
                <a href='index.php?page=3&action=sup&idservice=".$unService['idservice']."'>
                <img src ='images/sup.png' height='30' witdh='30'> </a>

                <a href='index.php?page=3&action=edit&idservice=".$unService['idservice']."'>
                <img src ='images/edits.png' height='30' witdh='30'> </a>

                </td>";

                echo "</tr>";
        }
    }
    ?>

   </table>
   </div>
