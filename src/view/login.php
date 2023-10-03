<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php require('template/navbar.php'); ?>
    <main>
        <h2>Connexion</h2>
        <form id="login-form">
            <div>
                <input type="text" name="pseudo" />
                <p id="password" class="errorAlert mt-2 text-sm text-red-600 dark:text-red-500"></p>
            </div>

            <div>
                <input type="password" name="password" />
                <p id="password" class="errorAlert mt-2 text-sm text-red-600 dark:text-red-500"></p>
            </div>
            <button type="submit" class="alertButton px-10 py-3 text-main-white font-bold text-lg uppercase bg-main-red rounded-lg">
                Connexion
            </button>
        </form>
    </main>
    <?php require('template/footer.php'); ?>
    <script src="src/assets/js/ajax_handleFormSubmission.js"></script>
    <script>
        handleFormSubmission('#login-form', 'index.php?action=loginTreatment');
    </script>

</body>

</html>