<?php include 'header.tpl.php'; ?>
<div class="row">    
<div class="large-12 columns">
<div class="panel">


<?php include 'meni.tpl.php'; ?>

<form method="post" action="clan.php">
<fieldset>
<legend>Dodaj novog člana</legend>
  <div class="row">
    <div class="large-12 columns">
      <label>
        <input type="text" placeholder="Ime člana" name="ime" />
      </label>
	  <label>
        <input type="text" placeholder="Prezime člana" name="prezime" />
      </label>
	  <label>
        <input type="text" placeholder="Fakultet" name="fakultet"/>
      </label>
	  <label>
        <input type="text" placeholder="Kontakt" name="kontakt"/>
      </label>
	  <label>
        <input type="text" placeholder="Mjesto" name="mjesto" />
      </label><br/>
	  <input type="submit" class="button green" value="Dodaj" name="dodaj"/>
	</div>
  </div>
</fieldset>
</form>
  
    
</div>  
</div>   
</div>
<?php include 'footer.tpl.php'; ?>