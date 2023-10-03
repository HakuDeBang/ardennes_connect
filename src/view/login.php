<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./dist/output.css" rel="stylesheet">
</head>

<body>

    <?php require('template/navbar.php'); ?>
    <main>
        <h2>Connexion</h2>
        <form id="login-form">
            <div>
                <input type="text" name="pseudo" class="border border-blue-500" />
                <p id="password" class="errorAlert mt-2 text-sm text-red-600 dark:text-red-500"></p>
            </div>

            <div>
                <input type="password" name="password" class="border border-blue-500"/>
                <p id="password" class="errorAlert mt-2 text-sm text-red-600 dark:text-red-500"></p>
            </div>
            <button type="submit" class="alertButton border border-blue-500">
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