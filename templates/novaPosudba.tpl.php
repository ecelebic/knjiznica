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
    

<form method="post" action="novaPosudba.php">
<fieldset>
<legend>Promijeni podatke o posudbi</legend>

<?php if (isset($this->posudbaSifra)): ?>
        <input type="hidden" value="<?php echo $this->posudbaSifra ?>" name="sifra" />
    <?php endif ?>
        
<div class="row">
<div class="large-12">
<label for="datumPosudbe">Datum posudbe:</label>
<input type="text" id="datumPosudbe" name="datumPosudbe" <?php if(isset($this->posudbaDatumPosudbe)): ?> value="<?php echo $this->posudbaDatumPosudbe ?>"<?php endif ?> />
</div>
</div>



<div class="row">
<div class="large-12">
<label for="datumPovratka">Datum povratka:</label>
<input type="text" id="datumPovratka" name="datumPovratka" <?php if(isset($this->posudbaDatumPovratka)): ?> value="<?php echo $this->posudbaDatumPovratka ?>"<?php endif ?> />

</div>
</div>


<div class="row">
<div class="large-12">
<label for="clan">Član:</label>
<select name="Clanovi">
<option id="clan" name="clan" <?php if(isset($this->posudbaClan)): ?> value="<?php echo $this->posudbaClan ?>"<?php endif ?> // php echo za članove</option>
</select>
</div>
</div>


<div class="row">
<div class="large-12">
<label for="knjiga">Knjiga:</label>
<select name="Knjige">
<option id="knjiga" name="knjiga" <?php if(isset($this->posudbaKnjiga)): ?> value="<?php echo $this->posudbaKnjiga ?>"<?php endif ?> //php echo za knjige</option>
</select>
</div>
</div>        




</fieldset>
<input type="submit" class="button green" value="Promijeni" name="promijeni"/>
</form>



</div>
</div>
</div>
</div>
</div>
     
<?php include 'footer.tpl.php'; ?>