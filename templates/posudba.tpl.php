<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12 medium-12 small-12 columns">
<div class="panel">
<?php include 'meni.tpl.php'; ?>
	 
<form>
<fieldset>
<legend>Pretraži posudbe</legend>
  <div class="row">
    <div class="large-12 medium-12 small-12 columns">
      <label>
        <input type="text" placeholder="Upiši datum posudbe, knjigu ili člana" />
      </label>
    </div>
  </div>
</fieldset>
</form>


<form>
<fieldset>
<legend>Nova posudba</legend>
Datum posudbe<br/>

<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
 <input class="span2" size="16" type="text" value="12-02-2012">
 <span class="add-on"><i class="icon-th"></i></span>
</div>

Datum povratka<br/>

<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
 <input class="span2" size="16" type="text" value="12-02-2012">
 <span class="add-on"><i class="icon-th"></i></span>
</div>


Knjiga<br/>
<div class="row">
    <div class="large-12 medium-12 small-12 columns">
<label>
        <input type="text" />
</label>
</div>
</div>

Član<br/>
<div class="row">
    <div class="large-12 medium-12 small-12 columns">
<label>
        <input type="text" />
</label>
</div>
</div>
</fieldset>
</form>

<a href="#" class="button green">Gotovo</a>


<div class="row">
<div class="large-12 columns">
    <table class="posudba">
	<thead>
		<tr>
		<th>Datum posudbe</th>
		<th>Datum povratka</th>
		<th>Knjiga<</th>
		<th>Član</th>							
		</tr>
	</thead>
	<tbody>
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