<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Edycja Video</title>
    <meta charset="UTF-8">
    <meta name="author" content="Piotr P">
    <meta name="viewport" content="width-device-width,initlial-scale=1.0">
    <!-- Czcionka z Google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Spirax&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="image/favicon.ico" type="image/x-icon">

</head>

<body>
   <div id="prv-billboard"></div>
    <div id="wraper">
        <header>
            <div id="nag">
                
            </div>
            <p>Edycja Video</p>
            <img src="image/banner-949944_1280.jpg" alt="Okienko powitania">
        </header>
        <nav>
            <ul>
            <li><a class="menu" href="http://localhost/~kubus17opx_pl/index.php?pole1=1">Główna strona</a></li>
                <li><a href="#" >Programy</a>
              <ul>
                <li><a class="menu" href="http://localhost/~kubus17opx_pl/index.php?pole1=2">Adobe Premiere Elements </a></li>
                <li><a class="menu" href="http://localhost/~kubus17opx_pl/index.php?pole1=3" >PowerDirector Pro</a></li>
                <li><a class="menu" href="http://localhost/~kubus17opx_pl/index.php?pole1=4">Pinnacle Studio</a></li>
            </ul></li>
                <li><a href="#" >Przykłady VIDEO</a></li>
            <li><a class="menu" href="http://localhost/~kubus17opx_pl/index.php?pole1=5">Kontakt</a></li>
            </ul>
       
        </nav>
        <section>
            <article id="dane">
              <?php 
                $hop = $_GET['pole1'];
              If ($hop == 1 or $hop == ''){
                $get = readfile('start.php');
               echo ($get);}
              If ($hop == 2){
                $get = readfile('adobe.php');
               echo ($get);}
              If ($hop == 3){
                $get = readfile('power.php');
               echo ($get);}
              If ($hop == 4){
                $get = readfile('pinacle.php');
               echo ($get);}
              If ($hop == 5){
                $get = readfile('kontakt.php');
               echo ($get);}
              ?>
            </article>
        </section>
        <footer>
            <marquee>Made by PP @2017</marquee>
            
        </footer>
    </div>
    <script src="javasc/javsc.js"></script>
    
    </body>
</html>