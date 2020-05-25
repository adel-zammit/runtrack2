<?php

    $db = mysqli_connect("localhost","root","", "jour08");
    $requete = "SELECT COUNT(*) FROM etudiants";
    $query = mysqli_query($db, $requete);

    $etudiants = mysqli_fetch_all($query);

?>
<table>
    <thead>
    <tr>
        <th>
            nb_etudiants
        </th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($etudiants as $etudiant){?>
        <tr>
            <td>
                <?= $etudiant[0] ?>
            </td>

        </tr>
    <?php } ?>
    </tbody>
</table>