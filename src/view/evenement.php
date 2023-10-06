<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous Evenement!</title>
    <link href="./dist/output.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="src/assets/svg/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="src/assets/svg/favicon.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="src/assets/svg/favicon.svg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Add this CSS */
        /* .flex {
            display: flex;
            flex-grow: 1;
        } */
    </style>
</head>

<body class="bg-darkGray h-screen flex flex-col gap-10">
    <?php require('template/navbar.php'); ?>

    <main class="flex flex-col items-center justify-center gap-4">
        <?php require('template/card.php'); ?>
    </main>
    <?php require('template/bottomNavbar.php'); ?>


    <?php require('template/footer.php'); ?>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll(".card");
            setTimeout(function() {
                cards.forEach(function(card) {
                    card.classList.add("show-card");
                });
            }, 500);
        });
    </script>
</body>

</html>