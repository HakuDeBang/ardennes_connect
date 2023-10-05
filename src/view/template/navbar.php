<nav class="sticky top-0 mx-auto bg-lightGray w-10/12 rounded-b-[40px]">
    <div class="flex flex-row items-center justify-between">
        <!-- logo -->
        <a href="#" class="flex mx-14">
            <img class="w-[60px] h-[60px]" src="src/assets/img/logo.png" alt="Logo Ardennes Connect">
        </a>
        <!-- Bouton Navbar -->
        <div class="flex flex-row items-center space-x-16">
            <a href="accueil" class="text-lg font-semibold hover:underline hover:underline-offset-8 hover:decoration hover:decoration-4 hover:decoration-darkBlue">Accueil</a>
            <a href="evenement" class="text-lg font-semibold hover:underline hover:underline-offset-8 hover:decoration hover:decoration-4 hover:decoration-lightBlue">Évènements</a>
            <a href="carte" class="text-lg font-semibold hover:underline hover:underline-offset-8 hover:decoration hover:decoration-4 hover:decoration-yellowLogo">Carte</a>
            <a href="activite" class="text-lg font-semibold hover:underline hover:underline-offset-8 hover:decoration hover:decoration-4 hover:decoration-redLogo">Activités</a>
        </div>
        <!-- Bouton Utilisateur -->
        <?php
        if (isset($_SESSION['user'])) { ?>
            <a href="profil" class="bg-lightBlue rounded-lg text-lg text-center font-semibold py-1.5 mx-14 w-40 text-lightGray">Mon Compte</a>
        <?php } else { ?>
            <a href="connexion" class="bg-lightBlue rounded-lg text-lg text-center font-semibold py-1.5 mx-14 w-40 text-lightGray">Connexion</a>
        <?php } ?>
    </div>
</nav>