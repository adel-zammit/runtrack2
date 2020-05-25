<?php

    $db = mysqli_connect("localhost", "root", "", "jour08");
    $requete = "SELECT nom,capacite from salles;";
    $query = mysqli_query($db, $requete);
    

    $salles = mysqli_fetch_all($query);
    


?>
<table>
    <thead>
    <tr>
        <th>
            Nom
        </th>

        <th>
            Capacite
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