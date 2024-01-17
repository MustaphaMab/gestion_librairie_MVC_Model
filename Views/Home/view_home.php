<!-- <h1>Bienvenue dans notre librairie</h1> -->

<?php
if(isset($_SESSION['nom']))
{
    echo "<p class = 'display-5' >  Bonjour, <strong>". $_SESSION['prenom']. "&nbsp" . $_SESSION['nom'] . "</strong> bienvenue dans votre session.</p>";
}

