<style>
    /* td {
        height: 10px;
        vertical-align: bottom;
    }

    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    } */
</style>
<table class="table table-striped table-dark">
    <tr>
        <th>Titre</th>
        <th>Texte</th>
        <th>Date</th>
    </tr>
    <?php foreach ($notes as $note): ?>
    <tr>
        <td><?= $note['title'] ?></td>
        <td><?= $note['content'] ?></td>
        <td><?= $note['date'] ?></td>
    </tr>
    <?php endforeach ?>
</table>
<?php 
    $uri = $_SERVER['REQUEST_URI'];
    $seg = substr($uri, -1);
?>
<br>
<a href="../site/<?= $seg ?>">Retour vers les informations du site</a>
<br>
<a href="../index">Retour vers la page d'accueil</a>