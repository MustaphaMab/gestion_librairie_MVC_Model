    <?php


    var_dump($identification);
    $_SESSION['E_mail'] = $identification -> E_mail;
    $_SESSION['nom'] = $identification -> nom;
    $_SESSION['prenom'] = $identification -> prenom;
    $_SESSION['Statut'] = $identification -> Statut;
    
    ?>
    <script>window.location.href="?controller=home&action=home"</script>
    <a href="?controller=home&action=deconnexion">Deconnexion</a>