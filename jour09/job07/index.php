<?php

    $db = mysqli_connect("localhost","root","", "jour08");
    $requete = "SELECT SUM(superficie) FROM etage";
    $query = mysqli_query($db, $requete);

    $etages = mysqli_fetch_all($query);

?>
<table>
    <thead>
    <tr>
        <th>
            Superficie_totale
        </th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($etages as $etage){?>
        <tr>
            <td>
                <?= $etage[0] ?>
            </td>

        </tr>
    <?php } ?>
    </tbody>
</table>