<?php

$db = mysqli_connect("localhost","root","", "jour08");
$requete = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'";
$query = mysqli_query($db, $requete);

$etudiants = mysqli_fetch_all($query);
?>
<table>
    <thead>
    <tr>
        <th>
           prenom
        </th>
        <th>
           nom
        </th>
        <th>
           naissance
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($etudiants as $etudiant){?>
        <tr>
            <td>
                <?= $etudiant[0] ?>
            </td>
            <td>
                <?= $etudiant[1] ?>
            </td>
            <td>
                <?= $etudiant[2] ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>