<?php

# load json file
$znak = json_decode(file_get_contents('znakovi.json'), true);

?>

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Početna</title>
    <meta name="keywords" content="Geoguessr">
    <meta name="description" content="Geoguessr">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="stil.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
         <li class="nav-item active">
           <a class="nav-link" href="index.html">Pocetna <span class="sr-only"></span></a>
         </li>
          <li class="nav-item">
           <a class="nav-link" href="#">Znakovi</a>
          </li>
        </ul>
      </div>
    </nav>
        
        <div id="page" class="container">
                    <h1>Geoguessr</h1>
                    <h3>Ova stranica je namjenjena za učenje europskih dizajna znakova pješačkih prijelaza država koje su prisutne u Geoguesseru</h3>
                    <span>Europa je jedna od težih regija svijeta za snalaženje u prostoru zbog često sličnih geografsko prometnih odrednica različitih zemalja. Znakovi za pješački prijelaz imaju suptilne razlike među državama pa ih je kao takve vrijedno naučiti za raspoznavanje zemlje u kojoj se igrač nalazi.
                    </span> 
                    </br>
        </div>
        <img src="pijesacki.jpg" title="Hrvatski znak za pješački prijelaz">

    <table class="table table-dark table-striped-columns table table-hover table table-bordered border-primary">
      <thead>
        <tr>
          <th scope="col">Drzava</th>
          <th scope="col">Broj Pruga</th>
          <th scope="col">Staza</th>
          <th scope="col">Bijeli outline</th>
          <th scope="col">Zuta ispuna</th>
          <th scope="col">Crvena varijanta</th>
          <th scope="col">Remen</th>
          <th scope="col">Kapa</th>
          <th scope="col">Uzak dizajn</th>
          <th scope="col">Reflektirajuci stup</th>
          <th scope="col">Zuti dijamant</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($znak as $z) { ?>
        <tr>
          <td><?php echo $z['drzava']; ?></td>
          <td><?php echo $z['broj_pruga']; ?></td>
          <td><?php echo $z['staza']; ?></td>
          <td><?php echo $z['bijeli_outline']; ?></td>
          <td><?php echo $z['zuta_ispuna']; ?></td>
          <td><?php echo $z['crvena_varijanta']; ?></td>
          <td><?php echo $z['remen']; ?></td>
          <td><?php echo $z['kapa']; ?></td>
          <td><?php echo $z['uzak_dizajn']; ?></td>
          <td><?php echo $z['reflektirajuci_stup']; ?></td>
          <td><?php echo $z['zuti_dijamant']; ?></td>
        </tr>
        <?php } ?>
      </tbody>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <div id="copyright" class="container">
        <p>© Dominik Odak 2024.</p>
    </div>
    
    </body></html>