<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">

    <title>Résidence Modri</title>

    <link rel="stylesheet" href="style.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li id="logo"><a href="#">Résidence Modri</a></li>
          <li><a href="#discovery">découvrir</a></li>
          <li><a href="#contact">Nous contacter</a></li>
          <li><a href="#Services">Visiter</a></li>

        </ul>
      </nav>
      <div id="imageMain">
        <h1>Résidence Modri</h1>
        <div id="Line"></div>
        <h3>Chambres Climatisées</h3>
      </div>

    </header>
    <section id="presentation">
      <div id="text">
        <h2>Un lieu unique, pour un séjour unique</h2>
        <p>La résidence Modri, est une villa duplexe situé dans la commune de Cocody plus précisement à la riviéra nouveau goudron Cité Laurier17. Une cité paisible et très sécurisé. La résidence est aussi doté d'une camera de surveillance </p>
      </div>
      
      <div id="Services">
        <div class="imagesServices">
          <h4>Chambre 1</h4>
          <a href="#"><img src="media/chambre1.jpeg" alt="carte"></a>
        </div>
        <div class="imagesServices">
          <h4>Chambre 2</h4>
          <a href="#"><img src="media/chambre2.jpeg" alt="chambre"></a>
        </div>
        <div class="imagesServices">
          <h4>Douche</h4>
          <a href="#"><img src="media/doucheChambre2.jpeg" alt="repas"></a>
        </div>
      </div>

    </section>
    <section id="discovery">
      <h2>Et tant à découvrir...</h2>
      <ul>
        <li id="livingroom"><p>Salon</p></li>
        <li id="Balcony"><p>Balcon</p></li>
        <li id="bar"><p>Bar</p></li>  
        <li id="terrace"><p>terrasse</p></li> 
      </ul>
    </section>

    <footer>
      <h2 id="contact">Contactez-nous</h2>
      <form action="traitement.php" method="post">
        <input type="text" placeholder="Nom" name="nom">
        <input type="email" placeholder="E-mail" name="email">
        <textarea placeholder="Votre message ici..." name="text"></textarea>
        <button type="submit" value="envoyer" name="submit">Envoyer</button>
      </form>

      <div id="line2"></div>
      <div id="copyrightEtIcons">
        <div id="copyright">
          <span>© fromSylvinho(); 2022</span>
        </div>
        <div id="icons">
          <a href="http://www.twitter.fr"><i class="fa fa-twitter"></i></a>
          <a href="http://www.facebook.fr"><i class="fa fa-facebook"></i></a>
          <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
           
        </div>
      </div>

    </footer>
  </body>

</html>