<link rel="stylesheet" href="src/mtcStyles.css">

<div class="$lesRealisations">

<h2 class="bas">Liste de nos réalisations </h2>

<table border="1">
    <tr>
            <td> Id réalisation </td>
            <td> Nom réalisation </td>
            <td> Surface </td>
            <td> Budget </td>
            <td> Localisation </td>
            <td> Type dubien </td>
            <td> Descriptif </td>
            <td> Nom du Chef de chantier </td>
            <td> Prénom du Chef de chantier </td>
            <?php
            if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
            {
              echo"<td> Modifier/Supprimer </td>";
            }
            ?>

    </tr>

    <?php
    foreach($lesRealisations as $uneRealisation)
    {
        echo "<tr>
                <td>".$uneRealisation['idrealisation']." </td>
                <td>".$uneRealisation['nomreal']." </td>
                <td>".$uneRealisation['surface']." </td>
                <td>".$uneRealisation['budget']." </td>
                <td>".$uneRealisation['localisation']." </td>
                <td>".$uneRealisation['typedebien']." </td>
                <td>".$uneRealisation['description']." </td>
                <td>".$uneRealisation['nom']." </td>
  				      <td>".$uneRealisation['prenom']." </td>";


    if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
    {

        	echo "
                <td class='supMod'>
                <a href='index.php?page=1&action=sup&idrealisation=".$uneRealisation['idrealisation']."'>
                <img src ='images/sup.png' height='30' witdh='30'> </a>

                <a href='index.php?page=1&action=edit&idrealisation=".$uneRealisation['idrealisation']."'>
                <img src ='images/edits.png' height='30' witdh='30'> </a>

                </td>";

                echo "</tr>";
        }
      }


    ?>

   </table>
   </div>
