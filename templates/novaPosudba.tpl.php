<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">
<?php include 'meni.tpl.php'; ?>
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
<label for="naslov">Datum posudbe:</label>
<input type="text" placeholder="Datum posudbe" name="datumPosudbe" id="datumPosudbe" <?php if(isset($this->datumPosudbe)): ?> value="<?php echo $this->datumPosudbe ?>"<?php endif ?>/>
</div>
</div>



<div class="row">
<div class="large-12">
<label for="naslov">Datum povratka:</label>
<input type="text" placeholder="Datum povratka" name="datumPovratka" id="datumPovratka" <?php if(isset($this->datumPovratka)): ?> value="<?php echo $this->datumPovratka ?>"<?php endif ?> />

</div>
</div>

<div class="row">
<div class="large-12">
<label for="naslov">Član:</label>
<input type="text" placeholder="Član" name="clan" id="clan" <?php if(isset($this->clan)): ?> value="<?php echo $this->clan ?>"<?php endif ?> />

</div>
</div>

<div class="row">
<div class="large-12">
<label for="naslov">Knjiga:</label>
<input type="text" placeholder="Knjiga" name="knjiga" id="knjiga" <?php if(isset($this->knjiga)): ?> value="<?php echo $this->knjiga ?>"<?php endif ?> />

</div>
</div>
</fieldset>
<input type="submit" class="button green" value="Promijeni" name="promijeni"/>
</form>



</div>
</div>
</div>
     
<?php include 'footer.tpl.php'; ?>