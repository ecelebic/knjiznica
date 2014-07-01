    <style>
    body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}
     
    .fadein {
    position:absolute; height:332px; width:100%; margin:0 auto;
    background: url("slideshow-bg.png") repeat-x scroll left top transparent;
    padding: 10px;
    }
    .fadein img { position:absolute; left:10px; top:10px; }
    </style>
     
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
    $(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
    });
  