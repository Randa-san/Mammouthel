<?php foreach ($site as $key => $value): ?>
<table class="table table-striped table-dark">
    <tr>
        <th scope="col">Nom</th>
        <th scope="col">Longitude</th>
        <th scope="col">Latitude</th>
        <th scope="col">Responsable</th>
    </tr>
    <tr>
        <td><?= $value['name'] ?></td>
        <td><?= $value['longitude'] ?></td>
        <td><?= $value['latitude'] ?></td>
        <td><?= $value['manager'] ?></td>
    </tr>
</table>
<?php endforeach; ?>
<br>
<table class="table table-striped table-dark">
    <tr>
        <th scope="col">Ossement</th>
    </tr>
    <?php foreach ($dino as $name): ?>
    <tr>
        <td><a href="../bones/<?= $name['id'] ?>"><?= $name['name'] ?></a></td>
    </tr>
    <?php endforeach ?>
</table>
<br>
<table class="table table-striped table-dark">
    <tr>
        <th><a href="../notes/<?= $notes[0]['id'] ?>">Notes</a></th>
    </tr>
    <?php foreach ($notes as $note): ?>
    <tr>
        <td><?= $note['title'] ?></td>
    </tr>
    <?php endforeach ?>
</table><br>
<a href="../index">Retour vers la page d'accueil</a>

