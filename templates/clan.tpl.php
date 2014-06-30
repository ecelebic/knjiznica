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
              <td><?php echo $clan->vratiIme()?></td>
              <td><?php echo $clan->vratiPrezime()?></td>
              <td><?php echo $clan->vratiFakultet()?></td>
              <td><?php echo $clan->vratiKontakt()?></td>	
              <td><?php echo $clan->vratiMjesto()?></td>
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