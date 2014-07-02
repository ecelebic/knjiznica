<?php include 'header.tpl.php'; ?>
<div class="row">    
<div class="large-12 columns">
<div class="panel">


<?php include 'meni.tpl.php'; ?>

    
<form method="get" name="pretraga_form" id="pretraga_form" action="clan.php">
<fieldset>
<legend>Pretraži članove</legend>
  <div class="row">
    <div class="large-12 columns">
      <label>
        <input id="pretraga_naslov" name="search" type="text" placeholder="upit" <?php if(isset($this->upit)): ?>value="<?php echo $this->upit ?>" <?php endif ?>/>
      </label>
    </div>
  </div>
</fieldset>
</form>

<a href="noviClan.php" class="button green">Dodaj novog člana</a>    
    

<?php if(count($this->rezultati) > 0): ?>  
<form>
    <fieldset>
    <legend>Prikaz rezultata</legend>    

    <table class="clan">
	<thead>
            
            <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Fakultet</th>
            <th>Kontakt</th>
            <th>Mjesto</th>		
            </tr>
            
	</thead>
	<tbody>
<?php foreach ($this->rezultati as $rezultat): $clan = new Clan($rezultat['sifra']) ?>
          <tr>
              <td><?php echo $clan->getIme()?></td>
              <td><?php echo $clan->getPrezime()?></td>
              <td><?php echo $clan->getFakultet()?></td>
              <td><?php echo $clan->getKontakt()?></td>	
              <td><?php echo $clan->getMjesto()?></td>
          </tr>
<?php endforeach;?>          
	</tbody>
</table>
</fieldset>
</form>  
<?php endif; ?>    
    
</div>  
</div>   
</div>
<?php include 'footer.tpl.php'; ?>