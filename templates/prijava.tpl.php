<?php include_once('class/operater.php') ?>

<?php include 'header.tpl.php'; ?>
<div class="row">    
<div class="large-12 columns">
<div class="panel">
    
 <?php include 'meni.tpl.php'; ?>   
  <div>
  
      <form method="post" action='prijava.php'>
			<fieldset>
			<legend>Pristupni podaci</legend>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" value="ecelebic@ffos.hr"/>
			<label for="lozinka">Lozinka</label>
			<input type="password" name="lozinka" id="lozinka" value="emaknjiznica"/>
			<input type="submit" name="prijava" class="button green" value="Autoriziraj"/>
			</fieldset>
  </form>
  	

</div>  
</div>    
</div> 
</div>
<?php include 'footer.tpl.php'; ?>