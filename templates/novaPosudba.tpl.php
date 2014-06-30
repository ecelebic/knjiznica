<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">
<?php include 'meni.tpl.php'; ?>

<form>
<fieldset>
<legend>Nova posudba</legend>


<div class="row">
    <div class="large-12">
<label>
        <input type="text" placeholder="Datum posudbe" />
</label>
</div>
</div>



<div class="row">
    <div class="large-12">
<label>
        <input type="text" placeholder="Datum povratka" />
</label>
</div>
</div>

<div class="row">
    <div class="large-12">
<label>
        <input type="text" placeholder="Član" />
</label>
</div>
</div>

<div class="row">
    <div class="large-12">
<label>
        <input type="text" placeholder="Knjiga" />
</label>
</div>
</div>
</fieldset>
</form>

<input type="submit" class="button green" value="Gotovo"/>

</div>
</div>
</div>
     
<?php include 'footer.tpl.php'; ?>