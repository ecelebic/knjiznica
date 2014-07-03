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
        <input id="pretraga_posudbe" name="pretraga_posudbe" type="text" placeholder="upit"<?php if(isset($this->upit)): ?>value="<?php echo $this->upit ?>" <?php endif ?> />
      </label>
    </div>
  </div>
</fieldset>
</form>

<a href="novaPosudba.php" class="button green">Dodaj novu posudbu</a>

  <?php if(count($this->rezultati) > 0): ?>
    <table class="posudba">
	<thead>
            <tr>
		<th>Datum posudbe</th>
		<th>Datum povratka</th>
                <th>Naslov knjige</th>
                <th>Autor knjige</th>
                <th>Ime člana</th>
                <th>Prezime člana</th>
                <td>Promijeni/Obriši</td>
            </tr>
                
	</thead>
	<tbody>
            <?php foreach ($this->rezultati as $rezultat): $posudba = new Posudba($rezultat['sifra']) ?>
            <tr>    
                <td><?php echo $posudba->getdatumPosudbe()?></td>
                <td><?php echo $posudba->getdatumPovratka()?></td>
                <td><?php echo $posudba->getNaslovKnjige()?></td>                
                <td><?php echo $posudba->getAutorKnjige()?></td>
                <td><?php echo $posudba->getImeClana()?></td>                
                <td><?php echo $posudba->getPrezimeClana()?></td>
                <td><a href="#" class="button green" >Promijeni posudbu</a>
                            <a href="#" class="button green" >Obriši posudbu</a></td>
            </tr>
            <?php endforeach;?>
	</tbody>
</table>
    <?php endif; ?>
</div>
</div>
 

</div>
     
<?php include 'footer.tpl.php'; ?>