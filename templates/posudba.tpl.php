<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">
<?php include 'meni.tpl.php'; ?>
	 
<form method="get" name="pretraga_form" id="pretraga_form" action="posudba.php">
<fieldset>
<legend>Pretraži posudbu</legend>
  <div class="row">
    <div class="large-12">
      <label>
        <input id="pretraga_posudbe" name="search" type="text" placeholder="Pretraži posudbu" <?php if(isset($this->upit)): ?>value="<?php echo $this->upit ?>" <?php endif ?> />
      </label>
    </div>
  </div>
</fieldset>
</form>

<a href="novaPosudba.php" class="button green" >Dodaj novu posudbu</a>

<?php if(count($this->rezultati) > 0): ?>

<form>
<fieldset>
<legend>Prikaz rezultata</legend>
    <table class="posudba">
	<thead>
            <tr>
		<th>Datum posudbe</th>
		<th>Datum povratka</th>
                <th>Ime člana</th>
                <th>Prezime člana</th>
                <th>Autor knjige</th>
                <th>Naslov knjige</th>
                
                <th>Promijeni/Obriši</th>
            </tr>
                
	</thead>
	<tbody>
            <?php foreach ($this->rezultati as $rezultat): $posudba = new Posudba($rezultat['sifra']) ?>
            <tr>    
                <td><?php echo $posudba->getdatumPosudbe()?></td>
                <td><?php echo $posudba->getdatumPovratka()?></td>
                <td><?php echo $posudba->getImeClana()?></td>                
                <td><?php echo $posudba->getPrezimeClana()?></td>
                <td><?php echo $posudba->getAutorKnjige()?></td>
                <td><?php echo $posudba->getNaslovKnjige()?></td>
                <td><a href="novaPosudba.php?sifra=<?php echo $rezultat['sifra'] ?>" class="button green" >Promijeni posudbu</a>
            
                    <a href="posudba.php?sifra=<?php echo $rezultat['sifra'] ?>&delete=true" class="button green" >Obriši posudbu</a></td>
            </tr>
            <?php endforeach;?>
	</tbody>
</table>
    </fieldset>
</form>
</div>
</div>
</div>

<?php endif; ?>

    
   

<?php include 'footer.tpl.php'; ?>