<?php include_once ('session.php')?>
<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12">
<div class="panel">

    <?php include 'meni.tpl.php'; ?>

<form method="get" name="pretraga_form" id="pretraga_form">
<fieldset>
<legend>Pretraži katalog</legend>
  
      <label>
        <input id="pretraga_naslov" name="pretraga_naslov" type="text" placeholder="Naslov knjige" />
      </label> <br/>
	  <label>
        <input id="pretraga_autor" name="pretraga_autor" type="text" placeholder="Autor knjige"  />
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
                    <?php foreach ($this->rezultati as $key => $value): ?>
                        <tr>
                        <th><?php echo $this->rezultati['naslov']; ?></th>
                        <th><?php echo $this->rezultati['autor']; ?></th>
                        <th><?php echo $this->rezultati['godinaIzdanja']; ?></th>
                        <th><?php echo $this->rezultati['dostupnostKnjige']; ?></th>
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
        
        </fieldset>
        </form>    
    <?php endif; ?>
	
</div>  
 </div>   
 </div>
    
<?php include 'footer.tpl.php'; ?>
