<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./dist/output.css" rel="stylesheet">
</head>

<body class="bg-darkGray h-screen">

    <?php require('template/navbar.php'); ?>
    <main>
        <div class="w-10/12 mx-auto">
            <div class="h-[800px] py-16 bg-white rounded-[40px] flex flex-col items-center gap-16">
                <img class="w-[250px]" src="src/assets/img/logo_black.png" alt="">
                <div class="flex flex-col items-center">
                    <h2 class="text-4xl sm:text-6xl font-bold text-center">Connexion</h2>
                    <hr class="w-[200px] mx-auto mt-2 border-2 border-yellowLogo" />
                </div>
                <form id="login-form" class="w-full text-center space-y-5">
                    <div class="flex flex-col justify-center items-center gap-5 sm:gap-20 sm:flex-row">
                        <div class="flex flex-col gap-3">
                            <label for="pseudo" class="text-xl font-semibold">Identifiant</label>
                            <input type="text" id="pseudo" name="pseudo" class="px-3 py-1 rounded-lg border-2 border-lightBlue focus:border-darkBlue focus:outline-none" />
                            <p id="password" class="errorAlert mt-2 text-sm text-red-600 dark:text-red-500"></p>
                        </div>

                        <div class="flex flex-col gap-3">
                            <label for="password" class="text-xl font-semibold">Mot de passe</label>
                            <input type="password" id="password" name="password" class="px-3 py-1 rounded-lg border-2 border-lightBlue focus:border-darkBlue focus:outline-none" />
                            <p id="password" class="errorAlert mt-2 text-sm text-red-600 dark:text-red-500"></p>
                        </div>
                    </div>
                    <button type="submit" class="alertButton px-8 py-2 rounded-lg bg-lightBlue text-xl text-white font-semibold hover:bg-darkBlue">
                        Connexion
                    </button>
                </form>
            </div>
        </div>
    </main>
    <?php require('template/footer.php'); ?>
    <?php require('template/bottomNavbar.php'); ?>

    <script src="src/assets/js/ajax_handleFormSubmission.js"></script>
    <script>
        handleFormSubmission('#login-form', 'index.php?action=loginTreatment');
    </script>

</body>

</html>