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
<a href="posudba.php?list=all"class="button green" name="prikazi">Prikaži sve posudbe</a>

<?php if(isset($this->svePosudbe)): ?> 
<form>
<fieldset>
<legend>Prikaz rezultata</legend>

<table>
    <thead>
        <tr>
        <th>Datum posudbe</th>
        <th>Datum povratka</th>
        <th>Član</th>
        <th>Knjiga</th>        
        </tr>    
    </thead>
    
    <tbody>
        <!-- Prođi sve knjige kroz svaku posebno -->
	<?php foreach ($this->svePosudbe as $posudba): ?>
        
	<tr>
        <td><?php echo $posudba['datumPosudbe'] ?></td>
        <td><?php echo $posudba['datumPovratka'] ?></td>
        <td><?php echo $posudba['clan'] ?></td>
        <td><?php echo $posudba['knjiga'] ?></td>
        </tr>
        
        <?php endforeach;?>
	
    </tbody>
</table>
</fieldset>
</form>
<?php endif;?>

<?php if(count($this->rezultati) > 0): ?>

<form>
<fieldset>
<legend>Prikaz rezultata</legend>
    <table class="posudba">
	<thead>
            <tr>
		<th>Datum posudbe</th>
		<th>Datum povratka</th>
                <th>Član</th>
                <th>Knjiga</th>
                <th>Promijeni/Obriši</th>
            </tr>
                
	</thead>
	<tbody>
            <?php foreach ($this->rezultati as $rezultat): $posudba = new Posudba($rezultat['sifra']) ?>
            <tr>    
                <td><?php echo $posudba->getdatumPosudbe()?></td>
                <td><?php echo $posudba->getdatumPovratka()?></td>
                <td><?php echo $posudba->getClan()?></td>                
                <td><?php echo $posudba->getKnjiga()?></td>
                
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