<?php include_once ('session.php')?>
<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">
<?php include 'meni.tpl.php'; ?>
	 
 <form method="get" name="pretraga_form" id="pretraga_form">
<fieldset>
<legend>Pretraži posudbe</legend>
  <div class="row">
    <div class="large-12">
      <label>
        <input id="pretraga_datumKnjigaClan" name="pretraga_datumKnjigaClan" type="text" placeholder="Upiši datum posudbe, knjigu ili člana" />
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
    <div class="large-12">
<label>
        <input type="text" />
</label>
</div>
</div>

Član<br/>
<div class="row">
    <div class="large-12">
<label>
        <input type="text" />
</label>
</div>
</div>
</fieldset>
</form>

<a href="#" class="button green">Gotovo</a>


<div class="row">
<div class="columns">
    <?php if(count($this->rezultati) > 0): ?>
    <table class="posudba">
	<thead>
            <?php foreach ($this->rezultati as $key => $value): ?>
		<tr>
		<th><?php echo $this->rezultati['datumPosudbe']; ?></th>
		<th><?php echo $this->rezultati['datumPovratka']; ?></th>
		<th><?php echo $this->rezultati['knjiga']; ?><</th>
		<th><?php echo $this->rezultati['clan']; ?></th>							
		</tr>
                <?php endforeach; ?>
	</thead>
	<tbody>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	</tbody>
</table>
    <?php endif; ?>
</div>
</div>
 

</div>
</div>    
</div>  
    
<?php include 'footer.tpl.php'; ?>