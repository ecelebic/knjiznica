<?php include 'header.tpl.php'; ?>
<div class="row">    
<div class="large-12 columns">
<div class="panel">


<?php include 'meni.tpl.php'; ?>

    
<form>
<fieldset>
<legend>Pretraži članove</legend>
  <div class="row">
    <div class="large-12 columns">
      <label>
        <input type="text" placeholder="Upiši ime, prezime ili fakultet člana"/>
      </label>
    </div>
  </div>
</form>

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
    
    <div class="row">
<div class="large-12 columns">
<table>
	<thead>
		<tr>
		<th>Ime</th>
		<th>Prezime</th>
		<th>Fakultet</th>
		<th>Kontakt</th>
        <th>Mjesto</th>		
		</tr>
	</thead>
	<tbody>
	<th></th>
	<th></th>
	<th></th>
	<th></th>	
	<th></th>
	</tbody>
</table>
</div>
</div>
    
    
    
</div>  
 </div>   
 </div>
<?php include 'footer.tpl.php'; ?>