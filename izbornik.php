 <div class="row">
    <div class="large-12 medium-12 small-12 columns">
    <nav class="top-bar" data-topbar="">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">

    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="">Izbornik</a></li>
  </ul>
  
<section class="top-bar-section">
    <ul class="menu">
      <li <?php if($_SERVER["REQUEST_URI"] == $putanja . "prijava.php") echo " class=\"active\""; ?>><a href="<?php echo $putanja;?>prijava.php"><span>Prijava</span></a></li>
      
    	
      <li <?php if(strpos($_SERVER["REQUEST_URI"], "index.html")) echo " class=\"active\""; ?>><a href="<?php echo $putanja;?>index.html"><span>Knjižnica</span></a></li>
      
	  <li <?php if(strpos($_SERVER["REQUEST_URI"], "Knjiga/index.html")) echo " class=\"active\""; ?>><a href="<?php echo $putanja;?>knjiga/index.html"><span>Knjiga</span></a></li>
      <li class="divider"></li>
      <?php if(isset($_SESSION["operater"])){?>
	  
	  <li <?php if(strpos($_SERVER["REQUEST_URI"], "Posudba/index.html")) echo " class=\"active\""; ?>><a href="<?php echo $putanja;?>posudba/index.html"><span>Posudba</span></a></li>
      <li <?php if(strpos($_SERVER["REQUEST_URI"], "Član/index.html")) echo " class=\"active\""; ?>><a href="<?php echo $putanja;?>clan/index.html"><span>Član<span></a></li>
      
      <?php }?>
    </ul>
   
  </section></nav>
    </div>
    </div>
