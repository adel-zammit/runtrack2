<?php

    $db = mysqli_connect("localhost", "root", "", "jour08");
    $requete = "SELECT * from etudiants;";
    $query = mysqli_query($db, $requete);
  

    $etudiants = mysqli_fetch_all($query);

?>
<table>
    <thead>
    <tr>
        <th>
            Etudiant_id
        </th>
        <th>
            Prenom
        </th>
        <th>
            Nom
        </th>
        <th>
            Naissance
        </th>
        <th>
            Sexe
        </th>
        <th>
            Email
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
            <td>
                <?= $etudiant[3] ?>
            </td>
            <td>
                <?= $etudiant[4] ?>
            </td>
            <td>
                <?= $etudiant[5] ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>