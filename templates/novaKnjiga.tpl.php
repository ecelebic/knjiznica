<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">


<?php include 'meni.tpl.php'; ?>
    
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

</div>
</div>
</div>

<?php include 'footer.tpl.php'; ?>