<?php
    include "../class/clan.php";
    
    $sifra=$_GET["sifra"];
    $a=new clan($sifra);
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
            <li><a href="../knjiga/index.php"><span>Knjiga</span></a></li>
            <li><a href="../posudba/index.php"><span>Posudba</span></a></li>
            <li><a href="index.php"><span>Član</span></a></li>
     </ul>
	 
	 
Član<br/>
	 
<form>
  <div class="row">
    <div class="large-12 columns">
      <label>Pretraži
        <input type="text" />
      </label>
    </div>
  </div>
</form>

Dodaj novog člana

<form>
  <div class="row">
    <div class="large-12 columns">
      <label>
        <input type="text" placeholder="Ime člana" value="<?php echo $a->vratiIme() ?>" />
      </label>
	  <label>
        <input type="text" placeholder="Prezime člana" value="<?php echo $a->vratiPrezime() ?>" />
      </label>
	  <label>
        <input type="text" placeholder="Fakultet" value="<?php echo $a->vratiFakultet() ?>" />
      </label>
	  <label>
        <input type="text" placeholder="Kontakt" value="<?php echo $a->vratiKontakt() ?>" />
      </label>
	  <label>
        <input type="text" placeholder="Mjesto" value="<?php echo $a->vratiMjesto() ?>" />
      </label><br/>
	  <a href="#" class="button green">Dodaj</a>
	</div>
  </div>
</form>  


<div class="row">
<div class="large-12 columns">
<table>
	<thead>
		<tr>
		<th>Ime</th>
		<th>Prezime</th>
		<th>Fakultet</th>
		<th>Kontakt</th>
        <th>Mjesto</th>		
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
