<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">

    <?php include 'meni.tpl.php'; ?>

<form method="get" name="pretraga_form" id="pretraga_form" action="katalog.php">
<fieldset>
<legend>Pretraži katalog</legend>
  
      <label>
        <input id="pretraga_naslov" name="search" type="text" placeholder="upit" <?php if(isset($this->upit)): ?>value="<?php echo $this->upit ?>" <?php endif ?>/>
      </label>
	  <br/>
        <input type="submit" class="button green" value="Pretraži"/>
    
  </fieldset>
</form>

    <?php if(count($this->rezultati) > 0): ?>
        <form>
        <fieldset>
        <legend>Prikaz rezultata</legend>
        
            <table class="catalog">
                <thead>
                    <tr>
                        <th>Naslov</th>
                        <th>Autor</th>
                        <th>Godina izdanja</th>
                        <th>Dostupnost</th>
                    </tr>          
                </thead>
                <tbody>
<?php foreach ($this->rezultati as $rezultat): ?>
                    <tr>
                        <td><?php echo $rezultat['naslov']; ?></td>
                        <td><?php echo $rezultat['autor']; ?></td>
                        <td><?php echo $rezultat['godinaIzdanja']; ?></td>
                        <td><?php echo $rezultat['dostupnostKnjige']; ?></td>
                    </tr>                    
<?php endforeach;?>
                </tbody>
        </table>
        
        </fieldset>
        </form>    
    <?php endif; ?>
	
</div>  
 </div>   
 </div>
    
<?php include 'footer.tpl.php'; ?>
