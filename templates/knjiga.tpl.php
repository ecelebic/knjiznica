<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">


<?php include 'meni.tpl.php'; ?>

     
<form method="get" name="pretraga_form" id="pretraga_form" action="knjiga.php">
<fieldset>
    
<legend>Pretraži knjige</legend>

    <label>
    <input id="pretraga_knjige" name="search" type="text" placeholder="Upiši naslov knjige ili autora" <?php if(isset($this->upit)): ?>value="<?php echo $this->upit ?>" <?php endif ?> />
    </label>

</fieldset>
</form>


<a href="novaKnjiga.php" class="button green" >Dodaj novu knjigu</a>
<!-- definirali smo 'list'-->
<a href="knjiga.php?list=all"class="button green" name="prikazi">Prikaži sve knjige</a>

<!-- Ako je setano sveKnjige (def.u knjiga.php) -->
<?php if(isset($this->sveKnjige)): ?> 
<form>
<fieldset>
<legend>Prikaz rezultata</legend>

<table>
    <thead>
        <tr>
        <th>Naslov</th>
        <th>Autor</th>
        <th>Godina izdanja</th>
        <th>Dostupnost</th>
        </tr>    
    </thead>
    
    <tbody>
        <!-- Prođi sve knjige kao svaku posebno -->
	<?php foreach ($this->sveKnjige as $knjiga): ?>
        
	<tr>
        <td><?php echo $knjiga['naslov'] ?></td>
        <td><?php echo $knjiga['autor'] ?></td>
        <td><?php echo $knjiga['godinaIzdanja'] ?></td>
        <td><?php echo $knjiga['dostupnostKnjige'] ?></td>
        </tr>
        
        <?php endforeach;?>
	
    </tbody>
</table>
</fieldset>
</form>
<?php endif;?>


<?php if(count($this->rezultati) > 0): ?>  

<form>
<fieldset>
<legend>Prikaz rezultata</legend>

<table>
    <thead>
        <tr>
        <th>Naslov</th>
        <th>Autor</th>
        <th>Godina izdanja</th>
        <th>Dostupnost</th>
        <td>Promijeni/Obriši</td>
        </tr>    
    </thead>
    
    <tbody>
	<?php foreach ($this->rezultati as $rezultat): $knjiga = new Knjiga($rezultat['sifra']) ?>
        
	<tr>
        <td><?php echo $knjiga->getNaslov() ?></td>
        <td><?php echo $knjiga->getAutor() ?></td>
        <td><?php echo $knjiga->getGodinaIzdanja() ?></td>
        <td><?php echo $knjiga->getDostupnostKnjige() ?></td>
        <td>
            <a href="novaKnjiga.php?sifra=<?php echo $rezultat['sifra'] ?>" class="button green" >Promijeni knjigu</a>
            
            <a href="knjiga.php?sifra=<?php echo $rezultat['sifra'] ?>&delete=true" class="button green" >Obriši knjigu</a>
        </td>            
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