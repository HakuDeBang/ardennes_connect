<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardennes Connect</title>
    <link href="./dist/output.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="src/assets/svg/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="src/assets/svg/favicon.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="src/assets/svg/favicon.svg">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>

<body class="bg-darkGray h-screen flex flex-col gap-10">
    <!-- Navbar -->
    <?php require('template/navbar.php'); ?>
    <!-- Header -->
    <?php require('template/header.php'); ?>

    <!-- PROCHAINEMENT -->
    <section class="bg-lightGray flex flex-col items-center">
        <?php require('template/prochainement.php'); ?>
    </section>
    <!-- CARTE INTERACTIVE -->
    <section class="bg-darkGray flex flex-col items-center">
        <?php require('template/carte.php'); ?>
    </section>
    <!-- BOTTOM NAVBAR -->
    <?php require('template/bottomNavbar.php'); ?>
    <!-- FOOTER -->
    <?php require('template/footer.php'); ?>

    <!-- <script src="src/assets/js/carousel.js"></script> -->
</body>

</html>