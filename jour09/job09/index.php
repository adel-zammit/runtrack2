<?php

$db = mysqli_connect("localhost","root","", "jour08");
$requete = "SELECT * FROM `salles` ORDER BY capacite DESC";
$query = mysqli_query($db, $requete);

$salles = mysqli_fetch_all($query);

?>
<table>
    <thead>
    <tr>
        <th>
           id
        </th>
        <th>
            nom
        </th>
        <th>
            id_etage
        </th>
        <th>
            capacite
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
            <td>
                <?= $salle[2] ?>
            </td>
            <td>
                <?= $salle[3] ?>
            </td>

        </tr>
    <?php } ?>
    </tbody>
</table>
