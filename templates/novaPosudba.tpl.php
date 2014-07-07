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


<?php if (isset($this->posudbaSifra)): ?>
        <input type="hidden" value="<?php echo $this->posudbaSifra ?>" name="sifra" />
<?php endif ?>
     
<div class="row">
<div class="large-12">
<label for="datumPosudbe">Datum posudbe:</label>

<input type="text" id="datumPosudbe" name="datumPosudbe" 
    <?php if(isset($this->posudbaDatumPosudbe)): ?> 
       value="<?php echo $this->posudbaDatumPosudbe ?>"<?php endif ?> />
</div>
</div>

<div class="row">
<div class="large-12">
<label for="datumPovratka">Datum povratka:</label>

<input type="text" id="datumPovratka" name="datumPovratka" 
    <?php if(isset($this->posudbaDatumPovratka)): ?> 
       value="<?php echo $this->posudbaDatumPovratka ?>"<?php endif ?> />

</div>
</div>

<div class="row">
<div class="large-12"> 
    <label for="clan">Član:</label>
    
    <select  id="clan" name="clan">
        
<?php foreach($this->clanovi as $clan): ?>
        
            <option value="<?php echo $clan['sifra'] ?>"><?php echo $clan['ime'] ?> <?php echo $clan['prezime'] ?></option>
            
       <?php endforeach ?> >   
    </select> 
</div>
</div>    
    
<div class="row">
<div class="large-12"> 
    <label for="knjiga">Knjiga:</label>
    
    <select  id="knjiga" name="knjiga"> 
        
<?php foreach($this->knjige as $knjiga): ?> 
        <option value="<?php echo $knjiga['sifra'] ?>"><?php echo $knjiga['naslov'] ?></option>
<?php endforeach ?> >   

    </select>     
</div>
</div>

<input type="submit" class="button green" value="Promijeni" name="promijeni"/>
<a href="posudba.php" class="button green" >Nazad</a>

</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>
     
<?php include 'footer.tpl.php'; ?>