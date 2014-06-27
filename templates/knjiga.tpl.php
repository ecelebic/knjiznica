<?php include 'header.tpl.php'; ?>
<div class="row">    
<div class="large-12 columns">
<div class="panel">


<?php include 'meni.tpl.php'; ?>

<form>
<fieldset>
<legend>Pretraži knjige</legend>
  <div class="row">
    <div class="large-12 columns">
      <label>
        <input type="text" placeholder="Upiši naslov knjige ili autora" />
      </label>
    </div>
  </div>
  </fieldset>
</form>


<form>
<fieldset>
<legend>Upiši novu knjigu</legend>
  <div class="row">
    <div class="large-12 columns">
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
    </div>
  </div>
  </fieldset>
</form>	


<div class="row">
<div class="large-12 medium-12 small-12 columns">
<table>
	<thead>
		<tr>
                        <th><?php echo $this->rezultati['naslov']; ?></th>
                        <th><?php echo $this->rezultati['autor']; ?></th>
                        <th><?php echo $this->rezultati['godinaIzdanja']; ?></th>
                        <th><?php echo $this->rezultati['dostupnostKnjige']; ?></th>
                </tr>
	</thead>
	<tbody>
	
	<th></th>
	<th></th>
	<th></th>
        <th></th>
	
	</tbody>
</table>
</div>
</div> 

    
</div>    
</div>  
</div>
<?php include 'footer.tpl.php'; ?>