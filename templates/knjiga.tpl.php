<?php include 'header.tpl.php'; ?>
<div class="row">    
<div class="large-12 medium-9 small-3 columns">
<div class="panel">


<?php include 'meni.tpl.php'; ?>

    
<div class="row">    
<div class="large-12 medium-9 small-3 columns">    
<form>
<fieldset>
<legend>Pretraži knjige</legend>
        <label>
        <input type="text" placeholder="Upiši naslov knjige ili autora" />
      </label>
      </fieldset>
</form>
</div>
</div>

    
<div class="row">    
<div class="large-12 medium-9 small-3 columns">    
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

<div class="row">    
<div class="large-12 medium-9 small-3 columns"> 
<form>
<fieldset>
<legend>Prikaz rezultata</legend>
<table class="knjiga">
	<thead>
		<tr>
                        <th>Naslov</th>
                        <th>Autor</th>
                        <th>Godina izdanja</th>
                        <th>Dostupnost knjige</th>
                </tr>
	</thead>
	<tbody>
	
	<th>NASLOV 1</th>
	<th>Ema</th>
	<th>2009</th>
        <th>da</th>
	
	</tbody>
</table>
</fieldset>
</form>
</div>
</div>

    
</div>    
</div>  
</div>
<?php include 'footer.tpl.php'; ?>