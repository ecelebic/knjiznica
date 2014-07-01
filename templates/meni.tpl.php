<?php
if (isset($_SESSION['operater_sifra']) && $_SESSION['operater_sifra']) {
    $user = $_SESSION['operater_sifra'];
} else {
    $user = false;
}

?>
        <ul class="menu">
<?php if(!$user): ?>
            <li><a href="prijava.php"><span>Prijava</span></a></li>
<?php endif ?>
            <li><a href="katalog.php"><span>Katalog</span></a></li>
<?php if ($user): ?>
            <li><a href="knjiga.php"><span>Knjiga</span></a></li>
            <li><a href="posudba.php"><span>Posudba</span></a></li>
            <li><a href="clan.php"><span>Član</span></a></li>
            <li><a href="odjava.php"><span>Odjava</span></a></li>
            
<?php endif ?>
        </ul>
