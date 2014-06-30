<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">


<?php include 'meni.tpl.php'; ?>

    
 <!--Ovo je specifično za stranicu-->  
<form method="get" name="pretraga_form" id="pretraga_form" action="knjiga.php">
<fieldset>
<legend>Pretraži knjige</legend>
        <label>
        <input id="pretraga_knjige" name="search" type="text" placeholder="Upiši naslov knjige ili autora" <?php if(isset($this->upit)): ?>value="<?php echo $this->upit ?>" <?php endif ?> />
      </label>
      </fieldset>
</form>
<!--Ovo je specifično za stranicu--> 

<a href="novaKnjiga.php" class="button green" >Dodaj novu knjigu</a>

<?php if(count($this->rezultati) > 0): ?>    
<form>
<fieldset>
<legend>Prikaz rezultata</legend>
<table class="knjiga">
	<thead>
            <tr>
		<th>Naslov</th>
                <th>Autor</th>
                <th>Godina izdanja</th>
                <th>Dostupnost</th>
            </tr>    
	</thead>
	<tbody>
	<?php foreach ($this->rezultati as $rezultat): $knjiga = new Knjiga($rezultat['sifra']) ?>
	<tr>
            
                        <td><?php echo $knjiga->vratiNaslov() ?></td>
                        <td><?php echo $knjiga->vratiAutora() ?></td>
                        <td><?php echo $knjiga->vratiGodinuIzdanja() ?></td>
                        <td><?php echo $knjiga->vratiDostupnostKnjige() ?></td>
            
        </tr>
        <?php endforeach;?>
	
	</tbody>
</table>
</fieldset>
</form>
</div>
</div>
</div>
<?php endif; ?>

    
   

<?php include 'footer.tpl.php'; ?>