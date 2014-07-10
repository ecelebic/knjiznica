<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">

    <?php include 'meni.tpl.php'; ?>

<form method="get" name="pretraga_form" id="pretraga_form" action="katalog.php">
<fieldset>
<legend>Pretraži katalog</legend>
  
      <label>
        <input id="pretraga_naslov" name="search" type="text" placeholder="Upiši naslov knjige ili autora" <?php if(isset($this->upit)): ?>value="<?php echo $this->upit ?>" <?php endif ?>/>
      </label>
	  <br/>
          <input type="submit" class="button green" value="Pretraži" id="trazi" />
    
</fieldset>
</form>
    <div id="rezultati"></div>
</div>  
</div>   
</div>

<?php include 'footer.tpl.php'; ?>
