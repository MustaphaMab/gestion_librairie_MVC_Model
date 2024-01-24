<!-- <h1>Bienvenue dans notre librairie</h1> -->
<center>
    <br>
<?php

if(isset($_SESSION['nom']))
{
    echo "<p class = 'display-5' >  Bonjour, <strong>". $_SESSION['prenom']. "&nbsp" . $_SESSION['nom'] . "</strong> bienvenue dans votre session.</p>";
    echo "<br>";
    echo "<h1>Vous êtes désormais prêt à vivre une experience unique !</h1>";
}

?></center>