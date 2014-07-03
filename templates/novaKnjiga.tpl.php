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
  
    <?php if (isset($this->knjigaSifra)): ?>
        <input type="hidden" value="<?php echo $this->knjigaSifra ?>" name="sifra" />
    <?php endif ?>
    <label for="naslov">Naslov knjige:</label>
    <input type="text" placeholder="Naslov knjige" id="naslov" name="naslov" <?php if(isset($this->knjigaNaslov)): ?> value="<?php echo $this->knjigaNaslov ?>"<?php endif ?> />

    <label>
        <input type="text" placeholder="Autor knjige" id="autor" name="autor" <?php if(isset($this->knjigaAutor)): ?> value="<?php echo $this->knjigaAutor ?>"<?php endif ?> />
      </label>
	  <label>
        <input type="text" placeholder="Godina izdanja knjige" name="godina" <?php if(isset($this->knjigaGodina)): ?> value="<?php echo $this->knjigaGodina ?>"<?php endif ?> />
      </label> 

    <span>Dostupnost knjige u knjižnici</span>
    <label for="pokemon-1">Da</label>
    <input type="radio" id="pokemon-1" name="pokemon" value="1" <?php if(isset($this->knjigaDostupnost) && $this->knjigaDostupnost == 1) echo "checked" ?>>
    
    <label for="pokemon-0">Ne</label>
    <input type="radio" id="pokemon-0" name="pokemon" value="0" <?php if(isset($this->knjigaDostupnost) && $this->knjigaDostupnost == 0) echo "checked" ?>>

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