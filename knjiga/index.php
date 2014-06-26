<?php
    include "../class/knjiga.php";
    
    $sifra=$_GET["sifra"];
    $a=new knjiga($sifra);
    
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Knjižnica</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/stil.css" />
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <body>

<div class="row">    
<div class="large-12 columns">
<div class="panel">
	<ul class="menu">
			<li><a href="../prijava.php"><span>Prijava</span></a></li>
            <li><a href="../index.html"><span>Knjižnica</span></a></li>
            <li><a href="index.php"><span>Knjiga</span></a></li>
            <li><a href="../posudba/index.php"><span>Posudba</span></a></li>
            <li><a href="../clan/index.php"><span>Član</span></a></li>
     </ul>


<form>
<legend>Pristupni podaci</legend>
  <div class="row">
    <div class="large-12 columns">
      <label>Pretraži
        <input type="text" />
      </label>
    </div>
  </div>
</form>

Upiši novu knjigu
<form>
  <div class="row">
    <div class="large-12 columns">
      <label>
        <input type="text" placeholder="Naslov knjige" value="<?php echo $a->vratiNaslov() ?>" />
      </label>
	  <label>
        <input type="text" placeholder="Autor knjige" value="<?php echo $a->vratiAutora() ?>" />
      </label>
	  <label>
        <input type="text" placeholder="Godina izdanja knjige" value="<?php echo $a->vratiGodinuIzdanja() ?>" />
      </label> 
	  <label>Dostupnost knjige u knjižnici</label>
      <input type="radio" name="pokemon" value="Red" id="pokemonRed">
	  <label for="pokemonRed">DA</label>
      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue">
	  <label for="pokemonBlue">NE</label>
	  <br/>
<a href="#" class="button green">Upiši</a>
    </div>
  </div>
</form>	


<div class="row">
<div class="large-12 columns">
<table>
	<thead>
		<tr>
		<th>Naslov</th>
		<th>Autor</th>
		<th>Godina izdanja</th>
		<th>Dostupnost knjige</th>
        </tr>
	</thead>
	<tbody></tbody>
</table>
</div>
</div> 
	 
</div>    
</div>  
</div>
     
       
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
