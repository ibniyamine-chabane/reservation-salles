<header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="planning.php">Planning</a></li>
            <?php if (!empty($_SESSION['login'])): ?>
                <li><a href="reservation-form.php">Faire une réservation</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="logout.php">Se déconnecter</a></li>
            <?php else: ?>
                <li><a href="inscription.php">Inscription</a></li>
                <li><a href="connexion.php">Se connecter</a></li>
            <?php endif; ?>                  
        </ul>
    </nav>
</header>