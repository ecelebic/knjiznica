<?php
    include "../class/posudba.php";
    
    $sifra=$_GET["sifra"];
    $a=new posudba($sifra);
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
            <li><a href="index.php"><span>Posudba</span></a></li>
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



Nova posudba<br/>
<br/>
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
    <div class="large-12 columns">
<label>
        <input type="text" />
</label>
</div>
</div>

Član<br/>
<div class="row">
    <div class="large-12 columns">
<label>
        <input type="text" />
</label>
</div>
</div>
<a href="#" class="button green">Gotovo</a>


<div class="row">
<div class="large-12 columns">
<table>
	<thead>
		<tr>
		<th>Datum posudbe</th>
		<th>Datum povratka</th>
		<th>Knjiga</th>
		<th>Član</th>							
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
