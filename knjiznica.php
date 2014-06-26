<?php 
include_once 'konfiguracija.php';

if(!isset($_SESSION["operater"])){
	header("Location: " . $putanja .  "index.php");
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<title>Knjižnica 01</title>
<?php include_once 'head.php';?>
</head>
<body>
	<?php include_once 'zaglavlje.php';?>
	<?php include_once 'izbornik.php';?>
	
	
	<!--  Ovo je specifično za stranicu -->
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<div class="panel">
			
			<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
			</div>
		</div>
	</div>
	<!--  /Ovo je specifično za stranicu -->
	
	
	<?php include_once 'podnozje.php';?>

	<script src="<?php echo $putanja;?>js/vendor/jquery.js"></script>
	<script src="<?php echo $putanja;?>js/foundation.min.js"></script>
	<script src="<?php echo $putanja;?>js/highcharts.js"></script>
<script src="<?php echo $putanja;?>js/exporting.js"></script>
	<script>
      $(document).foundation();
      $(function () {
    	    $('#container').highcharts({
    	        chart: {
    	            plotBackgroundColor: null,
    	            plotBorderWidth: null,
    	            plotShadow: false
    	        },
    	        title: {
    	            text: 'Broj zapisa po autoru'
    	        },
    	        tooltip: {
    	    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    	        },
    	        plotOptions: {
    	            pie: {
    	                allowPointSelect: true,
    	                cursor: 'pointer',
    	                dataLabels: {
    	                    enabled: true,
    	                    color: '#000000',
    	                    connectorColor: '#000000',
    	                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
    	                }
    	            }
    	        },
    	        series: [{
    	            type: 'pie',
    	            name: 'Udio autora',
    	            data: [
    	                <?php
           $pdo=new PDO("mysql:host=" . $server . ";dbname=" . $baza,$korisnik,$lozinka);
$pdo->exec("set names utf8;");	
$izraz = $pdo->prepare("select  a.ime, a.prezime, count(b.katalog) as ukupno from autor a left join katalog_autor b on a.sifra=b.autor group by a.ime, a.prezime;");
$izraz->execute();
$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
$lista="";
foreach ($rezultati as $r) {
	$lista=$lista . "['" . $r->ime . " " . $r->prezime . "',  " . $r->ukupno ."],";
}
            echo $lista;
            ?>
    	                
    	            ]
    	        }]
    	    });
    	});
    </script>
</body>
</html>
