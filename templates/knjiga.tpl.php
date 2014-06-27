<?php include 'header.tpl.php'; ?>
<div class="row">    
<div class="large-12 medium-9 small-3 columns">
<div class="panel">


<?php include 'meni.tpl.php'; ?>

    
<div class="row">    
<div class="large-12 medium-9 small-3 columns">    
<form method="get" id="pretraga_form" name="pretraga_form">
<fieldset>
<legend>Pretraži knjige</legend>
        <label>
        <input id="pretraga_naslovAutor" name="pretraga_naslovAutor" type="text" placeholder="Upiši naslov knjige ili autora" />
      </label>
      </fieldset>
</form>
</div>
</div>

    
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

    
<div class="row">    
<div class="large-12" >
<?php if(count($this->rezultati) > 0): ?>    
<form>
<fieldset>
<legend>Prikaz rezultata</legend>
<table class="knjiga">
	<thead>
            <?php foreach ($this->rezultati as $key => $value): ?>
		<tr>
                        <th><?php echo $this->rezultati['naslov']; ?></th>
                        <th><?php echo $this->rezultati['autor']; ?></th>
                        <th><?php echo $this->rezultati['godina izdanja']; ?></th>
                        <th><?php echo $this->rezultati['dostupnost knjige']; ?></th>
                </tr>
             <?php endforeach; ?>    
	</thead>
	<tbody>
	
	<th></th>
	<th></th>
	<th></th>
        <th></th>
	
	</tbody>
</table>
</fieldset>
</form>
</div>
</div>
<?php endif; ?>

    
</div>    
</div>  
</div>
<?php include 'footer.tpl.php'; ?>