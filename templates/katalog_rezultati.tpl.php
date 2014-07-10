<?php if (empty($this->rezultati)): ?>
<p>Nema rezultata</p>
<?php else: ?>
<table>
    <thead>
        <tr>
            <th>Naslov knjige</th>
            <th>Autor knjige</th>
            <th>Godina izdanja</th>
            <th>Dostupnost knjige</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($this->rezultati as $rezultat): $knjiga = new Knjiga($rezultat['sifra']); ?>
        <tr>
            <td><?php echo $knjiga->getNaslov() ?></td>
            <td><?php echo $knjiga->getAutor() ?></td>
            <td><?php echo $knjiga->getGodinaIzdanja() ?></td>
            <td><?php echo $knjiga->getDostupnostKnjige() ?></td>
        </tr>
<?php endforeach ?>
    </tbody>
</table>
<?php endif ?>

