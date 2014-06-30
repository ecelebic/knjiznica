<?php include_once ('session.php')?>
<?php include 'header.tpl.php'; ?>
<div class="row">    
<div class="large-12 columns">
<div class="panel">


<?php include 'meni.tpl.php'; ?>

    
<form method="get" name="pretraga_form" id="pretraga_form">
<fieldset>
<legend>Pretraži članove</legend>
  <div class="row">
    <div class="large-12 columns">
      <label>
        <input id="pretraga_clana" name="pretraga_clana" type="text"placeholder="Upiši ime, prezime ili fakultet člana"/>
      </label>
    </div>
  </div>
</fieldset>
</form>

<form>
<fieldset>
<legend>Dodaj novog člana</legend>
  <div class="row">
    <div class="large-12 columns">
      <label>
        <input type="text" placeholder="Ime člana" />
      </label>
	  <label>
        <input type="text" placeholder="Prezime člana" />
      </label>
	  <label>
        <input type="text" placeholder="Fakultet" />
      </label>
	  <label>
        <input type="text" placeholder="Kontakt" />
      </label>
	  <label>
        <input type="text" placeholder="Mjesto"  />
      </label><br/>
	  <input type="submit" class="button green" value="Dodaj"/>
	</div>
  </div>
</fieldset>
</form>

<?php if(count($this->rezultati) > 0): ?>   
<form>
    <fieldset>
    <legend>Prikaz rezultata</legend>    

    <table class="clan">
	<thead>
            <?php foreach ($this->rezultati as $key => $value): ?>
            <tr>
            <th><?php echo $this->rezultati['ime']; ?></th>
            <th><?php echo $this->rezultati['prezime']; ?></th>
            <th><?php echo $this->rezultati['fakultet']; ?></th>
            <th><?php echo $this->rezultati['kontakt']; ?></th>
            <th><?php echo $this->rezultati['mjesto']; ?></th>		
            </tr>
            <?php endforeach; ?>
	</thead>
	<tbody>
            <th></th>
            <th></th>
            <th></th>
            <th></th>	
            <th></th>
	</tbody>
</table>
</fieldset>
</form>  
<?php endif; ?>    
    
</div>  
</div>   
</div>
<?php include 'footer.tpl.php'; ?>