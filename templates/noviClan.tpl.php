<?php include 'header.tpl.php'; ?>
<div class="row">    
<div class="large-12 columns">
<div class="panel">

<?php include 'meni.tpl.php'; ?>
    
<?php if (isset($this->notify)): ?>
    <p><?php echo $this->notify ?></p>
<?php endif ?>
    
<form method="post" action="noviClan.php">                                      
<fieldset>
<legend>Upiši novog člana</legend>

<?php if (isset($this->clanSifra)): ?>
    <input type="hidden" value="<?php echo $this->clanSifra ?>" name="sifra" />
<?php endif ?>
        
<div class="row">
<div class="large-12 columns">
        
    <label for="ime">Ime člana:</label>
    
    <input type="text" name="ime" id="ime" 
        <?php if(isset($this->clanIme)): ?> 
           value="<?php echo $this->clanIme ?>"<?php endif ?> />
   
    <label for="prezime">Prezime člana:</label>
    
    <input type="text" name="prezime" id="prezime" 
        <?php if(isset($this->clanPrezime)): ?> 
           value="<?php echo $this->clanPrezime ?>"<?php endif ?> />
     
    <label for="fakultet">Fakultet:</label>
    
    <input type="text" name="fakultet" id="fakultet" 
        <?php if(isset($this->clanFakultet)): ?> 
           value="<?php echo $this->clanFakultet ?>"<?php endif ?> />
      
    <label for="kontakt">Kontakt:</label>
    
    <input type="text" name="kontakt" id="kontakt" 
        <?php if(isset($this->clanKontakt)): ?> 
           value="<?php echo $this->clanKontakt ?>"<?php endif ?> />
      
    <label for="mjesto">Mjesto:</label>
    
    <input type="text" name="mjesto" id="mjesto" 
        <?php if(isset($this->clanMjesto)): ?> 
           value="<?php echo $this->clanMjesto ?>"<?php endif ?> />
    <br/>
        
    <input type="submit" class="button green" value="Dodaj" name="spremi"/>
        
</div>
</div>
</fieldset>
</form>
  
    
</div>  
</div>   
</div>
<?php include 'footer.tpl.php'; ?>