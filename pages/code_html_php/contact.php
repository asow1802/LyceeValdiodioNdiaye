<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../code_css/contact.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>
    <title>Lycée Valdiodio Ndiaye de Kaolack</title>
</head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <div class="subnav">
          <button class="subnavbtn">A propos<i class="fa fa-caret-down"></i></button>
          <div class="subnav-content">
            <a href="archive.php">Archive</a>
            <a href="concours.php">Concours</a>
            <a href="historique.php">Historique</a>
          </div>
        </div> 
        <div class="subnav">
          <button class="subnavbtn">Activités<i class="fa fa-caret-down"></i></button>
          <div class="subnav-content">
            <a href="clubscientifique.php">Club Scientifique</a>
            <a href="cluballemand.php">Club allemand</a>
            <a href="clubespagnol.php">Club Espagnol</a>
            <a href="clubportugais.php">Club Portugais</a>
          </div>
        </div> 
        <div class="subnav">
          <button class="subnavbtn">Profs<i class="fa fa-caret-down"></i></button>
          <div class="subnav-content">
            <a href="maths.php">Maths</a>
            <a href="sciencephysique.php">Sciences Physique</a>
            <a href="anglais.php">Anglais</a>
            <a href="svt.php">SVT</a>
          </div>
        </div>
        <a href="administration.php">administration</a>
        <a href="activite.php">Activité</a>
        <a href="historique.php">Historique</a>
        <a href="contact.php">Contact</a>
      </div>
      <img src="../images/flyer1.png" alt="" width="100%" height="20%">

    
    <!-- intégration de la carte -->
    <div id="map"></div>
    <script src="../code_js/contact.js"></script>
    <!-- formulaire de contact -->
    <div id="formulaire">
        <div><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et illum qui sed consequuntur provident quod placeat, similique laborum rem quis libero iusto autem sapiente totam veniam quasi quidem quae est!</p></div>

        <div class="container">
            <form action="/action_page.php">
              <label for="fname">votre nom complet</label>
              <input type="text" id="fname" name="firstname" placeholder="votre nom complet..">
          
              <label for="lname">votre e-mail</label>
              <input type="email" id="lname" name="lastname" placeholder="votre email.">

              <label for="lname">Votre numéro</label>
              <input type="text" id="lname" name="lastname" placeholder="téléphone..">

              <label for="lname">l'objet de votre message</label>
              <input type="text" id="lname" name="lastname" placeholder="objet..">
          
              <label for="subject">message</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
          
              <input type="submit" value="envoyer">
            </form>
          </div>          
    </div>
</body>
<footer>
    <div><p>téléphone : +221 76 001 00 02</p></div>
    <div><p>Impedit possimus alias repudiandae quo.</p></div>
    <div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p></div>
    <div><p>Officia dignissimos ducimus quod nisi non repellendus,</p></div>
</footer>
</html>