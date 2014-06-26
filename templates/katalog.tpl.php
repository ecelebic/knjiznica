<?php include 'header.tpl.php'; ?>

<div class="row">    
<div class="large-12 columns">
<div class="panel">

    <?php include 'meni.tpl.php'; ?>

<form method="get" name="pretraga_form" id="pretraga_form">
<fieldset>
<legend>Pretraži katalog</legend>
  <div class="row">
    <div class="large-12 columns">
      <label>
        <input id="pretraga_naslov" name="pretraga_naslov" type="text" placeholder="Naslov knjige" />
      </label> <br/>
	  <label>
        <input id="pretraga_autor" name="pretraga_autor" type="text" placeholder="Autor knjige"  />
      </label>
	  <br/>
        <input type="submit" class="button green" value="Pretraži"/>
    </div>
  </div>
  </fieldset>
</form>

    <?php if(count($this->rezultati) > 0): ?>
        <form>
        <fieldset>
        <legend>Prikaz rezultata</legend>
        <div class="row">
        <div class="large-12 columns">
        <table>
                <thead>
                    <?php foreach ($this->rezultati as $key => $value): ?>
                        <tr>
                        <th><?php echo $this->rezultati['naslov']; ?></th>
                        <th><?php echo $this->rezultati['autor']; ?></th>
                        <th>Godina izdanja</th>
                        <th>Dostupnost knjige</th>
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
        </div>
        </div> 
        </fieldset>
        </form>    
    <?php endif; ?>
	
</div>  
 </div>   
 </div>
    
<?php include 'footer.tpl.php'; ?>
