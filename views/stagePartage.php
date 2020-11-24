<!-- Header --><!DOCTYPE html><html lang=""><head>    <meta charset="utf-8">    <meta name="viewport" content="width=device-width, initial-scale=1">    <link rel="stylesheet" href="../styles/style.css">    <link rel="stylesheet" href="../styles/stagePartage.css">    <link rel="stylesheet" href="../styles/slider.css">    <link rel="preconnect" href="https://fonts.gstatic.com">    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">    <title>Proposer un stage</title>    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></head><body><div class="header">    <div class="headerchild">        <img src="../public/images/logomaitreartisan.png" alt="logo" height="120" width="160">    </div>    <div class="headerchild">        <a class="active" href="#home">ACCUEIL</a>    </div>    <div class="headerchild">        <a href="couverture.html">COUVERTURE</a>    </div>    <div class="headerchild">        <a href="ouvrage.html">OUVRAGE</a>    </div>    <div class="headerchild">        <a href="charpente.html">CHARPENTE</a>    </div>    <div class="headerchild">        <a href="stage.html">STAGES</a>    </div>    <div class="headerchild">        <a href="contact.html">CONTACT</a>    </div>    <div class="headerchild">        <a href="apropos.html">A PROPOS</a>    </div></div><div class="accueilphoto">    <div class="titrealigne">        <h1>METTRE EN LIGNE UN STAGE</h1><br>    </div></div><div class="photo">    <h2>Formulaire d'offre de stage</h2>    <div class="margin">        <div class="naqi">            <form method="_POST" action="">                        <label for="titre">Intitulé du poste :</label>                    <br/><br/>                        <input type="text" id="titre" name="titre" placeholder="Ex : Apprenti Charpentier">                    <br/><br/>                        <label for="description">Description du stage :</label>                        <textarea type="longtext" id="description" placeholder="Décrivez ici les tâches que le/la stagiaire devra effectuer." name="Description" > </textarea>                    <br/><br/>                        <label for="dateDebut">Date de debut -</label>                         <label for="dateFin">Date de fin :</label>                    <br/><br/>                        <input type="date" id="dateDebut" name="trip-start" value="<?php print(date("Y-m-d")); ?>" >                        <input type="date" id="dateFin" name="trip-start" value="<?php print(date("Y-m-d")); ?>" >                    <br/><br/>                        <div class="fichierdivenv">                            <div class="imagediv">                                <label id="text">Ajouter une image :</label>                            </div>                            <form>                                <div class="divfichiermargin">                                    <div class="fichierdiv">                                        <label for="file" class="label-file"><img                                                src="../public/images/icons/upload-solid.svg"                                                alt="upload" width="15" height="15"> Choisir un fichier </label>                                        <input id="file" class="input-file" type="file">                                    </div>                                </div>                            </form>                        </div>                    <br/><br/>                        <label for="profile">Qualifications requises :</label>                        <input type="text" id="profile" name="profile" placeholder="Ex : Bac +2">                    <br/><br/>                        <input type="submit" name="formStage" value="Envoyer"></input>                    <br/><br/>            </form>        </div>    </div></div><!-- Footer --><div class="footer">    <div class="icons">        <div class="tel">            <a href="tel:+33247367034"><img src="../public/images/icons/phone-alt-solid.svg" height="50" width="50" alt=""> 02                47 36 70 34</a>        </div>        <div class="icon">            <a class="resp-sharing-button__link"               href="https://www.facebook.com/sharer/sharer.php?u=${'http://localhost:63342/Maitre%20artisan/views/accueil.html?_ijt=k3mif1id8qu0sghuebpubht7ka'}" target="_blank"               rel="noopener" aria-label="Share on Facebook"> <img src="../public/images/icons/share-square-solid.svg" height="50" width="50"></a>            <a href="https://www.facebook.com/legermain.artisan"> <img src="../public/images/icons/facebook-brands.svg"                                                                       height="50" width="50"></a>            <a href="https://www.instagram.com/abclegermain/"> <img src="../public/images/icons/instagram-brands.svg"                                                                    height="50" width="50"></a>            <a href="https://twitter.com/abclegermain"> <img src="../public/images/icons/twitter-brands.svg" height="50"                                                             width="50"></a>        </div>    </div>    <div class="footerwood">        <div class="email">            <label for="email">Newsletter</label><br>            <input type="email" id="email" name="email">            <button name="inscrire">s'inscrire</button>        </div>        <div class="address">            <img src="../public/images/icons/map-marker-alt-solid.svg" height="50" width="50">            <h4>Zone Artisanale                <br> 72140 Rouez en Champagne            </h4>        </div>        <h5>@copyright</h5>    </div></div></body></html>