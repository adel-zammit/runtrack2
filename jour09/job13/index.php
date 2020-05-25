<?php

$db = mysqli_connect("localhost","root","", "jour08");
$requete = "SELECT nom, id_etage FROM salles ";
$query = mysqli_query($db, $requete);

$salles = mysqli_fetch_all($query);
?>
<table>
    <thead>
    <tr>
        <th>
           nom
        </th>
        <th>
           id_etage
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($salles as $salle){?>
        <tr>
            <td>
                <?= $salle[0] ?>
            </td>
            <td>
                <?= $salle[1] ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>