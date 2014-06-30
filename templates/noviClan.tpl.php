<?php include 'header.tpl.php'; ?>
<div class="row">    
<div class="large-12 columns">
<div class="panel">


<?php include 'meni.tpl.php'; ?>

<form>
<fieldset>
<legend>Dodaj novog člana</legend>
  <div class="row">
    <div class="large-12 columns">
      <label>
        <input type="text" placeholder="Ime člana" />
      </label>
	  <label>
        <input type="text" placeholder="Prezime člana" />
      </label>
	  <label>
        <input type="text" placeholder="Fakultet" />
      </label>
	  <label>
        <input type="text" placeholder="Kontakt" />
      </label>
	  <label>
        <input type="text" placeholder="Mjesto"  />
      </label><br/>
	  <input type="submit" class="button green" value="Dodaj"/>
	</div>
  </div>
</fieldset>
</form>
  
    
</div>  
</div>   
</div>
<?php include 'footer.tpl.php'; ?>