<style>
    /* td {
        height: 10px;
        vertical-align: bottom;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 15px;
    } */
</style>

<table class="table table-striped table-dark">
    <tr>
        <th>Nom</th>
        <th>Type</th>
        <th>Position X</th>
        <th>Position Y</th>
        <th>Profondeur</th>
        <th>Conservation</th>
        <th>Image</th>
    </tr>
    <?php foreach ($dino as $name): ?>
    <tr>
        <td><?= $name['name'] ?></td>
        <td><?= $name['type'] ?></td>
        <td><?= $name['x'] ?></td>
        <td><?= $name['y'] ?></td>
        <td><?= $name['z'] ?></td>
        <td><?= $name['conservation'] ?></td>
        <td><img class="pic" src="<?= $name['picture'] ?>" alt=""></td>
    </tr>
    <?php endforeach ?>
</table>

<br>
<table class="table table-striped table-dark">
    <tr>
        <th></th>
        <th>Remarques</th>
    </tr>
    <?php foreach ($remarks as $remark): ?>
    <tr>
        <th scope="row">Titre</th>
        <td><?= $remark['title'] ?></td>
    </tr>
    <tr>
        <th scope="row">Texte</th>
        <td><?= $remark['content'] ?></td>
    </tr>
    <?php endforeach ?>
</table>

<br>
<a href="../site/<?= $dino[0]['site_id'] ?>">Retour vers les informations du site</a>
<br>
<a href="../index">Retour vers la page d'accueil</a>