<?php include 'header.tpl.php'; ?>
<div class="row">    
<div class="large-12 columns">
<div class="panel">
    
 <?php include 'meni.tpl.php'; ?>   
  <div id="autorizacijaForma">
  
  <form action="">
			<fieldset>
			<legend>Pristupni podaci</legend>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" value="ecelebic@ffos.hr"/>
			<label for="lozinka">Lozinka</label>
			<input type="password" name="lozinka" id="lozinka" value="emaknjiznica"/>
			<a id="autoriziraj"class="button green">Autoriziraj</a>
			</fieldset>
  </form>
  	<p id="porukaGreske"></p>

</div>  
</div>    
</div> 
</div>
<?php include 'footer.tpl.php'; ?>