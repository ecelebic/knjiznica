<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">
<?php include 'meni.tpl.php'; ?>
<?php if (isset($this->notify)): ?>
    <p><?php echo $this->notify ?></p>
<?php endif ?>
<form method="post" action="updatePosudba.php">
<fieldset>
<legend>Promijeni posudbu</legend>


<div class="row">
    <div class="large-12">
<label>
        <input type="text" placeholder="Datum posudbe" name="datumPosudbe" />
</label>
</div>
</div>



<div class="row">
    <div class="large-12">
<label>
        <input type="text" placeholder="Datum povratka" name="datumPovratka" />
</label>
</div>
</div>

<div class="row">
    <div class="large-12">
<label>
        <input type="text" placeholder="Član" name="clan" />
</label>
</div>
</div>

<div class="row">
    <div class="large-12">
<label>
        <input type="text" placeholder="Knjiga" name="knjiga" />
</label>
</div>
</div>
</fieldset><input type="submit" class="button green" value="Promijeni" name="promijeni"/>
</form>



</div>
</div>
</div>
     
<?php include 'footer.tpl.php'; ?>