<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">
<?php include 'meni.tpl.php'; ?>
	 
<form method="get" name="pretraga_form" id="pretraga_form" action="posudba.php">
<fieldset>
<legend>Pretraži posudbe</legend>
  <div class="row">
    <div class="large-12">
      <label>
        <input id="pretraga_posudbe" name="pretraga_posudbe" type="text" placeholder="Upiši datum posudbe, knjigu ili člana" <?php if(isset($this->upit)): ?>value="<?php echo $this->upit ?>" <?php endif ?> />
      </label>
    </div>
  </div>
</fieldset>
</form>


<form>
<fieldset>
<legend>Nova posudba</legend>
Datum posudbe<br/>

<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
 <input class="span2" size="16" type="text" value="12-02-2012">
 <span class="add-on"><i class="icon-th"></i></span>
</div>

Datum povratka<br/>

<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
 <input class="span2" size="16" type="text" value="12-02-2012">
 <span class="add-on"><i class="icon-th"></i></span>
</div>


Knjiga<br/>
<div class="row">
    <div class="large-12">
<label>
        <input type="text" />
</label>
</div>
</div>

Član<br/>
<div class="row">
    <div class="large-12">
<label>
        <input type="text" />
</label>
</div>
</div>
</fieldset>
</form>

<a href="#" class="button green">Gotovo</a>



    <?php if(count($this->rezultati) > 0): ?>
    <table class="posudba">
	<thead>
            
		<tr>
		<th>Datum posudbe</th>
		<th>Datum povratka</th>
		<th>Knjiga</th>
		<th>Član</th>							
		</tr>
                
	</thead>
	<tbody>
            <?php foreach ($this->rezultati as $rezultat): $posudba = new Posudba($rezultat['sifra']) ?>
            <tr>    
                <td><?php echo $posudba->vratidatumPosudbe() ?></td>
                <td><?php echo $posudba->vratidatumPovratka() ?></td>
                <td><?php echo $posudba->vratiKnjigu() ?></td>
                <td><?php echo $posudba->vratiClana() ?></td>
            </tr>
            <?php endforeach;?>
	</tbody>
</table>
    <?php endif; ?>
</div>
</div>
 

</div>
 
    
<?php include 'footer.tpl.php'; ?>