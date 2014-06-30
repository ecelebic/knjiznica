<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">


<?php include 'meni.tpl.php'; ?>

    
   
<form method="get" name="pretraga_form" id="pretraga_form" action="knjiga.php">
<fieldset>
<legend>Pretraži knjige</legend>
        <label>
        <input id="pretraga_knjige" name="search" type="text" placeholder="Upiši naslov knjige ili autora" <?php if(isset($this->upit)): ?>value="<?php echo $this->upit ?>" <?php endif ?> />
      </label>
      </fieldset>
</form>



    
<div class="row">    
<div class="large-12" >    
<form>
<fieldset>
<legend>Upiši novu knjigu</legend>
  
      <label>
        <input type="text" placeholder="Naslov knjige" />
      </label>
	  <label>
        <input type="text" placeholder="Autor knjige"  />
      </label>
	  <label>
        <input type="text" placeholder="Godina izdanja knjige" />
      </label> 
	  <label>Dostupnost knjige u knjižnici</label>
      <input type="radio" name="pokemon" value="Red" id="pokemonRed">
	  <label for="pokemonRed">DA</label>
      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue">
	  <label for="pokemonBlue">NE</label>
	  <br/>
<input type="submit" class="button green" value="Upiši"/>
  
  </fieldset>
</form>	
</div>
</div>

    

<?php if(count($this->rezultati) > 0): ?>    
<form>
<fieldset>
<legend>Prikaz rezultata</legend>
<table class="knjiga">
	<thead>
            <tr>
		<th>Naslov</th>
                <th>Autor</th>
                <th>Godina izdanja</th>
                <th>Dostupnost</th>
            </tr>    
	</thead>
	<tbody>
	<?php foreach ($this->rezultati as $rezultat): $knjiga = new Knjiga($rezultat['sifra']) ?>
	<tr>
            
                        <td><?php echo $knjiga->vratiNaslov() ?></td>
                        <td><?php echo $knjiga->vratiAutora() ?></td>
                        <td><?php echo $knjiga->vratiGodinuIzdanja() ?></td>
                        <td><?php echo $knjiga->vratiDostupnostKnjige() ?></td>
            
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