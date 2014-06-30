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

<a href="novaPosudba.php" class="button green" >Dodaj novu posudbu</a>

  <?php if(count($this->rezultati) > 0): ?>
    <table class="posudba">
	<thead>
            <tr>
		<th>Datum posudbe</th>
		<th>Datum povratka</th>
                <th>Član</th>
		<th>Knjiga</th>
									
            </tr>
                
	</thead>
	<tbody>
            <?php foreach ($this->rezultati as $rezultat): $posudba = new Posudba($rezultat['sifra']) ?>
            <tr>    
                <td><?php echo $posudba->vratidatumPosudbe()?></td>
                <td><?php echo $posudba->vratidatumPovratka()?></td>
                <td><?php echo $posudba->vratiClana()?></td>
                <td><?php echo $posudba->vratiKnjigu()?></td>
            </tr>
            <?php endforeach;?>
	</tbody>
</table>
    <?php endif; ?>
</div>
</div>
 

</div>
     
<?php include 'footer.tpl.php'; ?>