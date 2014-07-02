<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">


<?php include 'meni.tpl.php'; ?>
    
<div class="row">    
<div class="large-12" >  
<?php if (isset($this->notify)): ?>
    <p><?php echo $this->notify ?></p>
<?php endif ?>
<form method="post" action="novaKnjiga.php">
<fieldset>
<legend>Upiši novu knjigu</legend>
  
      <label>
        <input type="text" placeholder="Naslov knjige" name="naslov" />
      </label>
	  <label>
        <input type="text" placeholder="Autor knjige" name="autor" />
      </label>
	  <label>
        <input type="text" placeholder="Godina izdanja knjige" name="godina"/>
      </label> 
	  <label>Dostupnost knjige u knjižnici</label>
      <input type="radio" name="pokemon" value="1" id="pokemonRed">
	  <label for="pokemonRed">DA</label>
      <input type="radio" name="pokemon" value="0" id="pokemonBlue">
	  <label for="pokemonBlue">NE</label>
	  <br/>
<input type="submit" class="button green" value="Upiši" name="spremi"/>
  
</fieldset>
</form>	
</div>
</div>

</div>
</div>
</div>

<?php include 'footer.tpl.php'; ?>