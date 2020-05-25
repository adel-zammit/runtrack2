<?php

    $db = mysqli_connect("localhost","root","", "jour08");
    $requete = "SELECT SUM(capacite) FROM salles";
    $query = mysqli_query($db, $requete);

    $salles = mysqli_fetch_all($query);

?>
<table>
    <thead>
    <tr>
        <th>
            Capacite_totale
        </th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($salles as $salle){?>
        <tr>
            <td>
                <?= $salle[0] ?>
            </td>

        </tr>
    <?php } ?>
    </tbody>
</table>